<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over ons</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }


        main {
            padding: 20px;
        }

        .info {
            border: solid 1px #ccc;
            border-radius: 5px;
            margin-right: 600px;
            padding: 10px;
            background-color: lightgrey;
        }

        footer {
            background-color: #5e76d9;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }


        .adres{
            margin-top: 50px;
            margin-left: 100px;
        }

        #locatie {
            width: 30%;
            float: left;
            padding: 20px;
            padding-bottom: 54px;
            background-color: #c12d29; /* Change this color to the desired background color */
        }

        #berijkbaar {
            width: 30%;
            float: left;
            padding: 20px;
            border-left: solid 1px #ccc;
            border-right: solid 1px #ccc;
            background-color: #c12d29; /* Change this color to the desired background color */
        }

        #abonnement {
            width: 30%;
            float: left;
            padding: 20px;
            background-color: #c12d29; /* Change this color to the desired background color */
        }


        #foto{
            width: 300px;
            height: 300px;
            margin-top: -300px;
            margin-left: 1000px;
        }

        .reperatie{
            border: solid 1px #ccc;
            position: absolute;
            margin-top: 200px;
            margin-right: 750px;
            margin-left: 10px;
            background-color: #0193aa;
            border-radius: 10px;
            padding: 10px;
        }

        .ICT{
            border: solid 1px #ccc;
            position: absolute;
            margin-top: 200px;
            margin-right: 10px;
            margin-left: 750px;
            background-color: #0193aa;
            border-radius: 10px;
            padding: 10px;
        }

        #AVG{
            border: solid 1px #ccc;
            position: absolute;
            margin-top: 400px;
            margin-right: 750px;
            margin-left: 10px;
            background-color: #0193aa;
            border-radius: 10px;
            padding: 10px
        }

        #instellateur{
            border: solid 1px #ccc;
            position: absolute;
            margin-top: 400px;
            margin-right: 10px;
            margin-left: 750px;
            background-color: #0193aa;
            border-radius: 10px;
            padding: 10px;
        }

        #cloud{
            border: solid 1px #ccc;
            position: absolute;
            margin-top: 600px;
            margin-right: 750px;
            margin-left: 10px;
            background-color: #0193aa;
            border-radius: 10px;
            padding: 10px;
        }

        #afspraken{
            border: solid 1px #ccc;
            position: absolute;
            margin-top: 600px;
            margin-right: 10px;
            margin-left: 750px;
            background-color: #0193aa;
            border-radius: 10px;
            padding: 10px;
        }

        #logo{
            position: absolute;
            left: 0px;
            top: -10px;
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
</head>
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
        <h3>JOHN EN PETRA SIPS</h3>
        <p>John heeft van 1983 tot 1992 bij IBM Nederland gewerkt als operator en ontwikkeling van besturingssoftware, ook wel "OS2 Warp" genoemd. In die periode heb ik alle certificaten behaald die de basis vormen van de kennis die ik nu heb.</p>
        <p>Ook via Microsoft in Nederland en in Amerika heb ik diverse certificaten behaald omdat ik onderscheidend wilde zijn ten opzichte van mijn collega's in de branche omdat wij willen dat onze klanten met netwerkbeheer of systeembeheer zo laag mogelijke kosten hebben per jaar. Dan heeft u als ondernemer geen frustraties meer omdat wij er alles aan doen om u tevreden te houden.</p>
        <p>Ook bieden we zakelijke en particuliere abonnementen aan voor service & preventief onderhoud. We zijn sinds jaar en dag een begrip in de ruime regio van Waddinxveen en omstreken. Ons werkgebied loopt van Waddinxveen tot Zevenhuizen en Moerkapelle, Reeuwijk en Tempel maar ook in Zoetermeer, Rotterdam en Schiedam komt u ons regelmatig tegen. In Nieuw Vennep en Hoofddorp in de Haarlemmermeer heeft Uneed-IT een service point.</p>
    </div>

    <img id="foto" src="../../uneed-IT/eigenaar.jpeg">

    <div class="contact-info">
        <div class="contact-section">
            <p>Locatie:</p>
            <p>Zuidbaan 514, 2841MD Moordrecht</p>
        </div>
        <div class="contact-section">
            <p>Neem contact met ons op:</p>
            <p>Servicenummer: +316 30 985 409</p>
            <p>Kantoornummer: +3118 28 202 18  of info@uneed-it.com</p>
            <p>Bereikbaar van 09:00 - 17:30</p>
        </div>
        <div class="contact-section">
            <p>bezorg diensten:</p>
            <p>UPS, DHL en HOMERR</p>
            <p>Ophalen van 09:00 tot 17:30</p>
        </div>
    </div>

    <div class="reperatie">
        <h2>Reparatie binnen 1 dag</h2>
        <p>Reparaties worden binnen een dag afgehandeld. 's Ochtends vroeg brengen is aan het eind van de dag weer ophalen. Mocht het onverhoopt toch langer duren dan ontvangt u kosteloos een vervangende laptop of computer.</p>
    </div>

    <div class="ICT">
        <h2>Lid van ICT Profs</h2>
        <p>Wij zijn lid van de landelijk opererende vereniging 'ICT Profs'. Voor u is dat belangrijk omdat we binnen deze club van specialisten de innovaties op de voet volgen en kennis en knowhow met elkaar uitwisselen. Dit leidt niet zelden tot kortere reparatietijden en dus lagere kosten voor u.</p>
    </div>

    <div id="AVG">
        <h2>Werken AVG-proof</h2>
        <p>Tijdens onze werkzaamheden staat uw veiligheid en privacy voorop. Wij houden ten alle tijden de normen van de AVG in acht en gaan zorgvuldig om met uw privé documenten.</p>
    </div>

    <div id="instellateur">
        <h2>Nest Pro Installateur</h2>
        <p>Sinds september 2019 zijn we NEST PRO Installateur. Door vakkennis en training in NEST producten, mag Uneed-IT dit voor u installeren. Daar zijn we trots op!</p>
    </div>

    <div id="cloud">
        <h2>Opslag in de Cloud</h2>
        <p>We bieden diverse opslagmogelijkheden in de cloud op snelle, veilige servers. Dat kan zelfs separaat als back-up van uw eigen harddisk. Eigenlijk onontbeerlijk omdat goede beveiliging en preventie tegenwoordig echt belangrijk zijn.</p>
    </div>

    <div id="afspraken">
        <h2>Heldere afspraken</h2>
        <p>Wij zijn doeners en houden van heldere afspraken. Wij houden niet van bla bla of "We doen dit wel even". In "Jip en Janneke" taal laten wij zien wat we doen en wat wij voor u kunnen betekenen. Professionaliteit en betrouwbaarheid zijn onze standaard.</p>
    </div>

</main>
</body>
</html>
