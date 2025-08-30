<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Form</title>
</head>
<body>
    <form action="get">
        <label for="name">Your Name:</label>
        <input type="text" name="customername" id="name">
        <label for="tickets">How Many tickets do you want?</label>
        <input type="text" name="numberoftickets" id="tickets">
        <p>Do you have a coupon?</p>
        <input type="radio" name="coupon" id="yes">
        <label for="yes">Yes</label>
        <input type="radio" name="coupon" id="no">
        <label for="no">No</label>
    </form>
    
</body>
</html>