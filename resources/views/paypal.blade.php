
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="display: flex;align-items: center;justify-content: center">
            <div class="card" >
                <h3 style="font-family: Calibri">Hello : {{\App\Models\Family::find($user->id)->name}} </h3>
                <h3 style="font-family: Calibri">This is {{\Carbon\Carbon::now()->format('M')}} billings amount</h3>
                <h3 style="font-family: Calibri">Total Amount : {{$amount}} {{\App\Models\Family::find($user->id)->currency->symbol}}</h3>
                <div class="card-body">
                    <div id="paypal-button-container"  style="width: 150%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
    $currency = \App\Models\Family::find($user->id)->currency->symbol;
@endphp
<script src="https://www.paypal.com/sdk/js?client-id=AeV8zW-LA2emGfuQG2uYCu3SIZ2AFycihcvp8hc5qLS4xJbhpLf5SLaLwNMNETaMpfq6aNlkpITvZEgy&components=buttons&currency={{$currency}}"></script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // Set up the transaction
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '{{ $amount }}',
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
        },
        onCancel: function() {
            // Redirect the user to the cancelPayment method in your Laravel controller
            window.location.href = '/cancel';
        }
    }).render('#paypal-button-container');
</script>
</body>
</html>

