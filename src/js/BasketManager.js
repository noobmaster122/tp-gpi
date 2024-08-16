import $ from 'jquery';

class BasketManager {
    constructor(basketLinkSelector, productAddBtnSelector, deleteBtnSelector) {
        this.productIds = [];
        this.cartLink = $(basketLinkSelector); 

        // Set the base URL dynamically 
        this.apiUrl = `${window.location.protocol}//${window.location.host}/`;

        $(() => {
            $(productAddBtnSelector).on('click', (event) => this.productAdditionClick(event));
            this.setupDeleteButtons(deleteBtnSelector);
        });
    }

    productAdditionClick(event) {
        const button = $(event.currentTarget);
        const productId = button.data('id'); 

        if (!this.productIds.includes(productId)) {
            this.productIds.push(productId);
        }

        this.performAjaxRequest('addCard', { newCard: productId }, (response) => {
            this.updateHomeCartUI(JSON.parse(response));
        });
    }

    handleProductDeletion(productId, row) {
        this.performAjaxRequest('removeCard', { cardToRemove: productId }, (response) => {

            this.updateHomeCartUI(JSON.parse(response));
            console.log("res", response);

            if (row.length) {
                row.remove();
            }
        });
    }

    performAjaxRequest(action, params, onSuccess) {
        const queryString = $.param(params);

        $.ajax({
            url: `${this.apiUrl}?ajax=${action}&${queryString}`,
            method: 'GET',
            success: onSuccess,
            error: (xhr, status, error) => {
                console.error('AJAX request failed:', status, error);
            }
        });
    }

    updateHomeCartUI(data) {
        const href = '?route=basket&basket=' + data.join(',');
        this.cartLink.attr('href', href);

        this.cartLink.text(`My Cart (${data.length})`);
    }

    setupDeleteButtons(selector) {
        const buttons = $(selector);

        buttons.each((index, element) => {
            $(element).on('click', (event) => {
                const button = $(event.currentTarget);
                const productId = button.data('id'); 
                const row = button.closest('tr'); 

                console.log(productId, row);

                this.handleProductDeletion(productId, row); 
            });
        });
    }
}

const basketManager = new BasketManager('#cart-link', '.add-to-cart', '.delete-product');
