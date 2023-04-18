
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pay with PayPal or Debit/Credit Card</div>

                <div class="card-body">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // Set up the transaction
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '{{ $amount }}'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // Capture the funds from the transaction
            return actions.order.capture().then(function(details) {
                // Redirect to success page or display success message
                window.location.href = '/success?user_id={{ $user->id }}&amount={{ $amount }}&transaction_id=' + details.id;
            });
        }
    }).render('#paypal-button-container');
</script>
</body>
</html>
