<x-app-layout>
    <div class="p-24">
        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <title>Paystack Payment </title>

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            </head>
            <body >
                <form id="paymentForm">
                    <input value="abagale1994@gmail.com" type="email" id="email-address" hidden />
                    <div class="form-group">
                    <label for="amount">Amount</label>
                    <input value="{{$content->price ?? 0.00}}" type="text" id="amount" disabled />
                    </div>
                    
                    <div class="form-submit">
                    <button type="submit" onclick="payWithPaystack(event)"> Pay </button>
                    </div>
                </form>
                <script src="https://js.paystack.co/v1/inline.js"></script> 
                <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script>
                    let paymentForm = document.getElementById('paymentForm');
                    paymentForm.addEventListener("submit", payWithPaystack, false);
                    function payWithPaystack(e) {
                    e.preventDefault();
                    let handler = PaystackPop.setup({
                        key: 'pk_test_cef059417db5c00edff1ee70216ed36dd4ffb4e0', // Replace with your public key
                        email: document.getElementById("email-address").value,
                        amount: document.getElementById("amount").value * 100,
                        currency: 'GHS',
                        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                        // label: "Optional string that replaces customer email"
                        onClose: function(){
                        alert('Window closed.');
                        },
                        callback: function(response){
                        let message = 'Payment complete! Reference: ' + response.reference;
                        alert(message);
                        },
                        callback: function(response){
                            let reference = response.reference;
                            //verify payment
                            console.log('/make-payment/' + document.getElementById("amount").value + '/' + reference);
                            window.location.href=('/make-payment/' + document.getElementById("amount").value + '/' + {{$content->id}} + '/' + reference);
                        }
                    });
                    handler.openIframe();
                    }
                </script>
        </html>
    </div>
</x-app-layout>
