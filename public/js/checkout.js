//Stripe.setPublishableKey('pk_test_33Jxqwto6NFViCt8GTvRIl2V00IFnWzEYb');
var stripe = Stripe('pk_test_33Jxqwto6NFViCt8GTvRIl2V00IFnWzEYb');

let form = $('#checkout-form');

form.submit(function(event) {
    $('#charge-error').addClass('hidden');
    form.find('button').prop('disabled', true);
    stripe.card.CreateToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('card-name').val()

    }, stripeResponseHandler);

    return false;
});


function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        form.find('button').prop('disabled', false);

    } else {
        var token = response.id;
        form.append($('<input type="hidden" name="stripeToken"/>')).val(token);

        form.submit();
    }
}