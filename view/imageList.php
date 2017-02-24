<?php
            $immagini = $this->data['immagini'];
            foreach ($immagini as $file){
                if($file->getExtension()=='jpg'){
                $src = $file->getPathname();
                ?>
                <div class="col-xs-3">
                    <img  class='img-responsive' src='<?=$src?>'> 
                </div>
             <?php
            };
         
       }

