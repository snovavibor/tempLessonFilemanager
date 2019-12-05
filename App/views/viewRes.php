<?php

?>


<div class="resourse light">
                <form action="" method="POST">
                <!-- <input type="hidden" name="controller" value="anotherDir"> -->
                <input type="hidden" name="name" value="<?php echo pathinfo($item)['basename'] ?>">
                <input type="hidden" name="pathTo" value="<?php echo $catalog.'/'.$item ?>">
                <button  class="resourse__button bold <?php echo isFolder($item,$catalog) ? '': 'italic' ?>"><?= pathinfo($item)['filename'] ?>
                <span>

                <?php 
                    if( isFolder($item,$catalog) ){
                                    echo '';
                }else{
                    if(isset(pathinfo($item)['extension'] )){
                    echo '.'.pathinfo($item)['extension'];
                }else{
                    echo '';
                }
                }                                                  
                ?>

                </span>
                </button>
                </form>
            
            </div>