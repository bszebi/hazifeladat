<?php
// Üzenet tárolása, ha szükséges
$responseMessage = "";

// Ellenőrizzük, hogy az űrlapot elküldték-e
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Az űrlapmezők beolvasása és tisztítása
    $name = htmlspecialchars(trim($_POST["name"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Ellenőrizzük, hogy a mezők nem üresek-e
    if (!empty($name) && !empty($message)) {
        // Sikeres üzenet
        $responseMessage = "Köszönöm, $name! Az üzenetedet megkaptuk: \"$message\".";
    } else {
        // Hibaüzenet, ha üres mezők vannak
        $responseMessage = "Kérlek, töltsd ki az összes mezőt!";
    }
}
?>
