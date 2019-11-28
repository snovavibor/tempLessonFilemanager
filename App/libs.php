<?php

function cutOfPath($path,$des)
{
    $temp = substr( $path, 0, strripos($path, $des));
    return $temp;
}

function dirOpen($catalog)
{
    $tot =[];
    
    if(is_dir($catalog)){
        if( $dh = opendir($catalog) ){
          
           while( false !==$file = readdir($dh)){
              
               if($file != '.' && $file !='..'){
                   $tot[] = $file;     
                                 
               }
                                                             
           }
           
           closedir($dh);
           
           
        }
   }
   
   return $tot;
}



function isFolder($file, $catalog)
{
    
  return (filetype($catalog.'/'.$file)== 'dir');
                              
}

