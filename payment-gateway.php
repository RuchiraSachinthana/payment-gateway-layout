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
            <input type="text" placeholder="Enter your full name here" required>
        </div>

        <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="Enter your email here" required>
        </div>
        <div class="inputBox">
            <span>Address:</span>
            <input type="text" placeholder="Enter your address here" required>
        </div>
        <div class="inputBox">
            <span>City:</span>
            <input type="text" placeholder="Enter your city here" required>
        </div>

        <div class="flex">
        <div class="inputBox">
            <span>State:</span>
            <input type="text" placeholder="Enter your state here" required>
        </div>

        <div class="inputBox">
            <span>Zip code:</span>
            <input type="text" placeholder="Enter zip code " required>
        </div>
        </div>

    </div>

<div class="col">
    <h3 class="title">Payment</h3>

    <div class="inputBox">
                    <span>Cards accepted :</span>
                    <img src="img/card_img.png" alt="" >
                </div>
                <div class="inputBox">
                    <span>Name on card :</span>
                    <input type="text" placeholder="Mr. Kamal Perera" required>
                </div>
                <div class="inputBox">
                    <span>Credit card number :</span>
                    <input type="number" placeholder="1001-2202-3033-4440" required>
                </div>
                <div class="inputBox">
                    <span>Exp month :</span>
                    <select>
                            <option selected value=''>--Select Month--</option>
                            <option  value='1'>Janaury</option>
                            <option value='2'>February</option>
                            <option value='3'>March</option>
                            <option value='4'>April</option>
                            <option value='5'>May</option>
                            <option value='6'>June</option>
                            <option value='7'>July</option>
                            <option value='8'>August</option>
                            <option value='9'>September</option>
                            <option value='10'>October</option>
                            <option value='11'>November</option>
                            <option value='12'>December</option>
                 </select>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp year :</span>
                        <input type="number" placeholder="2025" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123" required>
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
