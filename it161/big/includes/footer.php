<footer>
      <p><small>&copy; 2022 by 
          <a href="contact.php">Eddie Melton</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
</footer>
<?php 
    if (THIS_PAGE == 'index.php' OR THIS_PAGE == 'shows.php') { //if this page is the home page, echo the relevant js
      echo('
      <script src="./scripts/carousel.js"></script>
      ');
    }
  ?>
</body>
</html>