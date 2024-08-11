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
    <?php require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/header.php"; ?>
    <?php require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/breadcrumbs-component.php"; ?>
    <!-- Main Content -->
    <main class="container mx-auto py-8 px-16 pl-20">
        <div class="flex">
            <!-- Sidebar -->
            <?php
                (function () {
                    require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/sidebar-component.php";
                })();
            ?>
            <!-- Products -->
            <section class="w-[880px] ml-6">
                <?php require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/banner-component.php"; ?>
                <div class="grid grid-cols-3 gap-6 mt-14">
                    <?php
                    (function (array $data) {
                        require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/card-component.php";
                    })(['title' => 'Voluptatem Accusantium Doloremque']);
                    (function (array $data) {
                        require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/card-component.php";
                    })(['title' => 'Voluptatem Accusantium Doloremque', 'isDiscounted' => true]);
                    (function (array $data) {
                        require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/card-component.php";
                    })(['title' => 'Voluptatem Accusantium Doloremque', 'isNew' => true]);
                    ?>
                    <!-- Add more products as needed -->
                </div>
                <?php
                (function () {
                    require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/pagination-component.php";
                })();
                ?>
            </section>
        </div>
    </main>
    <?php
    (function () {
        require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/publicite-banner-component.php";
    })();
    ?>
    <!-- Footer -->
    <?php
    (function () {
        require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/footer.php";
    })();
    ?>
    <script src="./js/bundle.js"></script>
</body>

</html>