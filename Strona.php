<?php
$menu_items = [
    ['name' => 'Strona główna', 'link' => 'Strona.php'],
    ['name' => 'O nas', 'link' => 'onas.php'],
    ['name' => 'Wolontariat', 'link' => 'oferta.php'],
    ['name' => 'Kontakt', 'link' => 'kontakt.php']
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Płatność BLIK</title>
    <link rel="stylesheet" href="styleee.css"> 
</head>
<body>
<header>
    <nav>
    <div class="Logo-container">
            <h1 class ="Nazwa">Bezpieczne Schronienie: Dom dla Każdego</h1>
            <h2 class ="Podtytuł">Schronisko dla bezdomnych zwierząt w Gdyni</h2>
            <img src="Zdjęcia/Logov2.png" alt="Logo schroniska" class="Logo" >
        </div>
        <div class="menu">
    
            <?php foreach ($menu_items as $item): ?>
                <a href="<?= $item['link']; ?>"><?= $item['name']; ?></a>
            <?php endforeach; ?>
        </div>
    </nav>
</header>
<div class="Psy-container">
    <h2 class="Podtytuł">Dziś trafiły do naszego schroniska:</h2>
        <div class="Psy">
            <div class="zdjęcia-container">
                <img src="Zdjęcia/Kiara.png" alt="Opis zdjęcia 1" class="Foto">
                <p class="image-description">Sunia "Kiara" – Wiek: 3 lata. Miejsce: Wielki Kack</p>
            </div>
            <div class="image-container">
                <img src="Zdjęcia/Bertek.png" alt="Opis zdjęcia 2" class="Foto">
                <p class="image-description">Pies "Bertek" – Wiek: 10 lat. Miejsce: Chylonia</p>
            </div>
        </div>
        <div class="Psy">
            <div class="zdjęcia-container">
                <img src="Zdjęcia/Luna.png" alt="Opis zdjęcia 3" class="Foto">
                <p class="image-description">Sunia "Luna" – Wiek: 8 lat. Miejsce: Obłuże</p>
            </div>
            <div class="image-container">
                <img src="Zdjęcia/Oki.png" alt="Opis zdjęcia 4" class="Foto">
                <p class="image-description">Pies "Oki" – Wiek: 3 lata. Miejsce: Orłowo</p>
            </div>
        </div>
    </div>
    <div class="about-container">
        <h1>Pomóż schronisku "Dom dla każdego"!</h1>
        <p>Schronisko "Dom dla każdego" pilnie potrzebuje Twojej pomocy! Dzięki Blikowi możesz łatwo i szybko wspierać naszą działalność. Twoja darowizna pomoże nam zapewnić bezpieczeństwo, opiekę i miłość dla zwierząt czekających na nowy dom.</p>
        <p>Przekaż darowiznę za pomocą Blika i dołącz do naszej misji! Każda pomoc ma znaczenie!</p>
    </div>

<div class="PrzyciskPlatnosci-container">
<form action="kodblik.php" method="get">
            <button type="submit" class="PrzyciskPlatnosci">Wesprzyj nas za pomocą BLIK</button>
        </form>
</div>

<footer class="footer">
    <div class="footer-container">
        <div class="contact-info">
            <h3>Kontakt</h3>
            <p><strong>Telefon:</strong> +48 123 456 789</p>
            <p><strong>Email:</strong> kontakt@schronisko.pl</p>
            <p><strong>Adres:</strong> ul. Schroniskowa 5, Gdynia</p>
        </div>
        <div class="social-links">
            <h3>Znajdź nas na:</h3>
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
        </div>
    </div>
    <p class="footer-note">© 2025 Bezpieczne Schronienie. Wszystkie prawa zastrzeżone.</p>
</footer>
</body>
</html>
