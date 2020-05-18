<?php
    $x1 = ("Type of Performance: " . $_POST["performance"] . "\n");
    $x2 = ("Student: " . $_POST["first_name"] . " ");
    $x3 = ($_POST["last_name"] . "\n");
    $x4 = ("Student Id: " . $_POST["student_id"] . "\n");
    $x5 = ("Second Student: " . $_POST["first_name_2"] . " ");
    $x6 = ($_POST["last_name_2"] . "\n");
    $x7 = ("Second Student Id: " . $_POST["student_id_2"] . "\n");
    $x8 = ("Skill Level: " . $_POST["skill"] . "\n");
    $x9 = ("Type of Instrument: " . $_POST["instrument"] . "\n");
    $x10 = ("Location: " . $_POST["location"] . "\n");
    $x11 = ("Room Number: " . $_POST["room"] . "\n");
    $x12 = ("Time Slot: " . $_POST["time_slot"] . "\n\n");

    $theFile = fopen("./data/subscribed.txt", "w") or die("The file does not exist!");
    fwrite($theFile, $x1);
    fwrite($theFile, $x2);
    fwrite($theFile, $x3);
    fwrite($theFile, $x4);
    if($_POST["first_name_2"] != "")
    {
        fwrite($theFile, $x5);
    }

    if($_POST["first_name_2"] != "")
    {
        fwrite($theFile, $x6);
    }
    
    if($_POST["first_name_2"] != "")
    {
        fwrite($theFile, $x7);
    }
    fwrite($theFile, $x8);
    fwrite($theFile, $x9);
    fwrite($theFile, $x10);
    fwrite($theFile, $x11);
    fwrite($theFile, $x12);
    fclose($theFile);

?>


  