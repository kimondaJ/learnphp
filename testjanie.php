<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>

    <h1>this is my first php page</h1>

  <?php
    $color = "purple";
       echo '<p>Hello World</p>';
       echo " My Name is Janet Kimonda but most people call me Janie <br>"; 
       echo 'my favorite color is '  . $color . "<br>";
       //this is asingle-line comment
       # this s also a single-lined comment
       /*this is a multiple-lines comment block that spans over multiplelines*/
       $x = 5 /* + 15 */ + 5;
       echo $x;
  ?>
 </body>
</html>