/*
 * jQuery Wizard Builder
 * version: 0.5.0
 * Author: Joel Colombo
 *
 * Copyright (c) 2016 J. Colombo
 * Licensed under the MIT license.
 */

/*
 * Original Project Credit (Prior to Forking)
 *
 * jQuery / jqLite Wizard Plugin
 * version: 0.0.4
 * Author: Girolamo Tomaselli http://bygiro.com
 *
 * Copyright (c) 2013 G. Tomaselli
 * Licensed under the MIT license.
 */

// compatibility for jQuery / jqLite
var bg = bg || false;
if(!bg){
	if(typeof jQuery != 'undefined'){
		bg = jQuery;
	} else if(typeof angular != 'undefined'){
		bg = angular.element;

		(function(){
			bg.extend = angular.extend;
			bg.isFunction = angular.isFunction;

			function selectResult(elem, selector){
				if (elem.length == 1)
					return elem[0].querySelectorAll(selector);
				else {
					var matches = [];
					for(var i=0;i<elem.length;i++){
						var elm = elem[i];
						var nodes = angular.element(elm.querySelectorAll(selector));
						matches.push.apply(matches, nodes.slice());
					}
					return matches;

				}

			}

			bg.prototype.find = function (selector){
				var context = this[0];
				// Early return if context is not an element or document
				if (!context || (context.nodeType !== 1 && context.nodeType !== 9) || !angular.isString(selector)) {
					return [];
				}
				var matches = [];
				if (selector.charAt(0) === '>')
					selector = ':scope ' + selector;
				if (selector.indexOf(':visible') > -1) {
					var elems = angular.element(selectResult(this, selector.split(':visible')[0]))

					forEach(elems, function (val, i) {
						if (angular.element(val).is(':visible'))
							matches.push(val);
					})

				} else {
					matches = selectResult(this, selector)
				}

				if (matches.length) {
					if (matches.length == 1)
						return angular.element(matches[0])
					else {
						return angular.element(matches);
					}
				}
				return angular.element();
			};

			bg.prototype.outerWidth = function () {
				var el = this[0];
				if(typeof el == 'undefined') return null;
				return el.offsetWidth;
			};

			bg.prototype.width = function () {
				var el = this[0];
				if(typeof el == 'undefined') return null;
				var computedStyle = getComputedStyle(el);
				var width = el.offsetWidth;
				if (computedStyle)
					width -= parseFloat(computedStyle.paddingLeft) + parseFloat(computedStyle.paddingRight);
				return width;
			};

		})();
	}
}

