<?php 
session_start();
 ?>
<html>
    <head>
    </head>
    <body>
       <h1> Your are welcome</h1>
       <h1><?php echo $_SESSION['first_name']; ?></h1>
       <?php echo $_SESSION['id']; ?>
    </body>
</html>