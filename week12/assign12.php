<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="week8.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Protein's House</title>
        <style>
            form{
                font-size: larger;
                border-radius: 1%;
                border-color: blue;
                width: 99%;
                height: auto;
                padding-left: 1%;
                background-color: gray;
                display: flex;
                flex-direction: column;
            } 
        </style>
    </head>

    <body>
        <header><i>Protein's House</i></header>
        <div id="menu">
            <a href="#myanchor1" title="my1">Contact Us</a>
        </div>
        <hr>
        <div class="one">Review your Order </div>
        <hr>
        <form class="one" action="assign12_a.php" method="GET">
            <?php
                /***************************** Calculation ******************************/

                /*       Whey    */
                function whey1(){
                    $amount = 0;
                    $quantity11 = $_GET["quantity11"];
                    $amount = $quantity11 * 32.99;
                    
                    return $amount;
                }


                function whey2(){
                    $amount = 0;
                    $quantity12 = $_GET["quantity12"];
                    $amount = $quantity12 * 29.45;
                
                    return $amount;
                }

                function whey3(){
                    $amount = 0;
                    $quantity13 = $_GET["quantity13"];
                    $amount = $quantity13 * 30.92;
                    
                    return $amount;
                }


                function whey4(){
                    $amount = 0;
                    $quantity14 = $_GET["quantity14"];
                    $amount = $quantity14 * 29.55;
                    
                    return $amount;
                }

                function whey(){
                    $amount1 = whey1();
                    $amount2 = whey2();
                    $amount3 = whey3();
                    $amount4 = whey4();

                    $totalAmount = $amount1 + $amount2 + $amount3 + $amount4;

                    return $totalAmount;    
                }

                /*     Isolate     */

                function isolate1(){
                    $amount = 0;
                    $quantity21 = $_GET["quantity21"];
                    $amount = $quantity21 * 33.49;
                    
                    return $amount;
                }

                function isolate2(){
                    $amount = 0;
                    $quantity22 = $_GET["quantity22"];
                    $amount = $quantity22 * 31.15;
                    
                    return $amount;
                }

                function isolate3(){
                    $amount = 0;
                    $quantity23 = $_GET["quantity23"];
                    $amount = $quantity23 * 35.12;
                    
                    return $amount;
                }


                function isolate4(){
                    $amount = 0;
                    $quantity24 = $_GET["quantity24"];
                    $amount = $quantity24 * 32.85;
                    
                    return $amount;
                }

                function isolate(){
                    $amount1 = isolate1();
                    $amount2 = isolate2();
                    $amount3 = isolate3();
                    $amount4 = isolate4();

                    $totalAmount = $amount1 + $amount2 + $amount3 + $amount4;

                    return $totalAmount;    
                }

                /*     Hydrolyzed      */

                function hydro1(){
                    $amount = 0;
                    $quantity31 = $_GET["quantity31"];
                    $amount = $quantity31 * 38;
                    
                    return $amount;
                }

                function hydro2(){
                    $amount = 0;
                    $quantity32 = $_GET["quantity32"];
                    $amount = $quantity32 * 39.35;
                    
                    return $amount;
                }

                function hydro3(){
                    $amount = 0;
                    $quantity33 = $_GET["quantity33"];
                    $amount = $quantity33 * 25.90;
                    
                    return $amount;
                }

                function hydro4(){
                    $amount = 0;
                    $quantity34 = $_GET["quantity34"];
                    $amount = $quantity34 * 38.90;
                    
                    return $amount;
                }

                function hydro(){
                    $amount1 = hydro1();
                    $amount2 = hydro2();
                    $amount3 = hydro3();
                    $amount4 = hydro4();

                    $totalAmount = $amount1 + $amount2 + $amount3 + $amount4;

                    return $totalAmount;    
                }

                /*    Total Amount     */

                
                    $total1 = whey();
                    $total2 = isolate();
                    $total3 = hydro();
                    $total = $total1 + $total2 + $total3;

                    $fname = $_GET["first_name"];
                    $lname = $_GET["last_name"];
                    $addr = $_GET["address"];
                    $phone = $_GET["phone"];
                    $phone1 = $_GET["phone1"];
                    $phone2 = $_GET["phone2"];
                    $card = $_GET["card"];
                    $exp = $_GET["exp_date"];
                    $exp1 = $_GET["exp_date1"];

                    $quantity11 = $_GET["quantity11"];
                    $quantity12 = $_GET["quantity12"];
                    $quantity13 = $_GET["quantity13"];
                    $quantity14 = $_GET["quantity14"];
                    $quantity21 = $_GET["quantity21"];
                    $quantity22 = $_GET["quantity22"];
                    $quantity23 = $_GET["quantity23"];
                    $quantity24 = $_GET["quantity24"];
                    $quantity31 = $_GET["quantity31"];
                    $quantity32 = $_GET["quantity32"];
                    $quantity33 = $_GET["quantity33"];
                    $quantity34 = $_GET["quantity34"];
                    

                    $amount1 = whey1();
                    $amount2 = whey2();
                    $amount3 = whey3();
                    $amount4 = whey4();
                    $amount5 = isolate1();
                    $amount6 = isolate2();
                    $amount7 = isolate3();
                    $amount8 = isolate4();
                    $amount9 = hydro1();
                    $amount10 = hydro2();
                    $amount11 = hydro3();
                    $amount12 = hydro4();


                    echo nl2br("\nName: ") . $fname . " " . $lname;
                    echo nl2br("\nAddress: ") . $addr;
                    echo nl2br("\nPhone Number: (") . $phone . ") " . $phone1 . "-" . $phone2;  
                    
                    echo nl2br("\n--------------------------------");
                    if($quantity11 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Option 1");
                        echo nl2br("\nQuantity: ") . $quantity11;
                        echo nl2br("\nPrice: ") . $quantity11 . " x 32.99 = $"  . $amount1;
                    }

                    if($quantity12 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Option 2");
                        echo nl2br("\nQuantity: ") . $quantity12;
                        echo nl2br("\nPrice: ") . $quantity12 . " x 29.45 = $"  . $amount2;
                    }

                    if($quantity13 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Option 3");
                        echo nl2br("\nQuantity: ") . $quantity13;
                        echo nl2br("\nPrice: ") . $quantity13 . " x 30.92 = $"  . $amount3;
                    }

                    if($quantity14 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Option 4");
                        echo nl2br("\nQuantity: ") . $quantity14;
                        echo nl2br("\nPrice: ") . $quantity14 . " x 29.55 = $"  . $amount4;
                    }

                    if($quantity21 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Isolated Option 1");
                        echo nl2br("\nQuantity: ") . $quantity21;
                        echo nl2br("\nPrice: ") . $quantity21 . " x 33.49 = $"  . $amount5;
                    }

                    if($quantity22 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Isolated Option 2");
                        echo nl2br("\nQuantity: ") . $quantity22;
                        echo nl2br("\nPrice: ") . $quantity22 . " x 31.15 = $"  . $amount6;
                    }

                    if($quantity23 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Isolated Option 3");
                        echo nl2br("\nQuantity: ") . $quantity23;
                        echo nl2br("\nPrice: ") . $quantity23 . " x 35.12 = $"  . $amount7;
                    }

                    if($quantity24 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Isolated Option 4");
                        echo nl2br("\nQuantity: ") . $quantity24;
                        echo nl2br("\nPrice: ") . $quantity24 . " x 32.85 = $"  . $amount8;
                    }

                    if($quantity31 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Hydrolyzed Option 1");
                        echo nl2br("\nQuantity: ") . $quantity31;
                        echo nl2br("\nPrice: ") . $quantity31 . " x 38.00 = $"  . $amount9;
                    }

                    if($quantity32 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Hydrolyzed Option 2");
                        echo nl2br("\nQuantity: ") . $quantity32;
                        echo nl2br("\nPrice: ") . $quantity32 . " x 39.35 = $"  . $amount10;
                    }

                    if($quantity33 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Hydrolyzed Option 3");
                        echo nl2br("\nQuantity: ") . $quantity33;
                        echo nl2br("\nPrice: ") . $quantity33 . " x 25.90 = $"  . $amount11;
                    }

                    if($quantity34 > 0)
                    {
                        echo nl2br("\n\nWhey Protein Hydrolyzed Option 4");
                        echo nl2br("\nQuantity: ") . $quantity34;
                        echo nl2br("\nPrice: ") . $quantity34 . " x 38.90 = $"  . $amount12;
                    }

                    echo nl2br("\n\nPurchase Total: ") . "$" . $total;
                    echo nl2br("\n--------------------------------");
                    echo nl2br("\n\nCard Type: ") . $card;
                    echo nl2br("\nCard Expiration Date: ") . $exp . " / " . $exp1;

        


                /***************************** End Calculation *********************************/
            ?>
            <br>
            <hr>
            <button type="submit" name="butao" value="confirm">Confirm Purchase</button><br>
            <button type="submit" name="butao" value="cancel">Cancel Purchase</button>

        </form>
        <hr>
        <footer>
            <table>
                <tr>
                    <th>Contact</th>
                    <th></th>
                    <th>Sponsors</th>
                </tr>
                <tr>
                    <td>(208) 201-0531</td>
                    <td>-----------------------------------------------</td>
                    <td>Universal Nutrition</td>
                </tr>
                <tr>
                    <td>proteinhouse@gym.com</td>
                    <td>-----------------------------------------------</td>
                    <td>Integral Medicine</td>
                </tr>
                <tr>
                    <td>000 Main Street, Rexburg </td>
                    <td>-----------------------------------------------</td>
                    <td>Growth Supplements</td>
                </tr>
                <tr>
                    <td>Idaho - 83000</td>
                    <td></td>
                    <td></td>
                </tr>
            </table><a id="myanchor1"></a>
        </footer>
    </body>

</html>
