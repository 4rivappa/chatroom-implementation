<?php
   function formatmyfile(){
         $filename = "../text/text.txt";
         $file = fopen( $filename, "a+" );
         ftruncate($file, 20); 
         fclose($file);
    }
?>
