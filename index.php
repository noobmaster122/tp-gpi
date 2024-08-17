<?php 
require_once "./inc/config.php";
require './vendor/autoload.php';
use GPI\Controller;
use GPI\Model;
use GPI\Service;
use GPI\SessionModel;

$appController = new Controller(new Service(new Model(), new SessionModel()));

// echo "<pre>" . print_r($_SESSION, true) . "</pre>";
//check ajax req handlers
if(isset($_GET['ajax']) && $_GET['ajax'] === 'addCard'){
   echo $appController->cardAdditionToBasket();
   exit;
}
if(isset($_GET['ajax']) && $_GET['ajax'] === 'removeCard'){
   echo $appController->cardRemovalFromBasket();
   exit;
}
if(isset($_GET['ajax']) && $_GET['ajax'] === 'updateQuantity'){
    echo $appController->productQuantityModificationInBasket();
    exit;
 }
 if(isset($_GET['ajax']) && $_GET['ajax'] === 'getBasketTotal'){
    echo $appController->getBasketTotal();
    exit;
 }
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
    <?php 
        if(isset($_GET['route']) && $_GET['route'] === 'home'){
            echo $appController->homeViewController();
        }else if(isset($_GET['route']) && $_GET['route'] === 'basket'){
            echo $appController->basketViewController();
        }else{
            echo $appController->homeViewController();
        }
    ?>
    <script src="./public/js/bundle.js"></script>
</body>

</html>