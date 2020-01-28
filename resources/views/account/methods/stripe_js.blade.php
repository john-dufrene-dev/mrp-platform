<script>

    const stripe = Stripe('{{ env('STRIPE_KEY') }}');
    const elements = stripe.elements();

    let style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    const cardElement = elements.create('card', {style: style});
    cardElement.mount('#card-element');

    const cardHolderName = document.getElementById('card-holder-name');
    const cardHolderEmail = document.getElementById('card-holder-email');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

    const form = document.getElementById('form-method-payment');
    const error_form = document.getElementById('error-method-payment');

    form.addEventListener("click", function(event){
        event.preventDefault()
    });

    cardButton.addEventListener('click', async (e) => {

        const { setupIntent, error } = await stripe.handleCardSetup(
            clientSecret, cardElement, {
                payment_method_data: {
                    billing_details: { 
                        name: cardHolderName.value,
                        email: cardHolderEmail.value
                    }
                }
            }
        );

        if (error) {
            error_form.innerHTML = "<p class='alert alert-danger'>"+error.message+"</p>";
        } else {
            stripeTokenHandler(setupIntent.payment_method);
        }
    });

    function stripeTokenHandler(paymentMethod) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('form-method-payment');
        var hiddenInput = document.createElement('input');

        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'paymentMethod');
        hiddenInput.setAttribute('value', paymentMethod);
        form.appendChild(hiddenInput);

        form.submit(); // Submit the form
    }

</script>