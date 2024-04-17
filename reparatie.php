<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uneed-it</title>
    <link rel="stylesheet" href="css/reparatie.css"/>
</head>
<body>
<nav>
    <div class="nav">
        <div class="navlogo">
            <img src="img/logo.png" alt="uneed-it logo">
        </div>
        <div class="nav-links">
            <a href="home.php">Home</a>
            <a href="itnieuws.php">Nieuws</a>
            <a href="overons.php">Over ons</a>
            <a href="reparatie.php">Reparatie</a>
            <a href="service.php">Service</a>
            <a href="zakelijk.php">Zakelijk</a>
            <a href="F.A.Q.php">F.A.Q</a>
            <a href="#">Webshop</a>
</nav>

<div class="collum-right">
    <h1>Reparatie pagina</h1>
    <h4>Op deze pagina is reparatie te bevinden.</h4>
</div>
<div class="contact-info">
    <div class="contact-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2455.469405079924!2d4.6581814!3d52.016545799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5d125952a58cd%3A0x93f677d7fe6faaae!2sUneed-IT!5e0!3m2!1snl!2snl!4v1712576062397!5m2!1snl!2snl"></iframe>
    </div>
    <div class="contact-section">
        <p>Neem contact met ons op:</p>
        <p>+316 30 985 409 servicenummer,
            +3118 28 202 18 kantoor,
            bereikbaar van 09:00 - 18:00</p>
    </div>
    <div class="contact-section">
        <p>E-mail:</p>
        <p>UNEED-it@example.com</p>
    </div>
</div>
<div class="Reparatie-container">
    <div class="Reparatie-section">
        <h3>Snelle en betrouwbare oplossingen voor al uw reparatiebehoeften! Van elektronica tot apparaten, wij herstellen het allemaal. Ervaren technici staan klaar om uw kapotte items weer tot leven te brengen.</h3>
        <img src="OIP%20(4).jpg" alt="Repareren">
    </div>

    <div class="Reparatie-info">
        <img src="img/40gp-uneedit.jpg" alt="Repareren">
        <h3>Bij onze professionele reparatieservice streven we naar uitstekendheid in het herstellen van een breed scala aan producten. Of het nu gaat om smartphones, laptops, huishoudelijke apparaten of andere elektronica, onze ervaren technici hebben de expertise om defecten snel en efficiënt op te lossen.</h3>
    </div>
</div>

<section class="repair-form">
    <h2>Reparatie verzoek</h2>
    <form action="reparatie.php" method="post">
        <label for="name">Naam en achternaam*</label>
        <input type="text" name="name" id="name" placeholder="John Doe" required>
        <label for="email">Email*</label>
        <input type="email" name="email" id="email" placeholder="JoeBiden@gmail.com" required>
        <label for="phone">Telefoonnummer*</label>
        <input type="text" name="phone" id="phone" placeholder="0612345678" required>
        <label for="brand">Merk en Type*</label>
        <input type="text" name="brand" id="brand" placeholder="Apple/Samsung etc." required>
        <label for="date">Datum inbrengen*</label>
        <input type="text" name="date" id="date" placeholder="03/11/2024 (3 November 2024) - voorbeeld" required>
        <label for="description">Beschrijf het probleem zo uitgebreid mogelijk:</label>
        <textarea name="description" id="description" rows="5" required></textarea>
        <button type="submit">Verstuur verzoek</button>
    </form>
</section>

<?php
// Verbinding maken met de database
$bd = new PDO('mysql:host=localhost;dbname=uneed-it', 'root', '');

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gegevens ophalen uit het formulier
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $brand = $_POST['brand'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    // Bereid de SQL-query voor
    $stmt = $bd->prepare("INSERT INTO reparatie (naam, email, telefoonnummer, merk, datum, beschrijving) VALUES (:naam, :email, :telefoonnummer, :merk, :datum, :beschrijving)");

    // Bind de parameters
    $stmt->bindParam(':naam', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefoonnummer', $phone);
    $stmt->bindParam(':merk', $brand);
    $stmt->bindParam(':datum', $date);
    $stmt->bindParam(':beschrijving', $description);

    // Voer de query uit
    $stmt->execute();

    echo "Verzoek succesvol ingediend.";
} else {
    echo "Fout bij het indienen van het verzoek: " . $bd->error;
}
?>



<div class="contact-info">
    <div class="contact-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2455.469405079924!2d4.6581814!3d52.016545799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5d125952a58cd%3A0x93f677d7fe6faaae!2sUneed-IT!5e0!3m2!1snl!2snl!4v1712576062397!5m2!1snl!2snl"></iframe>
    </div>
    <div class="contact-section">
        <p>Neem contact met ons op:</p>
        <p>+316 30 985 409 SERVICENUMMER
            +3118 28 202 18</p>
        <P> KANTOOR
            BEREIKBAAR VAN 09:00 - 18:00</P>
    </div>
    <div class="contact-section">
        <p>E-mail:</p>
        <p>UNEED-it@example.com</p>
        <p>MA T/M VRIJ, 09:00 - 23:00

            TELEFONISCH BEREIKBAAR</p>
    </div>
</div>

</body>
</html>