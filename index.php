<?php 
include_once('utilities.php');
include_once('db/database_utilities.php');
$result = run_query();
$user = $result->fetch_assoc()

?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>

    <body>

    <?php require_once('header.php')?>
    <?php require_once('body.php')?>
    <?php require_once('footer.php')?>

   
    
    </body>
</html>