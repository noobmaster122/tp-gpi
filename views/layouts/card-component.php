<div class="inline-block w-[251px]  overflow-hidden relative">
    <div class="">
        <div class="flex relative items-center justify-center mb-2">
            <?php if ($data['isDiscounted'] ?? null) : ?>
                <div class=" discount-circular-banner  absolute bg-red-500 text-white rounded-full px-3 py-1 text-base font-thin">-20%</div>
            <?php endif; ?>
            <?php if ($data['isNew'] ?? null) : ?>
                <div class=" discount-circular-banner absolute bg-green-500 text-white rounded-full px-3 py-1 text-base font-thin">NEW</div>
            <?php endif; ?>
            <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/img-08.png'; ?>" alt="product image">
        </div>
        <div class="mt-4">
            <span class=" text-sm font-semibold text-blue-600 whitespace-nowrap text-ellipsis"><?= $data['title'] ?? 'Voluptatem Accusantium Doloremque'; ?></span>
        </div>
        <div class="mt- flex items-baseline space-x-2">
            <span class="text-gray-400 line-through text-base">$29.00</span>
            <span class="text-red-500 text-xl font-bold">$18.00</span>
        </div>
        <div class="star-rating text-sm">
            <span class="star text-blue-600" >&#9733;</span>
            <span class="star text-blue-600" >&#9733;</span>
            <span class="star text-blue-600" >&#9733;</span>
            <span class="half">&#9733;</span>
            <span class="star text-gray-400" >&#9733;</span>
        </div>
        <div class="mt-4 flex justify-between">
            <div>
                <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/img-11.png'; ?>" alt="icon 1">
            </div>
            <div class="flex gap-1">
                <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/img-12.png'; ?>" alt="icon 2">
                <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/img-13.png'; ?>" alt="icon 3">
            </div>
        </div>
    </div>
</div>