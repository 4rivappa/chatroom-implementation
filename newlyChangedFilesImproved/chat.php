<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="StyleSheet" href="../style/style.css"/>
    <script src="../script/script.js"></script>
  </head>
  <body>
    <header>
      <div style="display:inline">
        <strong class="noselect"><b><a style="text-decoration:none" href="../index.php">Go Home</a></b></strong>
      </div>
      <!-- worked on refresh option
           <div style="display:inline">
             <strong class="noselect"><b><a style="text-decoration:none" href="../index.php">Go Home</a></b></strong>
           </div>
      -->

      <div id="outputArea">
        <?php
        /*
        function readmytext(){
              $filename = "../text/text.txt";
              $file = fopen( $filename, "r" );

              if( $file == false ) {
                 echo ( "Error in opening file" );
                 exit();
              }

              $filesize = filesize( $filename );
              $filetext = fread( $file, $filesize );
              fclose( $file );

              // echo ( "File size : $filesize bytes" );
              echo ( "<pre>$filetext</pre>" );
        }
        */
         //function formatmyfile(){
        //       $filename = "../text/text.txt";
        //       $file = fopen( $filename, "a+" );
        //       ftruncate($file, 24);
        //       fclose($file);
        //       readmytext();
        //  }
            //include "readFile.php";
           //include "formatmyFile.php"
           include "appendmyFile.php"
          //  include "/index.php"
            //$nameOfUser = $name;
        ?>
        <?php
           include "formatmyFile.php"
        ?>
        <?php
           include "readFile.php"
        ?>
      </div>
      <div id="chat">
        <?php readmytext(); ?>
      </div>
    </header>
    <main>
      <form class="noselect" method="post" action="chat.php">
        <div style="display:inline">
          <input type="text" placeholder="name" name="name"/>
        </div>
        <div style="display:inline">
          <input type="text" placeholder="message" name="writtentext"/>
        </div>
        <div style="display:inline">
          <button type="submit"><b>SEND</b></button>
        </div>
        <div style="display:inline">
          <!-- <button type="submit" name="deleteButton"><b>Delete chat</b></button> -->
        </div>
        <div style="display:inline">
          <button type="button" name="refreshButton" onClick="window.location.reload()"><b>REFRESH</b></button>
        </div>
      </form>
      <script>
      //element.scrollTop = element.scrollHeight;
      window.scrollTo(0, document.body.scrollHeight || document.documentElement.scrollHeight);
      //window.scrollTo(0, screen.availWidth);
      </script>
      <?php
        if($_POST){
          if(isset($_POST["writtentext"]) && $_POST["writtentext"]!=null){
             $writtenText = $_POST["writtentext"];
             $name = $_POST["name"];
             appendmytext($writtenText, $name);
             echo("<script>");
             echo("window.location.replace(\"chat.php\")");
             //echo("window.scrollTo(0,document.body.scrollHeight)");
             echo("</script>");
          }
          if(isset($_POST["deleteButton"])){
             formatmyfile();
             appendmytext2();
             echo("<script>");
             echo("window.location.reload(true)");
             echo("</script>");
          }
          //echo date('Y-m-d H:i:s');
          //echo '<script type="text/javascript">location.reload();</script>';
        }
      ?>

    </main>
    <footer class="noselect" id="chatFooter">
        <!--<p><b>Double click the button to function</b></p>-->
        <p><b> Refresh the page to get latest messages</b></p>
       <p>product by <strong><b>ECCSEE</b></strong></p>
    </footer>
  </body>
</html>
