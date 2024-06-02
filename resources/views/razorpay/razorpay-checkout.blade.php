<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Donation</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <script>
        var options = {!! json_encode($data) !!};

        options.handler = function (response) {
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = "{{ route('donate.success') }}";

            var token = document.createElement('input');
            token.type = 'hidden';
            token.name = '_token';
            token.value = '{{ csrf_token() }}';
            form.appendChild(token);

            var paymentId = document.createElement('input');
            paymentId.type = 'hidden';
            paymentId.name = 'razorpay_payment_id';
            paymentId.value = response.razorpay_payment_id;
            form.appendChild(paymentId);

            document.body.appendChild(form);
            form.submit();
        };

        options.theme = {
            "color": "#3399cc"
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
    </script>
</body>
</html>
