<?php
session_start();
require 'includes/autoloader.php';
require 'includes/exceptions.php';

lib::setitem('controller', new controller($_GET['u']));

$view = new view();
lib::getitem('controller')->render();
$content = $view->finish();

echo view::show('shell', array('body'=>$content));