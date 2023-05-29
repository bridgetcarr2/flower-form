<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Order Form</Form></title>
    <script src="validator.js"></script>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1> Rose Bush Order Form </h1>

    <form name="roseForm" onsubmit="return validateForm();" action="#" method="post">
    <div class="row">
        <label>Full Name</label>
        <input type="text" name="FullName">
        <div class="error" id="FullNameErr"></div>
        </div>

        <div class="row">
        <label>Phone Number</label>
        <input type="text" name="PhoneNumber">
        <div class="error" id="PhoneNumberErr"></div>
        </div>


        <div class="row">
        <label>Address</label>
        <input type="text" name="Address">
        <div class="error" id="AddressErr"></div>
        </div>


        <div class="row">
        <label>Credit Card Number</label>
        <input type="text" name="CreditCardNumber">
        <div class="error" id="CreditCardNumberErr"></div>
        </div>

        <div class="row">
        <label>Are you ready to buy the best rose bush ever?</label>
        <div class="form-inline">
             <label><input type="plant" name="plants" value="yes"> Yes</label>
             <label><input type="plant" name="plants" value="no"> No</label>
        </div>
        <div class="error" id="plantsErr"></div>
        </div>

        <div class="row">
            <input type="submit" value="Submit">
</div>
</form>
</body>
</html>