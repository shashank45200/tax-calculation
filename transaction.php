<?php
    include('usercon.php'); 
    if(isset($_SESSION['login_user'])){
    
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Gateway</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            display: flex;
        }

        .left-half {
            flex: 1;
            padding: 20px;
        }

        .right-half {
            flex: 1;
            background-color: #f0f0f0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            text-align: left;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Style the Pay Now buttons */
        .pay-now-button {
            background-color: #34eb6f;
        }

        .pay-now-button:hover {
            background-color: #28ad55;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-half">
            <h1>Payment Gateway</h1>
            <form action="process_payment.php" method="post">
                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>

                <label for="expiryDate">Expiry Date:</label>
                <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" placeholder="123" required>

                <label for="name">Cardholder's Name:</label>
                <input type="text" id="name" name "name" placeholder="John Doe" required>

                <button type="submit" class="pay-now-button">Pay with Card</button>
            </form>
        </div>

        <div class="right-half">
            <img src="C:\xampp\htdocs\tax_payment\tax_submission_system_php-master\img\phonepay.jpg" alt="PhonePe Logo" width="100">
            <h2>PhonePe UPI:</h2>
            <input type="text" id="phonepeUpi" name="phonepeUpi" placeholder="yourname@phonepe" required>

            <!-- Pay Now button for PhonePe -->
            <button class="pay-now-button" onclick="payWithPhonePe()">Pay with PhonePe</button>
        </div>
    </div>

    <!-- Your JavaScript to handle PhonePe payment goes here -->
    <script>
        function payWithPhonePe() {
            // You would typically make an API call to PhonePe to initiate the payment process here
            // This may involve opening a PhonePe payment gateway or redirecting the user to PhonePe's payment page.
            // Handle the payment process with the PhonePe API.
            alert("Redirecting to PhonePe for payment...");
        }
    </script>
</body>
</html>