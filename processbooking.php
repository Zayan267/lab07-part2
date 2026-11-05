<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php
    
    if (isset($_POST["firstname"])) $firstname = $_POST["firstname"]; else $firstname = "";
    if (isset($_POST["lastname"]))  $lastname  = $_POST["lastname"];  else $lastname = "";
    if (isset($_POST["age"]))       $age       = $_POST["age"];       else $age = "";
    if (isset($_POST["species"]))   $species   = $_POST["species"];   else $species = "";
    if (isset($_POST["food"]))      $food      = $_POST["food"];      else $food = "";
    if (isset($_POST["partysize"])) $party     = $_POST["partysize"]; else $party = "";

    
    if ($species == "M")      $species = "Human";
    elseif ($species == "D")  $species = "Dwarf";
    elseif ($species == "E")  $species = "Elf";
    elseif ($species == "H")  $species = "Hobbit";

    
    $booked = array();
    if (isset($_POST["accom"])) $booked[] = "Accommodation";
    if (isset($_POST["4day"]))  $booked[] = "Four-day tour";
    if (isset($_POST["10day"])) $booked[] = "Ten-day tour";
    $bookings = implode(" and ", $booked);

    echo "<p>Welcome $firstname $lastname !<br />";
    echo "You are now booked on the $bookings<br />";
    echo "Species: $species<br />";
    echo "Age: $age<br />";
    echo "Meal Preference: $food<br />";
    echo "Number of travellers: $party</p>";
?>
</body>
</html>