
<?php require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/commen/header.php"; ?>

<?php (function (string $title) {
    require_once GPI_PROJECT_ROOT_FOLDER_URI . "/views/components/breadcrumbs-component.php";
})("Design"); ?>    <!-- Main Content -->
    <main class="container mx-auto py-8 pb-16 pt-3  pl-20">
        <div class="flex">
            <!-- Sidebar -->
            <?php
                (function (array $categoriesArr) {
                    require GPI_PROJECT_ROOT_FOLDER_URI . "/views/components/sidebar-component.php";
                })($categoriesArr);
            ?>
            <!-- Products -->
            <section class="w-[880px] ml-6">
                <?php require GPI_PROJECT_ROOT_FOLDER_URI . "/views/components/banner-component.php"; ?>
                <div class="grid grid-cols-3 gap-6 mt-14">
                    <?php
                    foreach($productsArr as $data){
                        require GPI_PROJECT_ROOT_FOLDER_URI . "/views/components/card-component.php";
                    }
                    ?>
                    <!-- Add more products as needed -->
                </div>
                <?php
                (function () {
                    require GPI_PROJECT_ROOT_FOLDER_URI . "/views/components/pagination-component.php";
                })();
                ?>
            </section>
        </div>
    </main>
    <?php
    (function () {
        require GPI_PROJECT_ROOT_FOLDER_URI . "/views/components/publicite-banner-component.php";
    })();
    ?>

<?php require GPI_PROJECT_ROOT_FOLDER_URI . "/views/commen/footer.php"; ?>
