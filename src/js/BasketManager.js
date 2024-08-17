import $ from 'jquery';
import {AjaxService} from './AjaxService'; // Adjust the path as needed

export class BasketManager {
    constructor(ajaxService, basketLinkSelector, productAddBtnSelector, deleteBtnSelector) {
        this.productIds = [];
        this.cartLink = $(basketLinkSelector);

        this.ajaxService = ajaxService;

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

        this.ajaxService.performRequest('addCard', { newCard: productId }, (response) => {
            this.updateHomeCartUI(JSON.parse(response));
        });
    }

    handleProductDeletion(productId, row) {
        this.ajaxService.performRequest('removeCard', { cardToRemove: productId }, (response) => {
            this.updateHomeCartUI(JSON.parse(response));

            if (row.length) {
                row.remove();
            }

            this.updateBasketTotal(); 
        });
    }

    updateBasketTotal() {
        this.ajaxService.performRequest('getBasketTotal', {}, (response) => {
            const total = JSON.parse(response);
            this.updateTotalUI(total);
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

                this.handleProductDeletion(productId, row); 
            });
        });
    }

    updateTotalUI(total) {
        $('.basket-total').text(`$${total}`);
    }
}

const basketManager = new BasketManager(new AjaxService(`${window.location.protocol}//${window.location.host}/`), '#cart-link', '.add-to-cart', '.delete-product');
