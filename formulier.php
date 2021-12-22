<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulier</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="ShabutoGo" width="200" height="200" style="max-width:100%;height:auto;">
        <?php   include 'navigatie.html';   ?>
    </header>


    <main>
        <section>
            <article>
                <img src="image/314342a3-0868-411d-812e-18f6091b12a1.png" alt="werknemers">
                <h1>Aanvraag formulier catering</h1>
                <p>Bent u benieuwd naar de mogelijkheden van onze sushi catering of wilt u direct uw catering
                    bestellen?<br>
                    Neem dan direct contact met ons op via het onderstaande contactformulier: *Verplichte velden</p>

                
                <form method="post" action="reactiepost.html"><br>
                    <legend>*Vesteging</legend>
                    <select required name="beste">
                        <option value="">Kies hier een vesteging</option>
                        <option value="AadR">Shabu to go Alphen aan den Rijn</option>
                        <option value="Af">Shabu to go Amersfoort</option>
                        <option value="Ad">Shabu to go Apeldoorn</option>
                        <option value="D">Shabu to go Delft</option>
                        <option value="DHC">Shabu to go Den Haag Centrum</option>
                        <option value="Hd">Shabu to go Hoofddorp</option>
                        <option value="L">Shabu to go Rembrandtplein</option>
                        <option value="Rw">Shabu to go Rijswijk</option>
                        <option value="RA">Shabu to go Rotterdam Alexandrium</option>
                        <option value="Coolikbensingel">Shabu to go Rotterdam Coolsingel</option>
                        <option value="RZ">Shabu to go Rotterdam Zuid</option>
                        <option value="S">Shabu to go Spijkenisse</option>
                        <option value="ULR">Shabu to go Utrecht Leidsche Rijn</option>
                        <option value="Y">Shabu to go Ypenburg</option>
                        <option value="Z">Shabu to go Zoetermeer</option>
                    </select><br>
                    <label for="Naam">*Naam:</label><br>
                    <input required type="text" name="voornaam" placeholder="Type hier uw naam"><br>
                    <label for="Bedrijfsnaam">Bedrijfsnaam:</label><br>
                    <input type="text" name="Bedrijfsnaam" placeholder="Type hier uw Bedrijfsnaam"><br>
                    <label for="telefoonnummer">*Telefoon nummer:</label><br>
                    <input required type="text" name="telefoonnummer" placeholder="Type hier uw telefoonnummer"><br>
                    <label for="mobielenummer">Mobiele nummer:</label><br>
                    <input type="text" name="mobielenummer" placeholder="Type hier uw mobiele nummer"><br>
                    <label for="Email">*Email:</label><br>
                    <input required type="text" name="Email" placeholder="Type hier uw Email"><br>
                    <label for="Straat+huisnr">*Straat + huisnr:</label><br>
                    <input required type="text" name="Straat+huisnr"
                        placeholder="Type hier uw Straat + huis nummer"><br>
                    <label for="Postcode">*Postcode:</label><br>
                    <input required type="text" name="Postcode" placeholder="Type hier uw postcode in."><br>
                    <label for="Plaats">*Plaats:</label><br>
                    <input required type="text" name="Plaats" placeholder="Type hier uw plaats"><br>
                    <legend>Bericht:</legend>
                    <textarea cols="40" rows="5" name="reactie" id="reactie"
                        placeholder="Type hier wat u ons wilt meegeven."></textarea><br>
                        <legend>*Reactie:</legend>
                    <textarea cols="40" rows="5" name="reactie" id="reactie"
                        required placeholder="Type hier wat u van ons website vind en wat er beter kan."></textarea><br>
                        <figcaption>*Hieronder moet je kiezen of je een e-mail gestuurd wilt van onze actie en speciale
                        aanbieding of niet.</figcaption>                        
                    <input required type="radio" name="e-mail" value="E-mail">Ja, ik wil per e-mail op de hoogte
                    gehouden
                    worden van actie en speciale aanbieding.<br>
                    <input required type="radio" name="e-mail" value="E-mail">Nee, ik wil niet de actie en speciale
                    aanbieding per e-mail verstuurd krijgen.
            </article>
        </section>

        <section>
            <article>
                <legend> Alles ingevuld </legend>
                <input type="submit" id="submit" name="submit" value="Verzenden">
                <input type="reset" id="reset" name="reset" value="Opnieuw">

            </article>
        </section>


        <footer>
            <p><i>Nieuwsstraat 210<br>
                    3201 EE<br>
                    Spijkenisse</i>
            </p>
        </footer>
    </main>

</body>

</html>