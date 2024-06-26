<html>
<head>
    <title>UneedIT - Zakelijk</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        background-color: white;
        color: white;
        text-align: center;
        padding: 1em;
    }

    main {
        padding: 1em;
    }

    #logo {
        position: absolute;
        left: 0px;
        top: -10px;
    }

    .formulier {
        position: absolute;
        top: 15%;
        left: 60%;
        background: #0193aa;
    }

    form {
        margin: 0 auto;
        width: 70%;
    }

    label {
        display: block;
        margin-top: 10px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
    }

    input[type="submit"] {
        background-color: #c12d29;
        color: #ffffff;
        border: none;
        cursor: pointer;
    }

    textarea {
        height: 100px;
    }

    #text {
        color: #ffffff;
    }

    #text {
        border: 3px solid #5e76d9;
        padding: 10px;
        background:;
    }

    #text h2 {
        text-align: center;
    }

    #text p {
        text-align: center;
    }

    .adres {
        margin-top: 150px;
        margin-left: 100px;
        background-color: #c12d29;
    }

    #locatie {
        width: 30%;
        float: left;
        padding: 20px;
        padding-bottom: 54px;
        background-color: #c12d29;
    }

    #berijkbaar {
        width: 30%;
        float: left;
        padding: 20px;
        border-left: solid 1px #ccc;
        border-right: solid 1px #ccc;
        background-color: #c12d29;
    }

    #open {
        width: 30%;
        float: left;
        padding: 20px;
        background-color: #c12d29;
    }

    .info {
        border: solid 1px #ccc;
        border-radius: 5px;
        margin-right: 600px;
        padding: 10px;
        background-color: lightgrey;
    }

    .info-text {
        padding: 10px;
    }

    .cloud {
        border: solid 1px #ccc;
        border-radius: 5px;
        padding: 10px;
        background-color: lightgrey;
        margin-right: 700px;
        position: absolute;
        top: 800px;
    }

    .abonement {
        border: solid 1px #ccc;
        border-radius: 5px;
        padding: 10px;
        background-color: lightgrey;
        margin-left: 800px;
        position: absolute;
        top: 800px;
    }

    .nav {
        background-color: white;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        padding: 5px 10px;
        align-items: center;
    }

    .nav-links {
        display: flex;
        justify-content: flex-end;
        margin-left: auto;
    }

    .nav a {
        display: flex;
        color: black;
        padding: 14px 20px;
        text-decoration: none;
    }

    .nav a:hover {
        background-color: white;
        color: red;
    }

    .navlogo img{

        width: 250px;
        height: auto;
    }

    .contact-info {
        display: flex;
    }

    .contact-section {
        flex: 1;
        text-align: center;
        padding: 20px;
        border: 0px solid #ccc;
        background-color: #4682B4;
        margin-top: 150px;
    }
</style>
<body>

<header>
    <nav>
        <div class="nav">
            <div class="navlogo">
                <img id="logo" src="img/logo.png" alt width="300px" height="100px">
            </div>
            <div class="nav-links">
                <a href="home.php">Home</a>
                <a href="itnieuws.php">It nieuws</a>
                <a href="overons.php">Over ons</a>
                <a href="reparatie.php">Reparatie</a>
                <a href="service.php">Service</a>
                <a href="zakelijk.php">Zakelijk</a>
                <a href="F.A.Q.php">F.A.Q.</a>
                <a href="#">Webschop</a>
            </div>
        </div>
    </nav>
