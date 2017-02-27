<?php
include_once './class/Page.php';
include_once './class/Cartolina.php';
include_once './model/CartolinaModel.php';

//page e una view
$page = new Page($controller);
$model = new CartolinaModel();

$model->setFolder("dummy-images/upload");
$data = $model->readAll();

$page->setSection("Carousel full screen");
$page->setBrand("Cartolina");
$page->setTitle("carousel full screen");
$page->setData('immagini', $data);
$page->setContent('view/carousel.php');

$page->render();
