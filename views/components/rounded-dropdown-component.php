<div class="flex justify-center items-center ">
    <div class="relative inline-block w-40">
        <select class="block appearance-none rounded-full w-full bg-white border border-gray-300 hover:border-gray-400 px-5 py-1 pr-8   leading-tight focus:outline-none focus:shadow-outline">
            <?php foreach ($options as $option) : ?>
                <option><?= $option; ?></option>
            <?php endforeach; ?>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 14l-6-6h12l-6 6z"></path>
            </svg>
        </div>
    </div>
</div>

