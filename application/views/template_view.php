<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>first.sg - первый проэкт</title>
    <meta  charset="utf-8"> 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    
        <?php 
            include 'application/views/'.$content_view;         
        ?>
  </div>  
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 