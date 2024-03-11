$(document).ready(function() {
    $('.update-quantity-form').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        var form = $(this);
        var productId = form.data('product-id');
        var quantity = form.find('input[name="quantity"]').val();

        $.ajax({
            url: '/cart/' + productId,
            type: 'PUT',
            data: { quantity: quantity },
            success: function(response) {
                // Update the UI or perform any necessary actions
                console.log(response);
            },
            error: function(xhr) {
                // Handle the error gracefully
                console.log(xhr.responseText);
            }
        });
    });
});
