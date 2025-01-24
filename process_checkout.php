<?php
// Process the checkout (for demonstration purposes)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardName = $_POST['card-name'];
    $cardNumber = $_POST['card-number'];
    $expiryDate = $_POST['expiry-date'];
    $cvv = $_POST['cvv'];

    // Normally, you would process the payment using a payment gateway (e.g., Stripe, PayPal)
    // Here we just simulate a successful transaction

    echo "Payment Successful! Thank you, $cardName! Your payment was processed.";
}
?>
