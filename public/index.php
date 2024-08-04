<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPI-2024</title>
    <link href="./css/styles.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <?php require_once "../views/layouts/header.php"; ?>
    
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
            <section class="w-3/4 ml-6">
                <div class="bg-gray-200 h-52 flex items-center justify-center mb-6">Banner 880 x 208px</div>
                <div class="flex items-center justify-between mb-4">
                    <span>150 item(s)</span>
                    <div class="flex items-center space-x-2">
                        <button class="p-2 bg-gray-300 rounded">Grid</button>
                        <button class="p-2 bg-gray-300 rounded">List</button>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6">
                    <div class="bg-white shadow-sm p-4 text-center">
                        <div class="bg-gray-300 h-40 mb-4">160 x 206</div>
                        <h3 class="text-lg font-semibold">Voluptatem Accusantium Doloremque</h3>
                        <p class="text-gray-600">$20.00</p>
                        <button class="mt-2 py-2 px-4 bg-blue-600 text-white rounded">Add to Cart</button>
                    </div>
                    <div class="bg-white shadow-sm p-4 text-center">
                        <div class="bg-gray-300 h-40 mb-4 relative">
                            <span class="absolute top-0 right-0 bg-red-600 text-white px-2 py-1 text-sm">-20%</span>
                        </div>
                        <h3 class="text-lg font-semibold">Voluptatem Accusantium Doloremque</h3>
                        <p class="text-gray-600 line-through">$20.00</p>
                        <p class="text-red-600">$18.00</p>
                        <button class="mt-2 py-2 px-4 bg-blue-600 text-white rounded">Add to Cart</button>
                    </div>
                    <div class="bg-white shadow-sm p-4 text-center">
                        <div class="bg-gray-300 h-40 mb-4 relative">
                            <span class="absolute top-0 right-0 bg-green-600 text-white px-2 py-1 text-sm">NEW</span>
                        </div>
                        <h3 class="text-lg font-semibold">Voluptatem Accusantium Doloremque</h3>
                        <p class="text-gray-600">$20.00</p>
                        <button class="mt-2 py-2 px-4 bg-blue-600 text-white rounded">Add to Cart</button>
                    </div>
                    <!-- Add more products as needed -->
                </div>
                <div class="flex items-center justify-center mt-6 space-x-2">
                    <button class="px-4 py-2 bg-gray-300 rounded">1</button>
                    <button class="px-4 py-2 bg-gray-300 rounded">2</button>
                    <button class="px-4 py-2 bg-gray-300 rounded">3</button>
                    <span>Next Page</span>
                </div>
            </section>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-white py-8 mt-6 shadow-inner">
        <div class="container mx-auto grid grid-cols-4 gap-8">
            <div>
                <h3 class="font-semibold mb-2">SOFTMARKET</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-gray-600">Contact Us</a></li>
                    <li><a href="#" class="text-gray-600">Careers</a></li>
                    <li><a href="#" class="text-gray-600">Shipping & Return</a></li>
                    <li><a href="#" class="text-gray-600">Terms of Use</a></li>
                    <li><a href="#" class="text-gray-600">Privacy Policy</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">GLOBAL RESELLERS</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-gray-600">United States</a></li>
                    <li><a href="#" class="text-gray-600">England</a></li>
                    <li><a href="#" class="text-gray-600">China</a></li>
                    <li><a href="#" class="text-gray-600">Australia</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">POPULAR CATEGORIES</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-gray-600">Unic omins</a></li>
                    <li><a href="#" class="text-gray-600">Ilea nas</a></li>
                    <li><a href="#" class="text-gray-600">Sit voluptatem</a></li>
                    <li><a href="#" class="text-gray-600">Accusantium</a></li>
                    <li><a href="#" class="text-gray-600">Neque porro quisquam</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">FROM OUR BLOG</h3>
                <ul class="space-y-1">
                    <li><a href="#" class="text-gray-600">Neque porro quisquam est</a></li>
                    <li><a href="#" class="text-gray-600">Quis autem vel eum iure</a></li>
                    <li><a href="#" class="text-gray-600">At vero eos et accusamus</a></li>
                    <li><a href="#" class="text-gray-600">Temporibus autem aut</a></li>
                </ul>
            </div>
        </div>
        <div class="container mx-auto flex items-center justify-between mt-8">
            <div class="flex space-x-4">
                <a href="#" class="text-gray-600">Facebook</a>
                <a href="#" class="text-gray-600">Twitter</a>
                <a href="#" class="text-gray-600">Youtube</a>
                <a href="#" class="text-gray-600">RSS Feed</a>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-600">PayPal</a>
                <a href="#" class="text-gray-600">VISA</a>
                <a href="#" class="text-gray-600">MasterCard</a>
            </div>
        </div>
        <div class="text-center text-gray-600 mt-4">&copy; 2013 SoftMarket Magento Store by emthemes.com</div>
    </footer>
    <script src="./js/bundle.js"></script>
</body>

</html>