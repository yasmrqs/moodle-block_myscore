<?php

require_once('../../config.php');

global $DB;

$teste = $DB->get_record('assign_grades', ['id' => '1']);

var_dump($teste);

die();
