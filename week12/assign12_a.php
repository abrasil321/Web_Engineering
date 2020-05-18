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
            img {
                width: 80%;
                height: auto;
                border-radius: 4em;
                margin: auto;
            }

            img.two {
                width: 80%;
                height: auto;
                border-radius: 4em;
                margin: auto;
            }

            pre.one {
                font-size: medium;
                color: white;
                font-family: fantasy;
                font-weight: bolder;
                background-image: linear-gradient(to right, black, rgb(41, 80, 197));
                border-radius: 80px;
            }

            div.two {
                background-image: url("image1.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                height: 35vh;
                width: 100%;

            }

            div.five {
                background-image: url("image4.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                height: 40vh;
                width: 100%;
            }

            div.three {
                background-image: url("image2.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                height: 40vh;
                width: 100%;
            }

            div.four {
                background-image: url("image3.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
                height: 40vh;
                width: 100%;
            }

            @media only screen and (max-width: 600px) {

                img,
                img.two {
                    width: 45%;
                }
            }
        </style>
    </head>

    <body>
        <header><i>Protein's House</i></header>
        <div id="menu">
            <a href="#myanchor1" title="my1">Contact Us</a>
        </div>
        <hr>
        <div class="one">
            <form>
                <?php
                    $button = $_GET["butao"];
                    if($button == "confirm")
                    {
                        echo "Your Purchase was confirmed!";
                    }
                    else if($button == "cancel")
                    {
                        echo "Your Purchase was canceled!";
                    }
                ?>
            </form>   
        </div>
        <hr>
        
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