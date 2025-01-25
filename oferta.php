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
    <h1>Wolontariat w naszym schronisku</h1>
    <p>
        Nasze schronisko to miejsce, które żyje dzięki pasji i zaangażowaniu ludzi takich jak Ty! Wolontariat w naszym schronisku to doskonała okazja, aby pomóc bezdomnym zwierzętom i dać im szansę na lepsze życie. Każda para rąk jest na wagę złota, a każda chwila poświęcona zwierzętom to krok w stronę lepszego jutra.
    </p>
    <p>
        Jako wolontariusz będziesz miał/a okazję nie tylko opiekować się zwierzętami, ale również brać udział w organizowaniu wydarzeń charytatywnych, zbiórek, adopcji, czy pracach porządkowych. Twoja pomoc jest niezastąpiona, a każda chwila spędzona z naszymi podopiecznymi daje im nadzieję na nowy dom.
    </p>
    <p>
        Nie musisz mieć doświadczenia – wystarczy, że masz serce do zwierząt i chęć pomocy. Wszystkiego Cię nauczymy! Wolontariat to także szansa na zdobycie nowych doświadczeń, poznanie innych pasjonatów zwierząt oraz wspaniałych ludzi, którzy dzielą Twoje wartości.
    </p>
    <p>
        Co oferujemy:
        <ul>
            <li>Opiekę nad zwierzętami – spacery, zabawa, karmienie.</li>
            <li>Wsparcie przy organizowaniu eventów i wydarzeń charytatywnych.</li>
            <li>Możliwość nauki i rozwoju – w tym zakresie opieki nad zwierzętami i organizacji pracy w schronisku.</li>
            <li>Wspaniałą atmosferę i możliwość pracy z ludźmi, którzy podzielają Twoje pasje.</li>
        </ul>
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