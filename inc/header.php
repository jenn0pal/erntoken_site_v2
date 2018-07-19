<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERN</title>

    <link rel="icon" type="image/png" href="assets/img/cropped-ern-fav-32x32.png">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="assets/vendor/animate/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="header">
        <nav class="navbar__container js--navbar__container">
        <div class="navbar__header">
            <a href="index.php" class="navbar__logo-link">
                <img src="assets/img/ernlogo-96h.png" alt="ERN Logo" class="navbar__logo">
            </a>

            <div class="navbar__toggle hidden">
                <span src="assets/img/toggle.png" class="navbar__btn js--navbar__btn" onclick="toggleBtn()">
                    <span class="navbar__line js--navbar__line">&nbsp;</span>
                </span>
            </div>

        </div>
        <ul class="navbar__top js--navbar__top" id="navbar__top">
            <li class="navbar__separator js--navbar__separator">&nbsp;</li>
            <li class="navbar__item"><a href="airdrop.php" class="navbar__link">Airdrop</a></li>
            <li class="navbar__item"><a href="#tutorial" class="navbar__link">Pre-ICO Tutorial</a></li>
            <li class="navbar__item"><a href="ERN-One-Pager-3.pdf" class="navbar__link">One-Pager</a></li>
            <li class="navbar__item"><a href="#stages" class="navbar__link">Token Sale</a></li>
            <li class="navbar__item"><a href="#rewards" class="navbar__link">ERN Bonus</a></li>
            <li class="navbar__item"><a href="#featured" class="navbar__link">ListERN</a></li>
            <li class="navbar__item"><a href="#roadmap" class="navbar__link">Roadmap</a></li>
            <li class="navbar__item"><a href="#" class="navbar__link">FAQ</a></li>
            <li class="navbar__item"><a href="#team" class="navbar__link">Team</a></li>
            <li class="navbar__item"><a href="#ecosystem" class="navbar__link">Ecosystem</a></li>
            <!-- <li class="navbar__item"><a href="" class="navbar__link">Whitepaper</a></li> -->
            <li class="navbar__item">
                <div class="navbar__link navbar__dropdown js--navbar__dropdown">
                    <button class="btn btn__plain navbar__link dropdown__toggle" data-popup="visible" aria-haspopup="true" onclick="void(0);">
                        <span>Whitepaper</span><i class="arrow down navbar__link--arrow"></i>
                    </button>
                    <ul class="dropdown-menu js--dropdown-menu list-unstyled" aria-labelledby="dropdownMenu1">
                        <li class="dropdown__item"><a href="whitepaper-eng.pdf" class="dropdown__link">English</a></li>
                        <li class="dropdown__item"><a href="whitepaper-ara.pdf" class="dropdown__link">Arabic</a></li>
                        <li class="dropdown__item"><a href="whitepaper-chin.pdf" class="dropdown__link">Chinese</a></li>
                        <li class="dropdown__item"><a href="whitepaper-fil.pdf" class="dropdown__link">Filipino</a></li>
                        <li class="dropdown__item"><a href="whitepaper-grk.pdf" class="dropdown__link">Greek</a></li>
                        <li class="dropdown__item"><a href="whitepaper-hin.pdf" class="dropdown__link">Hindi</a></li>
                        <li class="dropdown__item"><a href="whitepaper-indo.pdf" class="dropdown__link">Indonesian</a></li>
                        <li class="dropdown__item"><a href="whitepaper-jap.pdf" class="dropdown__link">Japanese</a></li>
                        <li class="dropdown__item"><a href="whitepaper-por.pdf" class="dropdown__link">Portuguese</a></li>
                        <li class="dropdown__item"><a href="whitepaper-tur.pdf" class="dropdown__link">Turkish</a></li>
                        <li class="dropdown__item"><a href="whitepaper-viet.pdf" class="dropdown__link">Vietnamese</a></li>
                    </ul>
                </div>
            </li>
            <li class="navbar__item navbar__extra-item" id="sign__in"><button onclick="window.location.href='https://affiliate.erntoken.io/login'" class="navbar__link btn btn__outline--white navbar__btn--white">Sign In</button></li>
            <li class="navbar__item navbar__extra-item" id="sign__up"><button onclick="window.location.href='https://affiliate.erntoken.io/register'" class="navbar__link btn btn__outline--white navbar__btn--purple">Register</button></li>
        </ul>
    </nav>
    </header>