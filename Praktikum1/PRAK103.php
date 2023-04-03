<?php 
    function fahrenheit($celcius) {
        echo "Fahrenheit (F) = " . round($celcius * (9 / 5) + 32, 4) . "<br>";
    }

    function reamur($celcius) {
        echo "Reamur (R) = " . round($celcius * (4 / 5), 4) . "<br>";
    }

    function kelvin($celcius) {
        echo "Kelvin (K) = " . round($celcius + 273.15, 4) . "<br>";
    }

    $celcius = 37.841;
    fahrenheit();
    reamur($celcius);
    kelvin($celcius);
?>