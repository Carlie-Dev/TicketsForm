<?php 
    if ($_GET){
        $customername = $_GET['customername'];
        $tickets = (int) $_GET['numberoftickets'];
        $coupon = $_GET['coupon'];
    }
    echo $customername;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Form</title>
</head>
<body>
    <div>
        <form action="get">
                <label for="customername">Your Name:</label>
                <input type="text" name="customer" id="customername">
                <label for="tickets">How Many tickets do you want?</label>
                <input type="text" name="numberoftickets" id="tickets">
                <p>Do you have a coupon?</p>
                <input type="radio" name="coupon" id="yes">
                <label for="yes">Yes</label>
                <input type="radio" name="coupon" id="no">
                <label for="no">No</label>
                <input type="submit" value="Submit">
            </form>
    </div>
<!--logic-->
    <div>
        <?php 
        ?>
    </div>
    
</body>
</html>