<?php
$path = "galeri";


$dir    = $path;
$allFiles = scandir($dir);

foreach($allFiles as $file) {

    if (!in_array($file,array(".","..")))
    {

        $rename = rename(__DIR__.DIRECTORY_SEPARATOR.$path.DIRECTORY_SEPARATOR.$file, __DIR__.DIRECTORY_SEPARATOR.$path.DIRECTORY_SEPARATOR.strtolower($file));
        if($rename){
            echo $file." OK <br />";
        }else{
            echo $file." ERROR_______________ <br />";
        }

    }


}
