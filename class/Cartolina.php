<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cartolina
 *
 * @author saras
 */
class Cartolina extends SplFileInfo{
    public $title;
    public $src_original;
    public $src_lg;
    public $src_xs;
    
    public function __construct($fileInfo) {
        parent::__construct($fileInfo);
        //dummy-100x100-Anemone-plain
        $this->src_lg = "images/800x600/dummy-800x600-".$this->getBasename();
        $this->src_xs = "images/100x100/dummy-100x100-".$this->getBasename();
       
        $this->title = substr($this->getBasename(".".$this->getExtension()), 0,15);
        
    }
}
