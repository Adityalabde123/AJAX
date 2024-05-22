<?php
$name = $_POST["t1"];
$age = $_POST["t2"];
$n = $_POST["t3"];

if ($name == strtoupper($name)) {
    echo "<h1>name=$name</h1>";
} else {
    echo "<h1>Name Must be in Uppercase</h1>";
}

if ($age >= 18) {
    echo "<h1>Age=$age</h1>";
} else {
    echo "<h1>Age must be 18 or older</h1>";
}

if ($n == "indian") {
    echo "<h1>Nationality: Indian</h1>";
} else {
    echo "<h1>Invalid Nationality</h1>";
}
?>
