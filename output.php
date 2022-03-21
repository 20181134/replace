<html>
<head>
  <meta charset="utf-8">
  <title>Replace</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <?php
  $str = file_get_contents('replace.txt');
  $str = str_replace('username', $_REQUEST['user'], $str);
  echo $str;
   ?>
 </body>
 </html>
