<?php
require_once __DIR__.'/App/libs.php';

$startPath = $_SERVER['DOCUMENT_ROOT'];
if(isset($_POST['name'])){
    $nameFile = $_POST['name'];
}else{
    $nameFile = 'uncknow';
}


    $catalog = cutOfPath($startPath,'/');
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="App/css/style.css">
</head>
<body>
     <div class="wrap-main">
         <div class="left-view">
            <?php 
                include 'App/views/pathUser.php';
                
                foreach(dirOpen($catalog) as $item){
                    
                    include 'App/views/resourses.php';
                }
            ?>
         </div>
         <div class="right-view">
             <p>
                 <?= $nameFile ?>
            </p>
         </div>   
     </div>
</body>
</html>

 