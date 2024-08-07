<div class="bg-gray-200 h-52 flex items-center justify-center mb-4">
    <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/img-03.png'; ?>" alt="website logo">
</div>
<div class="flex items-center justify-between mb-4 mx-4">
    <span>150 item(s)</span>
    <div class="flex items-center space-x-2">
        <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/img-04.png'; ?>" alt="website logo">
        <?php
        (function($options){
            require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/rounded-dropdown-component.php";
        })(['15 per page', '20 per page']);

        (function($options){
            require GPI_PROJECT_ROOT_FOLDER_URI . "/views/layouts/rounded-dropdown-component.php";
        })(['Position', 'Option 1', 'Option 2', 'Option 3']);
        ?>
        <img src="<?= GPI_PROJECT_ROOT_FOLDER . '/public/assets/img-07.png'; ?>" alt="arrow up">
    </div>
</div>
<hr>