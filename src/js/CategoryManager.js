import $ from 'jquery';

class CategoryManager {
    constructor(toggleButtonSelector) {
        this.toggleButtonSelector = toggleButtonSelector;

        $(() => {
            this.setupToggleButtons();
        });
    }

    toggleSubCategories(id) {
        const $subCategoriesList = $(`#${id}`);
        if ($subCategoriesList.length) {
            $subCategoriesList.toggleClass('hidden');
        }
    }

    setupToggleButtons() {
        $(this.toggleButtonSelector).on('click', (event) => {
            const $button = $(event.currentTarget);
            const id = $button.data('id');
            this.toggleSubCategories(id);
        });
    }
}

const categoryManager = new CategoryManager('.category-toggle');

