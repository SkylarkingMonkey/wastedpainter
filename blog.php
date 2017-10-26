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
    <link rel="stylesheet" type="text/css" href=".//resources/css/style.css" />
    <link href=".//resources/css/style.css" type="text/css" rel="stylesheet">
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
        <a class="navlink" href="./blog.php">Va Blog</a>
        <a class="navlink" href="./about.html">About</a>
        <a class="navlink" href="./contact.php">Contact</a>
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
         <li><a href="/blog.php">Va Blog</a></li>
         <li><a href="./about.html">About</a></li>
         <li><a href="./contact.html">Contact</a></li>
         <li><a href="./subscribe.html">Subscribe</a></li>
       </ul>
    </div>
    <!--<div class="main-banner">
      <img src="">
      <h1>
      </h1>
    </div>-->
    <div class="main-container">
      <div class="gallery-title blog">
        <h1>Puck Sucker Portraits</h1>
      </div>
      <div class="blog-post">
        <?php
        ini_set('display_errors', 'On');
        $servername = "localhost";
        $username = "root";
        $password = "rootjmdroot";
        $dbname = "wastedpainter";

        $conn = new mysqli($servername, $username, $password, $dbname) or die("Connection not working");
        $sql = "SELECT COUNT(id) FROM blog_entries";
        $query = mysqli_query($conn, $sql);

        $row = mysqli_fetch_row($query);

        $rows = $row[0];
        $page_rows = 2;
        $last = ceil($rows/$page_rows);


        if($last <1){
          $last =1;
        }

        $pagenum = 1;

        if(isset($_GET['pn'])){
          $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
        }

        if ($pagenum < 1) {
          $pagenum = 1;
        }else if ($pagenum > $last) {
          $pagenum = $last;
        }

        $limit = 'LIMIT ' .($pagenum -1) * $page_rows .',' .$page_rows;
        $sql = "SELECT id, image, content FROM blog_entries ORDER BY id ASC $limit";
        $query = mysqli_query($conn, $sql);


        $paginationCtrls = '';

        if($last != 1){
          if ($pagenum > 1){
            $previous = $pagenum -1;
            $paginationCtrls .= '<a class="pagectrls" href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">More Recent</a> &nbsp; &nbsp; ';
          }
          if ($pagenum != $last) {
            $next = $pagenum + 1;
            $paginationCtrls .= ' &nbsp; &nbsp; <a class="pagectrls" href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Older</a> ';
          }
        }


        $list = '';

        if(isset($_GET['id'])){
          $permalink=$_GET['id'];
          $sql = "SELECT id, image, content FROM blog_entries WHERE id=$permalink";
          $query = mysqli_query($conn, $sql);
        }

        $imagetype='image/png';
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
          $image= $row["image"];
          $content= $row["content"];
          $id = $row["id"];
          $list .= '<p><img src="data:'.$imagetype.';base64'.base64_encode($image).'"/><p></p>'.$content.'</p><a class="permalinker" href="'.$_SERVER['PHP_SELF'].'?id='.$id.'">Share the Link to this Post</a>' ;
        }


        ?>
        <p><?php echo $list; ?></p>
        <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
      </div>
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
