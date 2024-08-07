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

    <!-- Main Content -->
    <main class="container mx-auto py-8 px-6">
        <div class="flex">
            <!-- Sidebar -->
            <aside class="w-1/4 bg-white p-4 shadow-sm">
                <h2 class="text-xl font-semibold mb-4">Shop By</h2>
                <div>
                    <h3 class="font-semibold mb-2">CATEGORIES</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="text-gray-700">Vivamus mauris (50)</a></li>
                        <li><a href="#" class="text-gray-700">Rhoncus vitae semper (50)</a></li>
                        <li><a href="#" class="text-gray-700">Viamus (50)</a></li>
                        <!-- Add more categories as needed -->
                    </ul>
                </div>
                <div class="mt-6">
                    <h3 class="font-semibold mb-2">PRICE</h3>
                    <input type="range" min="0" max="10000" class="w-full">
                </div>
                <div class="mt-6">
                    <h3 class="font-semibold mb-2">COLOR</h3>
                    <div class="flex space-x-1">
                        <div class="w-6 h-6 bg-red-500"></div>
                        <div class="w-6 h-6 bg-green-500"></div>
                        <div class="w-6 h-6 bg-blue-500"></div>
                        <!-- Add more colors as needed -->
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="font-semibold mb-2">BRAND</h3>
                    <ul class="space-y-1">
                        <li><a href="#" class="text-gray-700">Karma (50)</a></li>
                        <li><a href="#" class="text-gray-700">Idelos (50)</a></li>
                    </ul>
                </div>
            </aside>

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