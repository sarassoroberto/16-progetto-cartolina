<?php
include_once './class/Page.php';
include_once './class/Cartolina.php';
include_once './model/CartolinaModel.php';

//page e una view
$page = new Page($controller);
$model = new CartolinaModel();
$model->setFolder("dummy-images/upload/");

$nome_file_cartolina_selezionata = filter_input(INPUT_POST, 'cartolina_selezionata');
$cartolina = $model->readID($nome_file_cartolina_selezionata);



$page->setData('cartolina_selezionata', $cartolina);

$page->setSection("Hai selezionato questa cartolina:");
$page->setBrand("Cartolina");
$page->setTitle("cartolina selezionata");



$page->setContent('view/cartolina_selezionata.php');

$page->render();


//print_r($page);
