import $ from 'jquery';

export class AjaxService {
    constructor(apiUrl) {
        this.apiUrl = apiUrl;
    }

    performRequest(action, params, onSuccess) {
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
}

