<html>
<head>
    <title>UneedIT - Zakelijk</title>

</head>
<style>

    header {
        background-color:  #00718d;
        color: white;
        text-align: center;
        padding: 1em;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 10px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
    }

    main {
        padding: 1em;
    }

    #logo{
        position: absolute;
        left: 0px;
        top: -10px;
    }

    .formulier{
        position: absolute;
        top: 100%;
        left: 70%;
        background: #0193aa;

    }

    form{
        margin: 0 auto;
        width: 70%;
    }

    label{
        display: block;
        margin-top: 10px;
    }

    input, textarea{
        width: 100%;
        padding: 10px;
        margin-top: 5px;
    }

    input[type="submit"]{
        background-color: #c12d29;
        color: white;
        border: none;
        cursor: pointer;
    }

    textarea{
        height: 100px;
    }

    h2{
        color: #5e76d9;
    }

    #text{
        border: 3px solid #5e76d9;
        padding: 10px;
        background: ;
    }

    #text h2{
        text-align: center;
    }

    #text p{
        text-align: center;
    }

    .adres{
        margin-top: 50px;
        margin-left: 100px;
        background-color: #c12d29;
    }

    #locatie{
        width: 30%;
        float: left;
        padding: 20px;
    }

    #berijkbaar{
        width: 30%;
        float: left;
        padding: 20px;
        border-left: solid 1px #ccc;
        border-right: solid 1px #ccc;
    }

    #abonnement{
        width: 30%;
        float: left;
        padding: 20px;
    }

</style>
<body>

<header>
    <nav>
        <img id="logo" src="img/logo.png" alt width="300px" height="100px">
        <ul class="nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="particulier.php">Particulier</a></li>
            <li><a href="overons.php">over ons</a></li>
        </ul>
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
                <a>wij maken uw windows en apple laptop gebruiks klaar</a>
            </ul>
            <p>Wilt u meer informatie over onze diensten? Neem dan contact met ons op.</p>
            <a> U kunt ook altijd bij ons langskomen: Zuidbaan 514
                2841 MD Moordrecht (Gouwe Park):</a>
            <p>U kunt ons ook bellen tussen 09:00 - 18:00: +3118 28 202 18</p>
        </div>

        <div class="adres">
            <div id="locatie">
                <p>Zuidbaan 514, 2841MD</p>
                <p>Mordrecht</p>
            </div>
            <div id="berijkbaar">
                <p> +316 30 985 409 SERVICENUMMER</p>
                <p> +3118 28 202 18 KANTOOR</p>
                <p>BEREIKBAAR VAN 09:00 - 18:00</p>
            </div>
            <div id="abonnement">
                <p> MA T/M VRIJ, 09:00 - 23:00</p>
                <p>TELEFONISCH BEREIKBAAR</p>
                <p>VOOR ABONNEMENTHOUDERS</p>
            </div>
        </div>


    </div>
    <div class="formulier">
        <div id="text">
            <h2>Contactformulier</h2>
            <p>laat ons weten wat er fout is met welk appataat en doen er wat aan.</p>

            <form action="zakelijk.php" method="post">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="telefoonnummer">Telefoonnummer:</label>
                <input type="tel" id="telefoonnummer" name="telefoonnummer" required>
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
            $telefoonnummer = $_POST['telefoonnummer'];
            $bericht = $_POST['bericht'];

            // verstuur data naar database
            $query = $bd->prepare('INSERT INTO `formulier` (`naam`, `email`, `telefoonnummer`, `bericht`) VALUES (:naam, :email, :telefoonnummer, :bericht)');
            $query->execute([
                'naam' => $naam,
                'email' => $email,
                'telefoonnummer' => $telefoonnummer,
                'bericht' => $bericht
            ]);
            Header('Location: zakelijk.php');
        }
        ?>
        </form>
    </div>

</main>
</html>