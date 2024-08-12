
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