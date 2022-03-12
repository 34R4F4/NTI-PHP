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

 
$fArticle = fopen("blog.txt", "r") or die("Unable to open file!");

$article = explode('||', fgets($fArticle));
foreach ($article as $row) {
     # code...
     $title = $article[0];
     $img = $article[1];
     $content = $article[2];
     

}

fclose($fArticle);



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
         .Ralert{
              color: red;
         }
         .Gsuss{
              color: green;
         }
     </style>
</head>

<body>

    <div class="container">
        <h1>Arafa Blog</h1>

            <div class="form-group">
                 <h3><?php echo $title; ?></h3>
                 <img src=<?php echo $img; ?>>
                 <p><?php echo $content; ?></p>
            </div>

    </div>