import $ from 'jquery';
import {AjaxService} from './AjaxService'; 

class QuantityUpdater {
    constructor(ajaxService, quantityInputSelector) {
        this.ajaxService = ajaxService;
        
        $(() => {
            this.setupQuantityInputs(quantityInputSelector);
        });
    }

    setupQuantityInputs(selector) {
        $(selector).on('change', (event) => this.quantityInputChange(event));
    }

    quantityInputChange(event) {
        const input = $(event.currentTarget);
        const quantity = input.val();
        const productId = input.data('id'); 

        if (quantity < 1 || isNaN(quantity)) {
            console.error('Invalid quantity value');
            return;
        }

        this.ajaxService.performRequest('updateQuantity', { productId: productId, quantity: quantity }, (response) => {
            this.handleSuccessResponse(response);
        });
    }

    handleSuccessResponse(response) {
        const data = JSON.parse(response);
        location.reload();//hacky solution, should update the elements one by one instead        
    }
}

const quantityUpdater = new QuantityUpdater( new AjaxService(`${window.location.protocol}//${window.location.host}/`), 'input[name="productQt"]');
