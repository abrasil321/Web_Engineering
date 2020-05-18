<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mortgage Calculator</title>
    <link rel="stylesheet" type="text/css" href="mortage.css">
</head>
<body>
    <header>Mortgage Calculator</header>
    <hr>
    <div class="propaganda">Making your dreams become true with just a click</div>
    <hr>
    <div class="primeiro"></div>
    <div class="segundo">
    <img class="porra" src="image2.png" alt="happy" height="auto" width="20%">
    <form>
        <?php
            $APR = ($_GET["apr"]) / 1200;
            $TERM = ($_GET["term"]) * 12;
            $AMOUNT = $_GET["amount"];

            $calcc = $AMOUNT*($APR * pow((1 + $APR) , $TERM))/(pow((1 + $APR) , $TERM) - 1);

            echo "Your Loan will be " . number_format((float)$calcc, 2, '.', '') . "$ per month.";
        ?>
    </form>    
    </div>
    <hr>
    <footer>
        <pre>        <b>Contact</b>

      Main Street
      Rexburg - ID
     (208) 201-0000
mortgage@calculator.byui</pre>
    </footer>

</body>
</html>





