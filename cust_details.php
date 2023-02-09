<!DOCTYPE html>
<html>
    <head>
        <title>Details</title>
        <link rel="stylesheet" type="text/css" href="cust.css?v=<?php echo time();?>">
        <script>
            document.getElementById("e").valueAsDate=new Date();
        </script>
    </head>
    <body>
        <h4>PROVIDE YOUR DETAILS</h4>
        <form action="menu1.php" method="get">
        Customer Name: <input type="text" name="fname" pattern="[A-Z a-z\\s]*" required><br>
        Phone Number: &nbsp;&nbsp;<input type="tel" name="number" maxlength="10" minlength="10" required><br>
        G-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="mail"  required><br>
        Dining Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="ddate" value="2022-12-27" min="2022-12-27" max="2023-01-05" required><br>
        Dining Time: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" name="dtime" value="10:00" min="10:00" max="22:00" required><br>
        Total Members: &nbsp;&nbsp;&nbsp;&nbsp;<input type="tel" maxlength="2" name="totalmem" required><br>
        Preferred Table Number: <select name="tablenum" required>
            <option value="a"></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select><br><br>

        <input type="submit" value="PLAN YOUR ORDER" >
    </form>
    </body>
</html>
