<?php
include_once './class/Page.php';
include_once './class/Cartolina.php';
include_once './model/CartolinaModel.php';

//page e una view
$page = new Page($controller);
$model = new CartolinaModel();

$model->setFolder("dummy-images/upload");
$data = $model->readAll();

$page->setSection("Carica una nuova cartolina");
$page->setBrand("Cartolina");
$page->setTitle("home page");
$page->setData('immagini', $data);

$page->setContent('view/form_upload.php');

$page->render();


//print_r($page);
