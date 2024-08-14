<?php (function (string $title) {
    require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/components/breadcrumbs-component.php";
})("Shopping Cart"); ?>
<main class="container px-16 py-3  mx-auto">
    <!-- Success Message -->
    <div class="bg-[#d7efc1] border text-green-800 px-4 py-3 rounded mb-4 flex ">
        <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/check-icon.png'; ?>" width="35px" height="20px" alt="Item Image" class="">
        <p>Consectetur Adipisicing 331 AA has been successfully added to your shopping cart.</p>
    </div>

    <!-- Shopping Cart Table -->
    <div class="overflow-x-auto mb-6">
        <table class="min-w-full border border-gray-200">
            <thead>
                <tr class="bg-gray-100 border-b">
                    <th class="text-left px-6 py-3 text-gray-600">Item Name</th>
                    <th class="text-left px-6 py-3 text-gray-600">Price</th>
                    <th class="text-left px-6 py-3 text-gray-600">Quantity</th>
                    <th class="text-left px-6 py-3 text-gray-600">Subtotal</th>
                    <th class="px-6 py-3 text-gray-600"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b divide-x">
                    <td class="px-6 py-4 flex items-center">
                        <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/cart.png'; ?>" width="70px" height="90px" alt="Item Image" class=" mr-4">
                        <span class="text-blue-600">Nam Tempus Dictumirsib</span>
                    </td>
                    <td class="px-6 py-4">$100.00</td>
                    <td class="px-6 py-4">
                        <input type="text" value="1" class="border-2 w-12 py-1 text-center rounded-md">
                    </td>
                    <td class="px-6 py-4">$100.00</td>
                    <td class="px-6 py-4 text-center ">
                        <div class="w-full h-full flex items-center justify-center">
                            <button class=" text-black flex items-center justify-center w-6 h-6 border border-gray-400 rounded-full text-xl">&times;</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Shipping, Coupon, and Order Total -->
    <div class="grid grid-cols-3 gap-6">
        <!-- Estimate Shipping & Tax -->
        <div class=" p-4">
            <h3 class="text-lg font-semibold mb-4">Estimate Shipping & Tax</h3>
            <form>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Country <span class="text-red-500">*</span></label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">State / Province <span class="text-red-500">*</span></label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Zip / Postal Code <span class="text-red-500">*</span></label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm">
                </div>
                <button class="border-2 border-sm hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-md">Get a Quote</button>
            </form>
        </div>

        <!-- Discount Coupon -->
        <div class=" p-4">
            <h3 class="text-lg font-semibold mb-4">Discount Coupon</h3>
            <form>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Enter coupon code below if you have one.</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-sm shadow-sm">
                </div>
                <div class="text-sm text-gray-500 mb-4">
                    <a href="#" class="text-blue-400">Get a coupon discount here</a>
                </div>
                <button class=" hover:bg-gray-300 border-2 border-sm text-gray-700 px-4 py-2 rounded-md">Apply Coupon</button>
            </form>
        </div>

        <!-- Order Total -->
        <div class=" p-4">
            <h3 class="text-lg font-semibold mb-4">Order Total</h3>
            <div class="mb-2 flex justify-between">
                <span class="text-gray-700">Subtotal</span>
                <span class="text-gray-700">$500.00</span>
            </div>
            <div class="mb-4 flex justify-between text-xl font-semibold">
                <span class="text-gray-900">Grand Total</span>
                <span class="text-gray-900">$500.00</span>
            </div>
            <button class="bg-blue-500 hover:bg-blue-600 text-white w-full py-2 rounded-md">Proceed to Checkout</button>
        </div>
    </div>
</main>
<?php
(function () {
    require GPI_PROJECT_ROOT_FOLDER_URI . "/views/components/publicite-banner-component.php";
})();
?>