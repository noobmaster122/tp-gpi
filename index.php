<?php 
require_once "./inc/config.php";
require './vendor/autoload.php';
use GPI\Controller;
use GPI\Model;
use GPI\Service;

$appController = new Controller(new Service(new Model()));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPI-2024</title>
    <link href="./public/css/styles.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <?php require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/commen/header.php"; ?>
    <?php 
        if(isset($_GET['route']) && $_GET['route'] === 'home'){
            echo $appController->homeViewController();
        }else if(isset($_GET['route']) && $_GET['route'] === 'basket'){
            echo $appController->basketViewController();
        }else{
            echo $appController->homeViewController();
        }
    ?>
    <!-- Footer -->
    <?php require GPI_PROJECT_ROOT_FOLDER_URI . "/views/commen/footer.php"; ?>
    <script src="./public/js/bundle.js"></script>
</body>

</html>