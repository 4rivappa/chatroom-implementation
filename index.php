<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="StyleSheet" href="style/style.css"/>
    <script src="script/script.js"></script>
    <script src="script/checker.js"></script>
  </head>
  <body>
    <header class="noselect">
    <h2>DVORAK CHAT</h2>
    </header>
    <main>
      <div class="noselect" id="popup-button">
         <br>
         <br>
         <br>
         <h4>Web based, chatting site. Built using html, css, javascript, php.</h4>
         <h4>Have fun.....!</h4>
         <br>
         <br>
         <br>
         <button onclick="popupOpen()">Enter chat</button>
      </div>
      <div id="popup-form" style="display:none">
         <form name="passwordForm" class="form-box" action="index.php" method="post">
               <h3>Enter the chat room</h3>
               <br>
               <br>
               <br>
               <br>
               <label for="psw"><b>Password</b></label><br>
               <input type="password" id="password" placeholder="Enter password" name="password"><br>
               <input type="checkbox" onclick="passwordVisible()">Show Password
               <br>
               <br>
               <br>
               <div id="enter-close-button">
                  <button type="button" onclick="popupClose()">Close</button>
                  <button type="submit">Enter</button>
               </div>
         </form>
      </div>
      <?php
         if($_POST){
            $name = $_POST["name"];
            $password = $_POST["password"];
            if($password == "wearefriends"){
                 echo("<script>");
                 echo("window.location.replace(\"chatRoom/chat.php\")");
                 echo("</script>");
            }else{
                 echo("<script>");
                 echo("alert(\"Wrong password, leave me here;\");");
                 echo("window.location.href=\"index.php\";");
                 echo("</script>");
            }
          }
      ?>
    </main>
    <footer class="noselect">
       <p>product by <strong><b>ECCSEE</b></strong></p>
    </footer>
  </body>
</html>