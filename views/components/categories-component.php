<div class="mb-10 px-7">
    <h4 class="mb-4 pb-4 border-0 border-b-2 text-sm font-semibold">CATEGORIES</h4>
    <ul class="list-none pl-0 space-y-2 text-sm">
        <?php foreach ($categoriesArr as $categoryHandler => $subCategoriesArr): ?>
            <li>
                <span 
                    class="category-toggle font-semibold cursor-pointer" 
                    data-id="subcategories-<?= $categoryHandler; ?>"
                >
                    <?= $categoryHandler; ?>
                </span>
                <ul 
                    class="list-none pl-4 space-y-2 mt-2 hidden" 
                    id="subcategories-<?= $categoryHandler; ?>"
                >
                    <?php foreach ($subCategoriesArr as $subCategory): ?>
                        <li><a href='<?= "?subcat=$subCategory"; ?>' ><?= $subCategory; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
        <li><a href='<?= "?isDiscounted=true"; ?>' >Discounted</a></li>
        <li><a href='<?= "?isNew=new"; ?>' >New</a></li>
    </ul>
</div>
