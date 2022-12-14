<?php 
  // Request the server to tell us which page we are on,
  // and save it in a variable called THIS_PAGE
  define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
  // Key-value pairs for the navigation
  $nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'performers.php' => 'Meet our Performers',
    'shows.php' => 'Shows',
    'contact.php' => 'Contact'
  );
  //Defines a function, make-links, that creates
  //The links for the homepage
  function make_links($nav) {
    $my_return = ''; // initialize your return variable
    foreach ($nav as $key => $value) { //for each key-value pair in your nav array
      if (THIS_PAGE == $key) { //if this page is the key
        $my_return .='<li class="active"><a href="'.$key.'">'.$value.'</a></li>'; //Append an "active" link w/ hover style
      }
      else {
        $my_return .='<li><a href="'.$key.'">'.$value.'</a></li>'; //Otherwise, append an "inactive" link w/o hover style
      }
    }
    return $my_return; //return the whole set of links
  }
?>

<!DOCTYPE html>
<html lang="en">

 <head>
  <title>House of Cox</title>
  <meta name="viewport" content="width=device-width" />
  <meta charset ="utf-8" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <?php 
    if (THIS_PAGE == 'index.php' OR THIS_PAGE == 'shows.php') { //if this page is the home page or about page, echo the relevant css
      echo(' 
      <link rel="stylesheet" href="./css/carousel.css" />
      ');
    }
  ?>
  <!-- Responsive navigation JS + HTML and CSS checker (delete when live!) -->
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>

 </head>
 <body>
     <header>
     <nav class="topnav" id="myTopnav">
      <ul>
        <?php echo make_links($nav); ?>
      </ul>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>