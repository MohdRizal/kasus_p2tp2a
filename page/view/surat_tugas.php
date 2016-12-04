<?php
if(!defined('BASEPATH')) exit("No direct scripts are allowed");
$r = get_all("pelapor");
$r->setFetchMode(PDO::FETCH_OBJ);

