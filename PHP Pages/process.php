<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $route = $_POST['route'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $prices = [
        "Toronto-New York" => ["Economy" => 2000, "Premium Economy" => 2050, "Buisness" => 2500],
        "Toronto-Paris" => ["Economy" => 2679, "Premium Economy" => 3000, "Buisness" => 3500],
        "Toronto-Dubai" => ["Economy" => 2700, "Premium Economy" => 3300, "Buisness" => 3990],
    ];
    $total_price = $prices[$route][$class];
    header("Location: confirmation.php?route=$route&class=$class&date=$date&price=$total_price");
    exit();
} else {
    echo "Invalid request.";
}
?>

