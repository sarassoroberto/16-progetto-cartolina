<?php

/**
 * Classe per costruire intelAITURA DI UNA PAGINA WEB
 *
 * @author ROBERTO SARASSO
 */

class Page {
    private $title;
    private $section;
    private $content;
    private $page_id;
    private $brand;
    private $data;
    
    public function __construct($page_id) {
        $this->page_id = $page_id;
        // this.page_id
    }
    
    public function render() {
        include_once 'layout/header.php';
        include_once 'layout/nav-bar.php';
        ?>
        
        <div class="container">
            <h1 class="page-header"><?= $this->section ?></h1>
            <?php $this->getContent() ?>
        </div>
        <?php
        include_once 'layout/footer.php';
    }
    
    function getTitle() {
       return $this->title;
    }

    function getSection() {
        return $this->section;
    }

    function getContent() {
        
        if(file_exists($this->content)){
            include $this->content; 
        }else{
            echo "nessun contenuto";
        }
        
    }

    function getPage_id() {
        return $this->page_id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setSection($section) {
        $this->section = $section;
    }

    function setContent($content) {
    
        $this->content = $content;
    }

    function setPage_id($page_id) {
        $this->page_id = $page_id;
    }

    function getBrand() {
        return $this->brand;
    }

    function setBrand($brand) {
        $this->brand = strip_tags($brand);
        //$this->brand = $brand;
    }

    function getData($key) {
        return $this->data[$key];
    }

    function setData($key,$data) {
        $this->data[$key] = $data;
    }


    
}
