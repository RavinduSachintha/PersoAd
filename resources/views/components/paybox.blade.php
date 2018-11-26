<form action="/charge" method="POST">
    {{ csrf_field() }}
    <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_PUB_KEY') }}"
            data-amount="1999"
            data-name="Stripe Demo"
            data-description="Online course about integrating Stripe"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-currency="usd"
            data-receipt_email="ravindusachintha53@gmail.com">
    </script>
</form>