</header>
<main>

    <div class="info">
        <div class="info-text">
            <h1>Zakelijk</h1>
            <p>UneedIT biedt alle diensten op locatie aan.</p>
            <p>Wij bieden de volgende diensten aan:</p>
            <ul>
                <li>Reparatie van computers en laptops: </li>
                <a>wij doen zowel apple als windows en androit appareten</a>
                <li>Installatie van software:</li>
                <a>Wij maken uw windows en apple laptop gebruiks klaar</a>
            </ul>
            <p>Wilt u meer informatie over onze diensten? Neem dan contact met ons op.</p>
        </div>
    </div>

    <div class="formulier">
        <div id="text">
            <h2 id="form">Contactformulier</h2>
            <p>Laat ons weten wat er fout is met welk appataat en doen er wat aan.</p>
            <form action="zakelijk.php" method="post">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="bericht">Probleem:</label>
                <textarea id="bericht" name="bericht" required></textarea>
                <input type="submit" value="Verstuur">
            </form>
        </div>

        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $query = $bd = new PDO('mysql:host=localhost;dbname=uneet-it',
            'root', '');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // ontvangen data
            $naam = $_POST['naam'];
            $email = $_POST['email'];
            $bericht = $_POST['bericht'];

            // verstuur data naar database
            $query = $bd->prepare('INSERT INTO `formulier` (`naam`, `email`, `bericht`) VALUES (:naam, :email, :bericht)');
            $query->execute([
                'naam' => $naam,
                'email' => $email,
                'bericht' => $bericht
            ]);
            Header('Location: zakelijk.php');
        }
        ?>
    </div>
    </div>

    <div class="contact-info">
        <div class="contact-section">
            <p>Locatie:</p>
            <p>Zuidbaan 514, 2841MD Moordrecht</p>
        </div>
        <div class="contact-section">
            <p>Neem contact met ons op:</p>
            <p>Servicenummer: +316 30 985 409</p>
            <p>Kantoornummer: +3118 28 202 18  of info@uneed-it.com</p>
            <p>Bereikbaar van 10:00 - 17:30</p>
        </div>
        <div class="contact-section">
            <p>bezorg diensten:</p>
            <p>UPS, DHL en HOMERR</p>
            <p>ophalen van 10:00 tot 17:30</p>
        </div>
    </div>

    <div class="abonement">
        <h2>Abonnement</h2>
        <h1>Uneed-IT Flex All Support</h1>
        <h3>Speciaal opgezet voor kleine ondernemers en ZZP’ers</h3>
        <p>Kosten van dit abonnement bedragen vanaf € 24,50 ex. per maand voor een werkstation en € 149,00 per maand voor beheer van een SBS Server. U ontvangt korting op het standaard uurloon. Voor dit abonnement betaalt u € 47,50 per uur i.p.v. € 85,00 excl. BTW.</p>
        <p> voordelen:</p>
        <ul>
            <li>Storingshulp binnen 1 uur</li>
            <li>Controleren en opschonen van het werkstation</li>
            <li>Onbeperkt hulp op afstand om kleine problemen op te lossen</li>
            <li>25 % korting op aanschaf supplies</li>
            <li>1x per kwartaal controle op veiligheid, updates en status van het werkstation</li>
            <li>Controle en maken van back-ups van uw data en mail</li>
            <li>15 % korting op aanschaf hardware</li>
            <li>Alijd vervangende apparatuur beschikbaar</li>
        </ul>
    </div>

    <div class="cloud">
        <h2>Cloud</h2>
        <h1>CLOUDDIENSTEN VAN UNEED-IT</h1>
        <h2>Wij begeleiden u graag naar de Cloud… Wie heeft er niet van gehoord? Het moderne nieuwe werken met o.a. Office365, waarbij alle email en data in de Cloud wordt opgeslagen.</h2>
        <p>Uneed-IT en 1A First Alternative begeleiden en beheren zakelijke klanten in elke branche. Voor u geeft dat meerdere voordelen; de belangrijkste zijn: Bij het opmaken van het jaarbudget weet u al wat u het komende jaar aan IT-kosten kwijt bent maandelijkse betaling, dus spreiding van kosten, geen investering meer in eigen Servers etc. Clouddiensten van Uneed-IT leveren wij altijd inclusief Back-up; nooit meer data kwijt raken omdat u een veilige kiest voor een back-up! Uw data staat veilig in Nederlandse datacenters, dus geen zorgen over de privacywetgeving.</p>
    </div>
</main>
</body>
</html>
