<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Küchen'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="at">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>
<body>
        <!--Шапка сайта-->
        <header class="header d-none d-sm-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 header-container">
                        <img class="header-logo" src="assets/img/Logo.jpg" alt="">
                        <div class="header-button-wrapper">
                            <a class="btn header-button-link" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                        </div>
                    </div>                 
                </div>            
            </div>
        </header>
        <!-- Раздел страницы-->
        <section class="first-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 first-container">
                        <div class="fixed-top d-sm-none">
                            <div class="header-button-wrapper d-grid col-12">
                                <a class="btn header-button-link" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                            </div>
                        </div>
                        <div class="first-section-wrapper">
                            <h1 class="first-section-wrapper__title"><?= $title ?></h1>
                            <p class="first-section-wrapper__description">Ihr Küchenexperte</p>
                            <div class="first-section-wrapper__button mt-5"><a href="#firstTitle"><img src="assets/img/arrow-down.svg" alt=""></a></div>
                        </div>
                    </div>                 
                </div>            
            </div>
        </section>
        <section class="second-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 second-container my-5">
                        <h2 class="second-title" id="firstTitle">Saubere Verarbeitung und hochwertige Qualität</h2>
                        <div class="second-wrapper">
                            <div class="second-left">
                                <p class="second-left__items">Unser Küchenstudio steht für eine saubere handwerkliche Verarbeitung und hochwertige Qualität. Für uns bilden Küchen den Mittelpunkt der Wohnung. Hier spielt sich das Leben ab. Individuell wie Ihr Leben wird auch Ihre Küche.</p>
                                <p class="second-left__items">Wir finden gemeinsam mit Ihnen die passenden Antworten zu allen Küchenfragen in Bezug auf Stilrichtung, Geräteausstattung, Farbgestaltung und Funktionalität.</p>
                                <p class="second-left__items">Für jeden Grundriss, wirklich für jeden, werden wir Ihnen eine Lösung anbieten, welche sich im Alltag bewährt und Ihnen nicht nur die Arbeitsabläufe erleichtert, sondern auch ein Lächeln auf das Gesicht zaubert.</p>
                                <p class="second-left__items second-left__items--fw">Alle unsere Mitarbeiter beantworten Ihnen gern Ihre Fragen rund um die Küche. Direkt am Telefon ist es immer am einfachsten und am direktesten - rufen Sie uns an!</p>
                            </div>
                            <div class="second-right">
                                <img class="second-right__img" src="assets/img/blue_7f255df3-8839-4abd-b7b3-5e6459cab7e7.jpg" alt="" >
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="third-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 third-container">
                        <div class="third-box">
                            <h2 class="third-box__title">Wir finden die richtige Lösung für Sie!</h2>
                            <p class="third-box__description">Kontaktieren Sie uns noch heute!</p>
                            <div class="third-box__wrapper">
                                <div class="third-button-wrapper">
                                    <a class="btn third-button-link" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                                </div>
                                <div class="header-mail-wrapper">
                                    <a class="btn header-mail-link" href="#qwer" > Nachricht schreiben</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="second-section second-section--new-background">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 second-container my-5">
                        <h2 class="second-title" id="firstTitle">Unser Service für Sie</h2>
                        <div class="second-wrapper">
                            <div class="second-left second-left--order">
                                <h4 class="second-left__title">Unsere Leistungen im Überblick</h4>
                                <ul>
                                    <li class="second-left__li">Moderne Küchen</li>
                                    <li class="second-left__li">Klassische Küchen</li>
                                    <li class="second-left__li">Küchen im Landhausstil</li>
                                    <li class="second-left__li">Beratung und Planung</li>
                                    <li class="second-left__li">Küchenmontage</li>
                                    <li class="second-left__li">Komplettplanungspaket</li>
                                </ul>
                            </div>
                            <div class="second-right">
                                <img class="second-right__img" src="assets/img/2blue.jpg" alt="" >
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="fourth-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 fourth-container">
                        <div class="fourth-box">
                            <h2 class="fourth-box__title" id="qwer">Kontaktieren Sie uns!</h2>
                            <p class="fourth-box__description">Rufen Sie uns an oder senden Sie eine Nachricht.<br> Wir freuen uns auf Sie!</p>
                            <div class="fourth-button-wrapper mt-5">
                                <a class="btn fourth-button-link" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                            </div>

                            <form id="jq_form" class="mt-5">
                                <div class="my-3">
                                    <input class="form-control" placeholder="Vorname" name="jq_name" type="text">
                                    <div id="jq_name" style="font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                    <div id="jq_phone" style="font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="Straße" name="jq_street" type="text">
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                </div>
                                <div class="my-4">
                                    <input class="form-control" placeholder="E-Mail" name="jq_email" type="text"> 
                                </div>
                                <div class="my-4">
                                    <textarea rows="3" class="form-control" name="jq_text" placeholder="Nachricht"></textarea>
                                    <div id="jq_text" style="font-size:15px;color:red;padding-top:2px;display:none">Dies ist ein Pflichtfeld.</div>
                                </div>
                                <div class="wer"><input class="btn btn-success text-uppercase fw-bold mb-5 px-3 py-2 fourth-forms-button" type="submit" id="jq_submit" value="Senden"> </div>
                                <div id="jq_success" style="display:none">Vielen Dank für deine Nachricht. Sie wurde gesendet.</div>
                            </form>
                            
                    </div>
                </div>
            </div>
        </section>
        <section class="fifth-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 fifth-container">
                      <h2 class="fifth-title">Das sagen unsere Kunden</h2>
                      <p class="fifth-description">345 Bewertungen auf 2 Portalen mit 4,8/5 Sternen für SZ Küchen</p>  
                      <div class="fifth-box">
                        <div class="fifth-item">
                            <div class="fifth-item-wrapper">
                                <img class="fifth-item__img-star" src="assets/img/chrome_vqAuXcWtm4.png" alt="" >
                                <p class="fifth-item__date">14.05.2022</p>
                            </div>
                                <p class="fifth-item__name">Wunderbar</p>
                                <p class="fifth-item__message">- Beratung war MEGA - Herr Cantürk sehr freundlich und gute Beratung - 100% weiterempfehlen</p>
                        </div>
                        <div class="fifth-item">
                            <div class="fifth-item-wrapper">
                                <img class="fifth-item__img-star" src="assets/img/chrome_vqAuXcWtm4.png" alt="" >
                                <p class="fifth-item__date">13.05.2022</p>
                            </div>
                                <p class="fifth-item__name">Super Beratung</p>
                                <p class="fifth-item__message">Wir sind super zufrieden. Herr Cantürk ist auf alle Wünsche eingegangen, hat viele hilfreiche Tipps gegeben und war sehr freundlich und geduldig. K...</p>
                        </div>
                        <div class="fifth-item">
                            <div class="fifth-item-wrapper">
                                <img class="fifth-item__img-star" src="assets/img/chrome_vqAuXcWtm4.png" alt="" >
                                <p class="fifth-item__date">29.03.2022</p>
                            </div>
                                <p class="fifth-item__name">Immer wieder</p>
                                <p class="fifth-item__message">Zwischenzeitlich schon die 13. Küche, tolle Beratung, super Team, Preis-Leistungsverhältnis stimmt! Auch unser Welpe ist im Laden willkommen!</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Нижний колонтитул страницы-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">2022</div>                 
                </div>            
            </div>
        </footer>
        <!--Style-->     
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
</body>
</html>