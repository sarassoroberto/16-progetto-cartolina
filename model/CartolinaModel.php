<?php

class CartolinaModel {
    private $folder;
    
    function getFolder() {
        return $this->folder;
    }

    function setFolder($folder) {
        
        if(file_exists($folder)){
            $this->folder = $folder;
        }else{
            echo "cartella inesistete";
        }
        
    }

    public function readAll() {
         $immagini = new FilesystemIterator($this->folder);
         //Cartolina
         $res = array();
         foreach ($immagini as $immagine){
          $res[] = new Cartolina($immagine->getPathname()); 
          
         }
         
         return $res;
         
    }
}
