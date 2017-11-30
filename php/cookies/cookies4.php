<?php
   setcookie( "name", "", time()- 1, "/","", 0);
   setcookie( "age", "", time()- 1, "/","", 0);
?>
<html>
   
   <head>
      <title>Deleting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Deleted Cookies" ?>
   </body>
   
</html>