<?php  include 'php/functions.php'; $conn = connectDatabase(); if($_GET['page'] == null) {header('Location: ?page=home');}  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <script src="js/javascript.js"></script>
    <title>B3W7O1</title>
</head>
<body>
    
    <?php include 'content/header.php'; ?>
    
    <?php include 'content/'.$_GET['page'].'.php'; ?>
</body>
</html>