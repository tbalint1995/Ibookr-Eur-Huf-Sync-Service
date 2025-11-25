<?php
// Adatok letöltése az ECB API-ról (https://data.ecb.europa.eu)
$apiUrl = 'https://data.ecb.europa.eu/data-detail-api/EXR.D.HUF.EUR.SP00.A';
$response = file_get_contents($apiUrl);

// Ellenőrizd, hogy sikerült-e lekérni a választ
if ($response === false) {
    die('Hiba történt az API hívás során');
}

// JSON válasz dekódolása
$data = json_decode($response, true);

// Adatok megjelenítése
foreach ($data as $item) {
    $periodName = $item['PERIOD_NAME'];
    $currencyPair = 'EUR-HUF'; // Alapértelmezett pár EUR-HUF

    // Ellenőrizd, hogy az "OBS_VALUE_AS_IS" kulcs létezik-e
    if (isset($item['OBS_VALUE_AS_IS'])) {
        $rate = $item['OBS_VALUE_AS_IS'];
    } else {
        $rate = 'Az árfolyamok hiánya a hétvégén teljesen érthető, mivel a pénzügyi piacok hétvégi zárva tartása miatt nincsenek kereskedési napok ezeken a napokon. ';
    }

    echo 'Dátum: ' . $periodName . '<br>';
    echo 'Pénznem pár: ' . $currencyPair . '<br>';
    echo 'Árfolyam: ' . $rate . '<br>';
    echo '<hr>';
}


echo 'Az adatok sikeresen vannak megjelenítve.';
