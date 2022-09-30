<?php
   function appendmytext($writtenText, $name){
         $filename = "../text/text.txt";
         $file = fopen( $filename, "a" );
         fwrite($file,$name);
         fwrite($file,": ");
         fwrite($file, $writtenText);
         fwrite($file, "\n");
         fclose($file);
    }
    function appendmytext2(){
         $filename = "../text/text.txt";
         $file = fopen( $filename, "a" );
         fwrite($file, "\n");
         fclose($file);
    }
?>
