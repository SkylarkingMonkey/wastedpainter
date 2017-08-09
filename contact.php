
<?php
if($_POST["message"]) {
    mail("jeanmarcjmd@gmail.com", "Form to email message", $_POST["message"], "From: bryanmarshall@wastedpainter.com");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Wasted Painter</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wasted Painter - Fine Artwork and Blog Posts" />
    <meta name="keywords" content="wasted, painter, art, purchase," />
    <meta name="author" content="JMBD" />
    <link href="./resources/css/reset.css" type="text/css" rel="stylesheet">
    <link href="./resources/css/style.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

    <script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="./resources/javascript/mobile-header.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="">
        <a class="header-title"><img src="./resources/imagesWP/png/wastedpainter.png"></a>
      </div>
      <nav>
        <a class="navlink" href=#>Va Blog</a>
        <a class="navlink" href="./about.html">About</a>
        <a class="navlink" href="./contact.html">Contact</a>
      </nav>
    </header>
    <div class="mobile-menu-header">
     <div class="mobile-menu-container">
        <h1>Wasted<br>Painter</h1>
       <div class="container center " onclick="myFunction(this)" >
         <div class="bar1"></div>
         <div class="bar2"></div>
         <div class="bar3"></div>
       </div>
     </div>
       <ul id ="mobile-menu" class="menu-hidden">
         <li><a href="">Va Blog</a></li>
         <li><a href="./about.html">About</a></li>
         <li><a href="./contact.html">Contact</a></li>
         <li><a href="./subscribe.html">Subscribe</a></li>
       </ul>
    </div>
    <div class="main-container">
      <div class="gallery-title contact">
        <h1>Contact</h1>
        <?php echo date('m/d/Y h:i:s a', time()); ?>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "wastedpainter";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * from blog_entries ORDER BY name DESC";
        $result = $conn->query($sql);
        while($blog = $result->fetch_assoc()){
          echo $blog["name"] . "<br />";
        }3
        ?>
      </div>
    </div>
    <div class="ex-box">
      <form method="post" action="contact.php">
          <textarea name="message"></textarea>
          <input type="submit">
      </form>
    </div>
    <footer>
      <div class="title-and-nav">
       <span class="z-footer">
         <a href="./index.html">WASTED PAINTER</a>
       </span>
       <nav>
         <a class="navlink" href=#>Va Blog</a>
         <a class="navlink" href=#>Archived Posts</a>
         <a class="navlink" href="./index.html">About</a>
         <a class="navlink" href=#>Contact</a>
       </nav>
      </div>
      <div class="copywrite">
        <p>
          &copy 2017, Wasted Painter
        </p>
      </div>
    </footer>
  </body>
</html>
