<?php
session_start();
//if(isset)
//echo $_SESSION['Title'];

/* 
$fArticle = fopen("blog.txt", "r") or die("Unable to open file!");

$article = explode('||', fgets($fArticle));

$title = $article[0];
$img = $article[1];
$content = $article[2];

fclose($fArticle);

 */

/*  
$fArticle = fopen("blog.txt", "r") or die("Unable to open file!");

$article = explode('||', fgets($fArticle));
foreach ($article as $row) {
     # code...
     $title = $article[0];
     $img = $article[1];
     $content = $article[2];


}

fclose($fArticle);

 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Article</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
         h1{
              color: blue;
              text-align: center;
         }
         h3{
              color: red;
              text-decoration: underline;
         }
         .arty{
              border: 2px solid gray;
              margin: 20px;
              padding: 20px;
              width: 40%;
              display: inline-block;
         }
     </style>
</head>

<body>

    <div class="container">
        <h1>Arafa Blog</h1>
                 <?php

$fArticle = fopen("blog.txt", "r") or die("Unable to open file!");
while(!feof($fArticle)) {
     $article = explode('||',fgets($fArticle));
     //print_r($row[0]);
     echo "<div class='arty'>";
     echo "<form action='' method='post'>";
     $title = $article[0];
     echo '<h3>'.$title.'</h3>';
     $img = $article[1];
     echo '<img src='.'"'.$img.'"'.'>';
     $content = $article[2];
     echo '<p>'.$content.'</p>';
     echo "<button type='submit' class='btn btn-primary'>Delete</button></form></div>";

   }
fclose($fArticle);
/* $blog = explode('/n',(fread($fArticle,filesize(blog.txt))));
// while(!feof($fArticle)) {
//      $a = fgets($fArticle);
     foreach($blog as $line){
          echo $line;
     } */
     // $article = explode('||', $a);
     //             foreach ($article as $row) {
     //                  # code...
     //                  $title = $article[0];
     //                  echo '<h3>'.$title.'</h3>';
     //                  $img = $article[1];
     //                  echo '<img src='.'"'.$img.'"'.'>';
     //                  $content = $article[2];
     //                  echo '<p>'.$content.'</p>';
                 
                 
     //             }
                 
               //  fclose($fArticle);
   //}
      /*            //////////////////////////////
                 $fArticle = fopen("blog.txt", "r") or die("Unable to open file!");
               
                 $article = explode('||', fgets($fArticle));
                 foreach ($article as $row) {
                      # code...
                      $title = $article[0];
                      echo '<h3>'.$title.'</h3>';
                      $img = $article[1];
                      echo '<img src='.'"'.$img.'"'.'>';
                      $content = $article[2];
                      echo '<p>'.$content.'</p>';
                 
                 
                 }
                 
                 fclose($fArticle);
                 ////////////////////////
            if ($_SERVER['REQUEST_METHOD'] == "POST") {

            } */
/*           $textFile = file("blog.txt");
          foreach ($textFile as $key => $val) {
          $line = @$line . $val
               . "<input type='submit' name=$key value='Delete'><br />";
          }

          $form = "<form name='form' method='post' action='deleter.php'> $line 
          $article = explode('||', fgets($line));
                    $title = $article[0];
                      echo '<h3>'.$title.'</h3>';
                      $img = $article[1];
                      echo "<img src='".$img."'">';
                      $content = $article[2];
                      echo '<p>'.$content.'</p>';
          </form>";

          echo $form;

 */

            ?>
           
    </div>
