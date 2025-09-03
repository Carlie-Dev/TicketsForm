<?php 
    define('TICKET_PRICE', 12.50);
    define('THEATER_NAME', 'OTC Cinema');

    if ($_GET){
        $customer = $_GET['customer'];
        $tickets = (int) $_GET['numberoftickets'];
        $coupon = isset($_GET['coupon']);
        $snack = $_GET['snack'] ?? [];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-dark text-white">
     <div class = "d-flex d-flex justify-content-center shadow p-3 mb-5 rounded bg-white text-dark">
        <h1><?php echo THEATER_NAME?></h1>
    </div>
    <div>
        <form method="get" class = "p-3">
            <div class= "form-row">
                <div class="col-md-4 mb-3">
                    <label for="customer">Your Name:</label>
                    <input type="text" name="customer" id="customer">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="tickets">How Many tickets do you want?</label>
                    <input type="number" name="numberoftickets" id="tickets">
                </div>
                <div class="col-md-4 mb-3">
                    <p>Do you have a coupon?</p>
                    <input type="checkbox" name="coupon" value="on">
                    <label for="yes">Yes</label>
                </div>
                <div class="col-md-4 mb-3">
                     <p>Do you want a snack</p>
                    <input type="checkbox" name="snack[]" value="Popcorn">
                    <label for="Popcorn">Popcorn</label>
                    <input type="checkbox" name="snack[]" value="Gummies">
                    <label for="gummies">Gummies</label>
                    <input type="checkbox" name="snack[]" value="M&Ms">
                    <label for="mnms">M&MS</label>
                </div>
                    
            </div>
                
                
               
                
                <input type="submit" value="Submit">
            </form>
    </div>
<!--logic-->
    <div>
        
        <!-- <?php 
            if(isset($_GET['coupon'])){
                echo "Coupon selected";
            }else{
                echo "No coupon selected";
            }
           
        ?> -->
        <!--Allows opening of if block innorder to display HTML only when these conditions are met-->
        <?php if ($_GET): 
             if(isset($_GET['numberoftickets'])){
                #calculation
                $subtotal = $tickets*TICKET_PRICE;
                if($coupon){
                    $finaltotal = $subtotal - 2.00;
                }else{
                    $finaltotal = $subtotal;
                }


            } ?>
            
            <table class= "d-flex d-flex justify-content-center shadow p-3 mb-5 bg-white text-dark">
                <tr>
                    <th>Name: <th>
                    <td> <?php echo $customer ?></td>
                </tr>
                <tr>
                    <th>Snack(s): </th>
                    <td> <?php 
                    if (!empty($_GET['snack'])){
                        $snacks = $_GET["snack"];
                        echo implode(",", $snacks);
                    }else{
                        echo "No Snack Selected";
                    }
                    ?></td>
                </tr>
                <tr>
                    <th>Subtotal: <th>
                    <td>$<?php echo $subtotal?></td>
                </tr>
                <tr>
                    <th>Discount: <th>
                    <td>-$<?php echo $coupon ? "2.00" : "0.00"; ?></td>
                </tr>
                <tr>
                    <th>Total: </th>
                    <td>$<?php echo number_format($finaltotal, 2)?></td>
                <!--number_format allows to determine the number of decimal places printed-->
                </tr>
            </table>    

        <?php endif; ?>
        
        
    </div>
    
</body>
</html>