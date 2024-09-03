<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt Upload Form</title>
    <link rel="stylesheet" href="Styles.css">
</head>

<body>
    <div class="form-container">
        <h2>Payment Receipt Upload Form</h2>
        <form action="bai2_1.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label class="name_input" style="position: absolute;
    margin-top: -20px;" for="first_name">Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
            </div>

            <div class="form-group">
                <label class="name_input" style="position: absolute;
    margin-top: -21px;" for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="example@example.com" required>
                <label class="id_input" style="position: absolute;
    margin-top: -21px;margin-left: 279px;" for="invoice_id">Invoice ID</label>
                <input type="text" id="invoice_id" name="invoice_id" required>
            </div>


            <label style="position: absolute;
    margin-top: -36px;
    font-weight: 700;">Pay For</label>
            <div class="checkbox-container">
                <div class="column">
                    <label><input id="payfor" name="payfor" type="checkbox"> 15K Category</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> 55K Category</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> 116K Category</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> Shuttle Two Ways</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> Compressport T-Shirt Merchandise</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> Other</label>
                </div>
                <div class="column">
                    <label><input id="payfor" name="payfor" type="checkbox"> 35K Category</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> 75K Category</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> Shuttle One Way</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> Training Cap Merchandise</label>
                    <label><input id="payfor" name="payfor" type="checkbox"> Buf Merchandise</label>
                </div>
            </div>

            <input type="submit" value="Submit">

        </form>
</body>

</html>