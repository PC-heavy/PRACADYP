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
        <div class="menu">
    
            <?php foreach ($menu_items as $item): ?>
                <a href="<?= $item['link']; ?>"><?= $item['name']; ?></a>
            <?php endforeach; ?>
        </div>
    </nav>
</header>
<div class="about-container">
    <h1>O nas</h1>
    <p>
        Witamy w naszym Schronisku dla Zwierząt! 
        Jesteśmy organizacją, która od lat zajmuje się ratowaniem, 
        opieką i poszukiwaniem nowych domów dla zwierząt w potrzebie. 
        Naszym celem jest zapewnienie bezpieczeństwa i komfortu bezdomnym psom, 
        kotom oraz innym zwierzętom, które znalazły się w trudnej sytuacji.
    </p>
    <p>
        W naszym schronisku wierzymy, że każde zwierzę zasługuje na miłość, 
        opiekę i ciepły dom. Codziennie pracujemy, aby zapewnić naszym podopiecznym odpowiednią opiekę weterynaryjną, 
        jedzenie oraz przestrzeń do zabawy. Współpracujemy z wieloma organizacjami, wolontariuszami i darczyńcami, 
        którzy wspierają naszą misję.
    </p>
    <p>
        Pomagamy nie tylko w adopcjach, ale także w edukacji społeczeństwa na temat odpowiedzialnej opieki nad zwierzętami, 
        jak również promujemy działania na rzecz zmniejszenia liczby bezdomnych zwierząt. 
        Jako schronisko staramy się również dawać drugą szansę zwierzętom, które zostały porzucone lub źle traktowane.
    </p>
    <p>
        Dołącz do naszej misji! Dzięki Twojej pomocy możemy zmieniać życie zwierząt na lepsze. 
        Możesz zostać wolontariuszem, wesprzeć nas darowizną lub adoptować jednego z naszych podopiecznych. 
        Razem możemy zrobić różnicę!
    </p>
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