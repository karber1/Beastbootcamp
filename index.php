<?php 
include_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Start</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg " id="header">
        <span class="navbar-brand mb-0 h1">Beast Bootcamp</span>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Hem <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="boka.php">Boka</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="race.php">Race</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/xfit-sized-radiance.jpg" alt="slide1" id="slide1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Kom på ett av våra Bootcamps!</h5>
                    <p>Beast Bootcamp håller events utomhus eller i en av våra lokaler. Vi har bootcamps i allt från Crossfit till Thai-chi.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/running-sized-radiance.jpg" alt="slide2" id="slide2">
                <div class="carousel-caption d-none d-md-block">
                        <h5>Vårt årliga Bootcamp Race!</h5>
                        <p>Var med och delta i vårt årliga race tillsammans med andra privatpersoner och företag för välgörenhet.</p>
                    </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/yoga-sized-radiance.jpg" alt="slide3" id="slide3">
                <div class="carousel-caption d-none d-md-block">
                        <h5>Boka en instruktör till ert företag!</h5>
                        <p>Boka oss till att hålla ett effektivt träningspass på erat kontor. Vi har mängder
                                med olika typer av instruktörer som inspirerar era anställda att hålla sig i form för att kunna
                                prestera bättre i arbetet.</p>
                    </div>
            </div>
        </div>

    </div>

    <div class="container-fluid" id="eventBG">
        <div class="container" id="event">
            <div class="row">
                <div class="col" id="description">
                    <h2>Beast Bootcamp Events</h2>
                    <h3>Effektiv utomhusträning</h3>
                    <p>
                        Beast bootcamp events blandar effektiv arméträning med vanliga träningspass som crossfit
                        medmera.
                        De flesta events är utomhus på varierande platser men vi har även gruppträning inomhus för de
                        som
                        föredrar detta.
                        Våra pass arrangeras alltid av två instruktörer. En instruktör med erfarenhet från militären och
                        en
                        specialist
                        inom träningsreformen. På så vis skräddarsys alla våra pass för att göra de så effektiva som
                        möjligt.
                    </p>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-sm-12  col-md-4 " id="eventcolumn">
                    <img src="images/outdoor.jpg" alt="#" class="img-fluid">
                    <p>Kom på ett av våra utomhustränings events. Eventen hålls av en av våra instruktörer från våra
                        bootcamps.
                        Eventen hålls på varierande platser, håll koll på vad som händer.
                    </p>
                </div>
                <div class="col-sm-12  col-md-4 offset-md-2" id="eventcolumn">
                    <img src="Images/indoor.JPG" alt="#">
                    <p>Kom på ett av våra inomhusevents i våra egna lokaler. Passen är beroende av vilken instruktör som
                        anordnar eventet och kan vara i yoga, crossfit, boxning medmera.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="företagBG">
        <div class="container" id="företag">
            <div class="row">
                <div class="col" id="description">
                    <h2>Boka oss till ditt företag</h2>
                    <p>
                        Många tillbringar idag större delen av sina arbetsdagar sittandes framför en skärm. Men våra
                        kroppar
                        är inte gjorda för att sitta stilla i längre perioder.

                        Enligt Arbetsmiljöverket finns flera risker med stillasittande arbeten. Även om du i dagsläget
                        inte
                        märker av några problem finns en risk att problem uppstår senare i livet. <br>

                        Boka oss till att hålla ett effektivt träningspass på erat kontor. Vi har mängder
                        med olika typer av instruktörer som inspirerar era anställda att hålla sig i form för att kunna
                        prestera bättre i arbetet.
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 justify-content-center col-lg-4" id="företagColumn">
                    <img src="images/yoga2.jpg" alt="#">
                    <p>Boka en yogainstruktör till ert företag.</p>
                </div>
                <div class="col-sm-12 col-md-6 justify-content-center col-lg-4" id="företagColumn">
                    <img src="images/zumba.JPG" alt="#">
                    <p>Boka in en zumbainstruktör till ert företag.</p>
                </div>
                <div class="col-sm-12 col-md-6 justify-content-center col-lg-4" id="företagColumn">
                    <img src="images/kickboxning.jpg" alt="#">
                    <p>Boka in en kickboxningsinstruktör till ert företag.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="raceBG">
        <div class="container" id="race">
            <div class="row">
                <div class="col" id="description">
                    <h2>Race</h2>
                    <p>
                        Beast Bootcamps årliga race är ett motionslopp som arrangeras någonstans i Stockholm varje år.
                        Intäkterna för loppet går till ett välgörande ändamål.<br>
                        Syftet är att uppmärksamma det välgörande ändamålet och främja en hälsosam livsstil.
                        Promenera, jogga eller spring 5 eller 10 kilometer tillsammans med vänner och arbetskamrater.
                        Avsluta sedan med en skön picknick efter loppet.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col" id="compNames">
                    <h2>Deltagande företag!</h2>
                    <div class="row">
                        <div class="col">
                        
                        <?php
                        //Hämtar alla rader i databasen och skriver ut företagsnamnen

                        $sql = "SELECT * FROM race;";
                        $result = mysqli_query($con, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0){

                            while($row = mysqli_fetch_assoc($result)){
                                
                                echo "<h4 style='color:#D6CDCD;'>".$row['comp_name'] . " ";
                                
                            }

                        }

                
                        ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="footer">
        <div class="row">
            <div class="col-sm-4 justify-content-center">
                <h4>Kontakt</h4>
                <p>Telefon: 08-120 xx xx</p>
                <p>Email: beastbootcamp@bootcamp.se</p>
                <p>Adress: Tomtebodavägen 17A <br>
                    120 57, Solna
                </p>

            </div>
            <div class="col-sm-4 justify-content-center">
                <h4>Lokaler</h4>
                <p>Lokal 1, solna <br>
                    Tomtebodavägen 17A <br>
                    120 57, Solna
                </p>
                <p>Lokal 2, City <br>
                    Drottninggatan 17A <br>
                    128 32, Vasastan
                </p>

            </div>
            <div class="col-sm-4 justify-content-center">
                <h4>Bootcamps</h4>
                <p>Bootcamp 1, solna <br>
                    Hagalundsparken <br>
                    120 57, Solna
                </p>
                <p>Bootcamp 2, City <br>
                    Lill-Janskogen <br>
                    128 32, Östermalm
                </p>

            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>