<?php
function getBaseUrl()
{
    // Check if the request is secure (HTTPS) or not
    $isSecure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';

    // Get the HTTP or HTTPS protocol
    $protocol = $isSecure ? 'https://' : 'http://';
    //$protocol = 'https://';
    // Get the server name (host)
    $host = $_SERVER['HTTP_HOST'];

    // Get the base path (if your project is not in the root directory)
    $basePath = dirname($_SERVER['PHP_SELF']);

    // Explode the base path and keep only the first segment
    $basePathSegments = explode('/', trim($basePath, '/'));
    $firstFolder = isset($basePathSegments[0]) ? $basePathSegments[0] : '';

    $firstFolder = empty($firstFolder) ? '' : '/' . $firstFolder;
    // Concatenate and return the base URL
    return $protocol . $host . $firstFolder;
}

define("GPI_PROJECT_ROOT_FOLDER", getBaseUrl());
define("GPI_PROJECT_ROOT_FOLDER_URI", realpath(__DIR__ . '/..'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPI-2024</title>
    <link href="./css/styles.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <?php require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/commen/header.php"; ?>
    <?php 
    (function(array $requestParams){

        if(isset($requestParams['route']) && $requestParams['route'] === 'home'){
            require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/pages/home.php";
        }else if(isset($requestParams['route']) && $requestParams['route'] === 'basket'){
            require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/pages/basket.php";
        }else{
            require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/pages/home.php";
        }

    })($_GET);
    ?>
    <!-- Footer -->
    <?php require GPI_PROJECT_ROOT_FOLDER_URI . "/views/commen/footer.php"; ?>
    <script src="./js/bundle.js"></script>
</body>

</html>