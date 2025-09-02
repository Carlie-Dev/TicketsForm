<?php 
    define('TICKET_PRICE', 12.50);
    define('THEATER_NAME', 'OTC Cinema');

    if ($_GET){
        $customername = $_GET['customername'];
        $tickets = (int) $_GET['numberoftickets'];
        $coupon = $_GET['coupon'];
        $snack = $_GET['snack'];
    }
    $subtotal;
    $finaltotal;
    
    
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
        <form method="get">
                <label for="customername">Your Name:</label>
                <input type="text" name="customer" id="customername">
                <label for="tickets">How Many tickets do you want?</label>
                <input type="text" name="numberoftickets" id="tickets">
                <p>Do you have a coupon?</p>
                <input type="checkbox" name="coupon" id="yes">
                <label for="yes">Yes</label>
                <p>Do you want a snack</p>
                <input type="checkbox" name="snack" id="popcorn">
                <label for="Popcorn">Popcorn</label>
                <input type="checkbox" name="snack" id="gummies">
                <label for="gummies">Gummies</label>
                <input type="checkbox" name="snack" id="mnms">
                <label for="mnms">M&MS</label>
                
                
                
                <input type="submit" value="Submit">
            </form>
    </div>
<!--logic-->
    <div>
        
        <?php 
            if(isset($_GET['coupon'])){
                echo "Coupon selected";
            }else{
                echo "No coupon selected";
            }
            if(isset($_GET['snack'])){
                echo "snack selected";
            }else{
                echo $snack;
            }
           
            if(isset($_GET['tickets'])){
                #calculation
                $subtotal = $tickets*TICKET_PRICE;
                if($coupon){
                    $finaltotal = $subtotal - 2.00;
                }else{
                    $finaltotal = $subtotal;
                }


            }
            if(isset($finaltotal)){
                
            }
        ?>
    </div>
    
</body>
</html>