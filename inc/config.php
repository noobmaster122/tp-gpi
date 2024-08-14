<?php

declare(strict_types=1);

namespace GPI;

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
