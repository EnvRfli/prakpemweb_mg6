<!DOCTYPE html>
<html>
<head>
    <title>Konversi Integer ke Romawi</title>
</head>
<body>

<h1>Konversi Integer ke Romawi</h1>

<form method="post" action="">
    Masukkan bilangan integer:
    <input type="text" name="integer" />
    <input type="submit" value="Konversi" />
</form>

<?php

if ($_POST) {
    // Get the integer value
    $integer = (int) $_POST['integer'];

    // Validate the integer
    if ($integer < 1 || $integer >= 4000) {
        echo "Masukkan bilangan integer positif yang lebih kecil dari 4000.";
        exit;
    }

    // Array of roman numbers
    $romanNumber_Array = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1
    );

    $roman = '';
    foreach ($romanNumber_Array as $romanNumeral => $number) {
        // Divide to get  matches
        $matches = intval($integer / $number);

        // Assign the roman char * $matches
        $roman .= str_repeat($romanNumeral, $matches);

        // Substract from number
        $integer = $integer % $number;
    }

    // Return the final roman number
    echo "<p>Hasil konversi: " . $roman . "</p>";
}

?>

</body>
</html>