(function ($, document, window){

	"use strict";

    var pluginName = "wizardBuilder",
    // the name of using in .data()
	dataPlugin = "plugin_" + pluginName,
	defaults = {
        /* Options/Settings */
		actionBar: true,
		bottomButtons: true,
		autoSubmit: false,
        stepCounterType: 'numbers', // 'numbers', 'letters', 'none'

        /* Events*/
		onCompleted: false,
        onStepLoadBefore: false,

        /* Style & Design */
		nextClass     : 'btn btn-default btn-mini btn-xs',
        prevClass     : 'btn btn-default btn-mini btn-xs',
        completeClass : 'btn-success',

        /* Text / Labels*/
		btnText:{
			complete  : 'Complete',
			next      : 'Next',
			previous  : 'Previous',
		},

        /* Current Step */
        currentStep: 0,

	},

	attachEventsHandler = function(){
		var that = this;

		that.$element.find('.btn-prev:not(.disabled):not(.hidden)').on('click', function(e){
			e.stopPropagation();
			that.previous.call(that,true,e);
		});

		that.$element.find('.btn-next').on('click', function(e){
			e.stopPropagation();
			that.next.call(that,true,e);
		});

		that.$element.find('.steps > li').on('click', function(e){
			e.stopPropagation();
			var step = $(this).attr('data-step'),
			isCompleted = $(this).hasClass('completed');
			if(!isCompleted) return true;

			that.setStep.call(that,step,e);
		});
	},

	checkStatus = function(){
		var that = this,
			currentWidth,
			stepsWidth = 0,
			stepPosition = false,
			steps = that.$element.find('.steps'),
			stepsItems = that.$element.find('.steps > li');

		if(!this.currentStep) { this.currentStep = 1; }

		stepsItems.removeClass('active');
		that.$element
			.find('.steps > li[data-step="'+ that.currentStep +'"]')
			.addClass('active');

		that.$element.find('.steps-content .step-pane').removeClass('active');
		var current = that.$element.find('.steps-content .step-pane[data-step="'+ that.currentStep +'"]');
			current.addClass('active');

		for(var i=0;i<stepsItems.length;i++){
			var stepLi = $(stepsItems[i]);
			if(that.currentStep > (i+1)){
				stepLi.addClass('completed');
			} else {
				stepLi.removeClass('completed');
			}

			currentWidth = stepLi.outerWidth();
			if(!stepPosition && stepLi.hasClass('active')){
				stepPosition = stepsWidth + (currentWidth / 2);
			}

			stepsWidth += currentWidth;
		}

		// set buttons based on current step
		that.$element.find('.btn-next').removeClass('final-step '+that.options.completeClass);
		that.$element.find('.btn-prev').removeClass('disabled hidden');
		if(that.currentStep == stepsItems.length){
			// we are in the last step
			that.$element.find('.btn-next').addClass('final-step '+that.options.completeClass);
		} else if(that.currentStep == 1){
			that.$element.find('.btn-prev').addClass('disabled hidden');
		}

		// move steps view if needed
		var totalWidth = that.$element.width() - that.$element.find('.actions').outerWidth();

		if(stepsWidth < totalWidth) return;

		var offsetDiff = stepPosition - (totalWidth / 2);
		if(offsetDiff > 0){
			// move it forward
			steps.css('left',-offsetDiff);
		} else {
			// move it backward
			steps.css('left',0);
		}
	},

	moveStep = function(step, direction, event, onStepLoadBefore){
		var canMove = true,
		steps = this.$element.find('.steps > li'),
		triggerEnd = false;

        onStepLoadBefore = (onStepLoadBefore === false) ? false : true;

		// check we can move
		if(onStepLoadBefore && typeof this.options.onStepLoadBefore == 'function'){
			canMove = this.options.onStepLoadBefore(this,direction,event);
		}

		if(!canMove) return;

		if(step){
			this.currentStep = parseInt(step);
		} else {
			if(direction){
				this.currentStep++;
			} else {
				this.currentStep--;
			}
		}

		if(this.currentStep < 0) this.currentStep = 0;
		if(this.currentStep > steps.length){
			this.currentStep = steps.length;
			triggerEnd = true;
		}

		checkStatus.call(this);

		if(triggerEnd){
			if(typeof this.options.onCompleted == 'function'){
				this.options.onCompleted(this);
			} else if(this.options.autoSubmit) {
				// search if wizard is inside a form and submit it.
				var form = this.$element.closest('form');
				if(form.length)	form.submit();
			}
		}
	},

	methods = {
		init: function (element, options) {
			var that = this;
			this.$element = $(element);
			this.options = $.extend(true, {}, defaults, options);

			var opts = this.options;

			this.$element.addClass('wizard');

            // Set step count
            this.steps = this.$element.find('.steps > li').length;

			// add the buttons
			var stepsBar = this.$element.find('.steps'),
			actionBar = this.$element.find('.action-bar'),
			bottomActions = this.$element.find('.bottom-actions'),
			progressBar = this.$element.find('.progress-bar'),
			html = '';

			// wrap steps in a container with hidden overflow, if it doesn't have a container
			if(stepsBar.parent().hasClass('wizard')){
				// let's add a container
				stepsBar.wrap('<div class="steps-index-container"></div>');
			} else {
				stepsBar.parent().addClass('steps-index-container');
			}

            html = '';
			if(opts.actionBar && stepsBar.length && !actionBar.length){
				html += '<div class="action-bar"><div class="btn-group">';
				html += '<span class="'+this.options.prevClass+' btn-prev"><span class="previous-text">'+ opts.btnText.previous +'</span></span>';
				html += '<span class="'+this.options.nextClass+' btn-next"><span class="next-text">'+ opts.btnText.next +'</span><span class="complete-text">'+ opts.btnText.complete +'</span></span>';
				html += '</div></div>';

				stepsBar.after(html);
			}

			html = '';
			if(opts.bottomButtons && !bottomActions.length){
				html += '<div class="bottom-actions">';
				html += '<span class="'+this.options.prevClass+' btn-prev"><span class="previous-text">'+ opts.btnText.previous +'</span></span>';
				html += '<span class="'+this.options.nextClass+' btn-next"><span class="next-text">'+ opts.btnText.next +'</span><span class="complete-text">'+ opts.btnText.complete +'</span></span>';
				html += '</div>';

				that.$element.find('.steps-content').append(html);
			}

			// add arrows to btn
			this.$element.find('.btn-prev').prepend('<i class="wiz-icon-arrow-left"></i>');
			this.$element.find('.btn-next').append('<i class="wiz-icon-arrow-right"></i>');

			// get steps and prepare them
			var content, step_num, stepsLi = this.$element.find('.steps > li');

			for(var i=0;i<stepsLi.length;i++){
				var step = $(stepsLi[i]),
				target = step.attr('data-step'),
				content = '<span class="step-text">'+ step.html() +'</span>';
                if (this.options.stepCounterType=='none') { step_num = ''; }
                else if (this.options.stepCounterType=='letters') { step_num = String.fromCharCode(65+i); }
                else { step_num = (i+1); }
                if (step_num != '') {
                    step_num = '<span class="label">' + step_num + '</span>';
                }
				var error_count = "<span class='step-errors'></span>";

				step.empty().html('<span class="step-index">'+step_num+'</span>' + content + error_count + '<span class="wiz-icon-chevron-right colorA"></span><span class="wiz-icon-chevron-right colorB"></span>');

				that.$element.find('.steps-content [data-step="'+ target +'"]').addClass('step-pane');

				// detect currentStep
				if(step.hasClass('active') && !that.currentStep){
					that.currentStep = i+1;
				}
			}

			this.$element.find('.steps > li:last-child').addClass('final');

			attachEventsHandler.call(this);

			var callbacks = ['onStepLoadBefore','onCompleted'],cb;
			for(var i=0;i<callbacks.length;i++){
				cb = callbacks[i];
				if(typeof this.options[cb] == 'string' && typeof window[this.options[cb]] == 'function'){
					this.options[cb] = window[this.options[cb]];
				}
			}

			checkStatus.call(this);
		},

        setErrorCount: function (params){
            var step = params.step;
            var count = params.errors;
            //console.log("Set Error Count of Step "+step+" to "+count);
            var eh = $(this.$element).find( 'li[data-step="'+step+'"] span.step-errors' ); //
            if (eh) {
                if (count > 0) {
                    eh.html("<span class='label'>" + count + "</span>");
                } else {
                    eh.html("");
                }
            }
        },

        getStepCount: function () {
            return this.steps;
        },

		next: function(onStepLoadBefore,event){
			moveStep.call(this,false,true,event,onStepLoadBefore);
		},

		previous: function(onStepLoadBefore,event){
			moveStep.call(this,false,false,event,onStepLoadBefore);
		},

		setStep: function(step, onStepLoadBefore, event){
			moveStep.call(this,step,null,event,onStepLoadBefore);
		}
	};

    var main = function (method) {
        var thisPlugin = this.data(dataPlugin);
        if (thisPlugin) {
            if (typeof method === 'undefined') { return thisPlugin; }
            if (typeof method === 'string' && thisPlugin[method]) {
                return thisPlugin[method].apply(thisPlugin, Array.prototype.slice.call(arguments, 1));
            }
            return console.log('Method ' + method + ' does not exist on jQuery / jqLite' + pluginName);
        } else {
            if (!method || typeof method === 'object') {
				thisPlugin = $.extend({}, methods);
				thisPlugin.init(this, method);
				this.data(dataPlugin, thisPlugin);
				return this;
            }
            return console.log( pluginName +' is not instantiated. Please call $("selector").'+ pluginName +'({options})');
        }
    };

	// plugin integration
	if($.fn){
		$.fn[ pluginName ] = main;
	} else {
		$.prototype[ pluginName ] = main;
	}

	$(document).ready(function(){
		var mySelector = document.querySelector('[data-wizard-builder]');
		$(mySelector)[ pluginName ]({});
	});
}(bg, document, window));
