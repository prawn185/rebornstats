<?php
include('global.php');

if(isset($_POST) != ""){
    $sql = "INSERT INTO properties (name, customer_name, address_line_1, address_line_2, address_county, adderss_country,address_postcode,rent )
            VALUES (
              '" . $_POST['name'] . "',
              '" . $_POST['customer_name'] . "',
              '" . $_POST['line_1'] . "',
              '" . $_POST['line_2'] . "',
              '" . $_POST['county'] . "',
              '" . $_POST['country'] . "',
              '" . $_POST['postcode'] . "',
              '" . $_POST['rent'] . "'
                
                )";

    if (mysqli_query($conn, $sql)) {
        header('Location:results.php');
    }
}

?>