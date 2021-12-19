<!DOCTYPE html>
<html lang="en">
<head>

<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Payment Gateway</title>
</head>
<body>

<div class="container">

<form action="" method="post">

<div class="row">
    <div class="col">
        <h3 class="title">Billing Address</h3>
        <div class="inputBox">
            <span>Full Name:</span>
            <input type="text" placeholder="Enter your name here">
        </div>

        <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Enter your email here">
        </div>
        <div class="inputBox">
            <span>Address:</span>
            <input type="text" placeholder="Enter your address here">
        </div>
        <div class="inputBox">
            <span>City:</span>
            <input type="text" placeholder="Enter your city here">
        </div>

        <div class="flex">
        <div class="inputBox">
            <span>State:</span>
            <input type="text" placeholder="Enter your state here">
        </div>

        <div class="inputBox">
            <span>Zip code:</span>
            <input type="text" placeholder="Enter your zip code here">
        </div>
        </div>

    </div>

<div class="col">
    <h3 class="title">Payment</h3>

    <div class="inputBox">
                    <span>Cards accepted :</span>
                    <img src="img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Name on card :</span>
                    <input type="text" placeholder="Mr. Kamal Perera">
                </div>
                <div class="inputBox">
                    <span>Credit card number :</span>
                    <input type="number" placeholder="1001-2202-3033-4440">
                </div>
                <div class="inputBox">
                    <span>Exp month :</span>
                    <input type="text" placeholder="January">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp year :</span>
                        <input type="number" placeholder="2025">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123">
                    </div>
                </div>

            </div>

</div>






<input type="submit" value="proceed to checkout" class="submit-btn">

</form>




</div>




<script src="js/main.js"></script>
</body>
</html>
