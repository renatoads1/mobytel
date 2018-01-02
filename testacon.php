<?php
//"mysql:host=187.94.66.40;dbname=mbilling,root,B7uckWm47Q"
$link = mysqli_connect("187.94.66.40","root","B7uckWm47Q","mbilling");

if (!$link) {
    echo "nao conectou MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

?>