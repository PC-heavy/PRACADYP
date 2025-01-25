<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Płatność BLIK</title>
    <link rel="stylesheet" href="styleee.css"> 
</head>
<body>
<div class="payment-container">
    <img src="Zdjęcia/blik.png" alt="Zdjęcie Blik" width="200">
    <h1>Płatność BLIK</h1>
    <form action="process_payment.php" method="POST">
        <label for="blik_code">Kod BLIK:</label>
        <div class="blik-input-container">
                <input type="text" id="blik_code_1" name="blik_code[]" maxlength="1" required tabindex="1">
                <input type="text" id="blik_code_2" name="blik_code[]" maxlength="1" required tabindex="2">
                <input type="text" id="blik_code_3" name="blik_code[]" maxlength="1" required tabindex="3">
                <input type="text" id="blik_code_4" name="blik_code[]" maxlength="1" required tabindex="4">
                <input type="text" id="blik_code_5" name="blik_code[]" maxlength="1" required tabindex="5">
                <input type="text" id="blik_code_6" name="blik_code[]" maxlength="1" required tabindex="6">

            </div>
            <input type="hidden" name="blik_code_full" id="blik_code_full">
        <button type="submit" class="blik-button">Wesprzyj korzystając z BLIK</button>
    </form>
</div>

<div class="back-container">
<form action="Strona.php" method="get">
            <button type="submit" class="back-button">Powrót na stronę główną</button>
        </form>
</div>
</body>