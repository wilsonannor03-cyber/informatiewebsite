<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact | Software Developer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="wrapper">

            <h1 class="curio">curio</h1>

            <nav>
                <a href="index.html">Home</a>
                <a href="vakken.html">Vakken</a>
                <a href="rooster.html">Rooster</a>
                <a href="contact.php">Contact</a>
            </nav>
        <div class="header-banner">
        <p>Deze testversie van onze informatiesite is gemaakt door</p>
        <h2>Test Wilson <span>software developer</span> <em>(2e leerjaar)</em></h2>
        </div>
        </div>
    </header>
    <main class="contact-main">

        <h1>Contact 📞</h1>

        <div class="contact-box">

            <h2>Neem contact op</h2>

            <p>
                Heb je een vraag over de opleiding Software Developer?
                Neem dan contact met ons op.
            </p>

            <div class="contact-gegevens">

                <p>
                    📞 <strong>Telefoon:</strong><br>
                    000 - 123 45 67
                </p>

                <p>
                    ✉️ <strong>E-mail:</strong><br>
                    contact@softwaredeveloper.test
                </p>

                <p>
                    📍 <strong>Adres:</strong><br>
                    STerheijdenseweg 350<br>
                    4826 AA Breda
                </p>

            </div>


            <h2>Stuur een bericht</h2>

            <form action="#" method="post">

                <label for="naam">Naam</label>

                <input
                    type="text"
                    id="naam"
                    name="naam"
                    placeholder="Vul je naam in"
                    required
                >


                <label for="email">E-mail</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Vul je e-mail in"
                    required
                >


                <label for="bericht">Bericht</label>

                <textarea
                    id="bericht"
                    name="bericht"
                    placeholder="Typ hier je bericht..."
                    rows="6"
                    required
                ></textarea>


                <button type="submit">
                    Versturen
                </button>

            </form>

        </div>

    </main>
    <footer class="footer">

        <h1 class="footer-h1">
            CONTACT
        </h1>

        <p class="footer-h1">
            _______________________________
        </p>

        <div class="footer-nav">

            <a href="index.html">Home</a>

            <a href="vakken.html">Vakken</a>

            <a href="rooster.html">Rooster</a>

            <a href="contact.php">Contact</a>

        </div>

    </footer>

</body>

</html>
