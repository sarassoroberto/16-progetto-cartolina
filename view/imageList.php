<?php
            $immagini = $this->data['immagini'];
            foreach ($immagini as $file){
                if($file->getExtension()=='jpg'){
             
                ?>
                <div class="col-xs-3">
                    
                    <a href="<?= $file->src_lg ?>" data-toggle="lightbox">
                        <img  class='img-responsive' src='<?=$file->src_xs?>'> 
                    </a>
                    <label>
                        <input type="radio" name="cartolina_selezionata" value="<?= $file->id ?>">
                        <?= $file->title ?>
                    </label>
                </div>
             <?php
            };
         
       }

