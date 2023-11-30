<?php
include __DIR__ . "/partials/header.php";
include __DIR__ ."/function/functions.php";
$password = genNewPassword();
var_dump($password);
?>
<main class="container">
    <!-- Creare un form che invii in GET la lunghezza della password. -->
    <div class="w-75 m-5">
    <form action="index.php" method="GET">
        <input type="number" name="passwordLength" min="8" max="16">
        <button type="submit">Invia</button>
    </form>
    </div>
</main>