<?php
/*
     $fileName="docs/content.txt";
     $file=fopen($fileName,'w');
     if($file==false){
        echo "There is some error";
     }
     else{
        $filecontent="hhhhhhhhhhhhhhhhhhhhhhhhh";
        fwrite($file,$filecontent);
        fclose($file);
        
     }
     */
     $fileName="docs/content.txt";
     $file=fopen($fileName,'r');
     $fileSize=filesize($fileName);
     $read=fread($file,$fileSize);
     echo $read;

?>