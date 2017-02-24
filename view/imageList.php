<?php
            $immagini = $this->data['immagini'];
            foreach ($immagini as $file){
                if($file->getExtension()=='jpg'){
             
                ?>
                <div class="col-xs-3">
                    <img  class='img-responsive' src='<?=$file->src_xs?>'> 
                    <label><?= $file->title ?></label>
                </div>
             <?php
            };
         
       }

