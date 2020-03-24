@extends('layouts.app')

<script src="https://js.stripe.com/v3/"></script>

@section('main-content')
    <form action="{{ route('subscribed') }}" method="post">
        @csrf 
        <div class="card-group">
            <div class="card m-5">
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Free <small class="text-muted">/ mo</small></h1>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
            <div class="card m-5">
            <div class="card-body">
                <h1 class="card-title pricing-card-title">£15 <small class="text-muted">/ mo</small></h1>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
            </div>
            <div class="card m-5">
            <div class="card-body">
                <h1 class="card-title pricing-card-title">£79 <small class="text-muted">/ mo</small></h1>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            </div>
            </div>
        </div>

        <input id="card-holder-name" type="text">

        <br><br>

        <!-- Stripe Elements Placeholder -->
        <div id="card-element"></div>

        <br>

        <button id="card-button" data-secret="{{ $intent->client_secret }}">
            Update Payment Method
        </button>

        <br><br>

    <button type="submit" id="subscribe-btn">Subscribe and Register</button>
  </form>

  <script>
      window.addEventListener('load', function() 
      {
        const stripe = Stripe("{{ config('services.stripe.public') }}");

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        cardButton.addEventListener('click', async (e) => {
            const { setupIntent, error } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            );

            if (error) {
                console.log('error', error.message);
            } else {
                console.log('success', setupIntent.payment_method); 
            }
        });
        });
  </script>

   {{-- <script>
//     (function() {
//     // creates a Stripe client
//     var stripe = Stripe("{{ config('services.stripe.public') }}");

//     // creates an instance of Elements
//     var elements = stripe.elements();

//     var style = {
//     base: {
//         color: '#32325d',
//         fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
//         fontSmoothing: 'antialiased',
//         fontSize: '16px',
//         '::placeholder': {
//         color: '#aab7c4'
//         }
//     },
//     invalid: {
//         color: 'red',
//         iconColor: 'red'
//     }
//     };

//     // creates an instance of the card Element
//     var card = elements.create('card', { style: style, hidePostalCode: true });

//     // Add an instance of the card Element into the `card-element` <div>.
//     card.mount('#card-element');

//     // handles real-time validation errors from the card Element
//     card.addEventListener('change', function(event) {
//     var displayError = document.getElementById('card-errors');
//     if (event.error) {
//         displayError.textContent = event.error.message;
//     }
//     });

//     // handles form submission.
//     var form = document.getElementById('subscribe-form');
//     form.addEventListener('submit', function(event) {
//     event.preventDefault();

//     // disables the submit button to prevent repeated clicks
//     document.getElementById('subscribe-btn').disabled = true; 

//     stripe.createToken(card).then(function(result) {
//         if (result.error) {
//         // informs the user if there was an error
//         // enables the submit button if validation fails
//         document.getElementById('subscribe-btn').disabled = false;
//         var errorElement = document.getElementById('card-errors');
//         errorElement.textContent = result.error.message;
//         } else {
//         // sends the token to the server
//         stripeTokenHandler(result.token);
//         }
//     });
//     });

//     // submits the form with the token ID
//     function stripeTokenHandler(token) {
//     // inserts the token ID into the form so it gets submitted to the server
//     var form = document.getElementById('subscribe-form');
//     var hiddenInput = document.createElement('input');
//     hiddenInput.setAttribute('type', 'hidden');
//     hiddenInput.setAttribute('name', 'stripeToken');
//     hiddenInput.setAttribute('value', token.id);
//     form.appendChild(hiddenInput);

//     // submits the form
//     form.submit();
//     }
//     })();
// </script> --}}
@endsection