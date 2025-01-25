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
<h1>Kontakt z nami</h1>
    <p>
        Jeśli masz pytania, chcesz dowiedzieć się więcej o naszych podopiecznych, potrzebujesz informacji o adopcjach, wolontariacie lub chcesz wesprzeć nasze schronisko – skontaktuj się z nami! Jesteśmy do Twojej dyspozycji i z chęcią pomożemy w każdej sprawie.
    </p>
    <p>
        Możesz skontaktować się z nami na kilka sposobów:
    </p>
    <ul>
        <li><strong>Telefon:</strong> +48 123 456 789</li>
        <li><strong>Email:</strong> <a href="mailto:kontakt@schronisko.pl">kontakt@schronisko.pl</a></li>
        <li><strong>Adres:</strong> ul. Schroniskowa 5, Gdynia</li>
    </ul>
    <p>
        Jesteśmy również obecni na mediach społecznościowych. Śledź nas na:
    </p>
    <p>
        Jeśli chcesz, możesz również wypełnić formularz kontaktowy poniżej, a nasz pracownik skontaktuje się z Tobą wkrótce.
    </p>
    <form action="send_contact.php" method="POST">
        <label for="name">Imię i nazwisko:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Wiadomość:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit" class="contact-button">Wyślij</button>
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