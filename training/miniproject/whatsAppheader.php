<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp.com</title>
    <link rel="stylesheet" href="whatsApp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="/css-custom/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/css-custom/custom.css">
    </link>
</head>

<body class="feature">
    <!-- Desktop menu -->
    <nav class="navbar navbar-expand-md navbar-dark bg-success desktop-menu fixed-top">
        <div class="container">
            <div class="collapse navbar-collapse">
                <a href="banner.php" class="nav-link text-decoration-none text-white">
                    <img src="../Images/whatsApp/WhatsApp.svg.png" alt="logo" class="logo text-white" width="50">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item px-lg-2">
                        <a href="whatsApp_web.php" class="nav-link text-white">WHATSAPP WEB</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a href="feature.php" class="nav-link text-white">FEATURES</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a href="download.php" class="nav-link text-white">DOWNLOAD</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a href="security.php" class="nav-link text-white">SECURITY</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a href="help_center.php" class="nav-link text-white">HELP CENTRE</a>
                    </li>
                    <li class="nav-item px-lg-2">
                        <a href="" class="nav-link text-white" data-bs-target="#language" data-bs-toggle="modal">
                            <span class="fa fa-globe"></span>
                            EN <span class="fa fa-arrow-down"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- desktop menu end -->

    <!-- mobile visibility -->
    <div class="container-fluid bg-success">
        <div class="row">
            <div class="col-12 d-md-none d-sm-block">
                <div class="container-fluid bg-success fixed-top">
                    <!-- icon -->
                    <a class="btn float-end" href="#" data-bs-toggle="modal" data-bs-target="#menu">
                        <span class="fa fa-align-justify text-light"></span>
                    </a>
                </div>
                <!-- content -->
                <div class="mt-5" id="mobile_content1">
                    <div class="text-center">
                        <img src="../Images/whatsApp/WhatsApp.svg.png" alt="logo" class="logo mb-4" width="100">
                        <h6 class="text-light text-center mb-3">Simple. Secure.
                            <br> Reliable messaging.
                        </h6>
                        <p class="text-light text-center mx-4">With whatsApp, you'll get fast, simple,
                            secure messaging and calling for free,
                            available on phones all over the world.
                        </p>
                        <img src="../Images/whatsApp/feature1.jpg" alt="img" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile visibility end -->


    <!-- target -->
    <div class="modal fade" id="menu">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content bg-success opacity-100">
                <div class="modal-header border-0">
                    <img src="../Images/whatsApp/WhatsApp.svg.png" alt="logo" class="" width="50">
                    <button class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled">
                        <li class="">
                            <a href="download.php" class="text-white text-decoration-none">Download</a>
                            <hr class="text-white">
                        </li>
                        <li class="">
                            <a href="feature.php" class="text-white text-decoration-none">Features</a>
                            <hr class="text-white">
                        </li>
                        <li class="">
                            <a href="security.php" class="text-white text-decoration-none">Security</a>
                            <hr class="text-white">
                        </li>
                        <li class="">
                            <a href="help.php" class="text-white text-decoration-none">Help Center</a>
                            <hr class="text-white">
                        </li>
                    </ul>
                    <select name="" id="">
                        <option value="english">English</option>
                        <option value="nederlands">Nederlands</option>
                        <option value="hindi">Hindi</option>
                        <option value="gujarati">Gujarati</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Target Language -->
    <div class="modal" id="language">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row w-100">
                        <div class="col-3">
                            <ul class="list-unstyled">
                                <li><a href="" class="text-decoration-none text-black">azərbaycan</a></li>
                                <li><a href="" class="text-decoration-none text-black">català</a></li>
                                <li><a href="" class="text-decoration-none text-black">eesti</a></li>
                                <li><a href="" class="text-decoration-none text-black">Gaeilge</a></li>
                                <li><a href="" class="text-decoration-none text-black">latviešu</a></li>
                                <li><a href="" class="text-decoration-none text-black">Português (Brasil)</a></li>
                                <li><a href="" class="text-decoration-none text-black">slovenčina</a></li>
                                <li><a href="" class="text-decoration-none text-black">Tiếng Việt</a></li>
                                <li><a href="" class="text-decoration-none text-black">қазақ тілі</a></li>
                                <li><a href="" class="text-decoration-none text-black">українська</a></li>
                                <li><a href="" class="text-decoration-none text-black">فارسی</a></li>
                                <li><a href="" class="text-decoration-none text-black">ಕನ್ನಡ</a></li>
                                <li><a href="" class="text-decoration-none text-black">मराठी</a></li>
                                <li><a href="" class="text-decoration-none text-black">മലയാളം</a></li>
                                <li><a href="" class="text-decoration-none text-black">اردو</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul class="list-unstyled">
                                <li><a href="" class="text-decoration-none text-black">Afrikaans</a></li>
                                <li><a href="" class="text-decoration-none text-black">čeština</a></li>
                                <li><a href="" class="text-decoration-none text-black">English</a></li>
                                <li><a href="" class="text-decoration-none text-black">hrvatski</a></li>
                                <li><a href="" class="text-decoration-none text-black">lietuvių</a></li>
                                <li><a href="" class="text-decoration-none text-black">o‘zbek</a></li>
                                <li><a href="" class="text-decoration-none text-black">Português (Portugal)</a></li>
                                <li><a href="" class="text-decoration-none text-black">slovenščina</a></li>
                                <li><a href="" class="text-decoration-none text-black">Türkçe</a></li>
                                <li><a href="" class="text-decoration-none text-black">македонски</a></li>
                                <li><a href="" class="text-decoration-none text-black">বাংলা</a></li>
                                <li><a href="" class="text-decoration-none text-black">ਪੰਜਾਬੀ</a></li>
                                <li><a href="" class="text-decoration-none text-black">ไทย</a></li>
                                <li><a href="" class="text-decoration-none text-black">繁體中文（香港）</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul class="list-unstyled">
                                <li><a href="" class="text-decoration-none text-black">Bahasa Indonesia</a></li>
                                <li><a href="" class="text-decoration-none text-black">dansk</a></li>
                                <li><a href="" class="text-decoration-none text-black">español</a></li>
                                <li><a href="" class="text-decoration-none text-black">italiano</a></li>
                                <li><a href="" class="text-decoration-none text-black">magyar</a></li>
                                <li><a href="" class="text-decoration-none text-black">Filipino</a></li>
                                <li><a href="" class="text-decoration-none text-black">română</a></li>
                                <li><a href="" class="text-decoration-none text-black">suomi</a></li>
                                <li><a href="" class="text-decoration-none text-black">Ελληνικά</a></li>
                                <li><a href="" class="text-decoration-none text-black">русский</a></li>
                                <li><a href="" class="text-decoration-none text-black">עברית</a></li>
                                <li><a href="" class="text-decoration-none text-black">हिन्दी</a></li>
                                <li><a href="" class="text-decoration-none text-black">தமிழ்</a></li>
                                <li><a href="" class="text-decoration-none text-black">简体中文</a></li>
                                <li><a href="" class="text-decoration-none text-black">日本語</a></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul class="list-unstyled">
                                <li><a href="" class="text-decoration-none text-black">Melayu</a></li>
                                <li><a href="" class="text-decoration-none text-black">Deutsch</a></li>
                                <li><a href="" class="text-decoration-none text-black">français</a></li>
                                <li><a href="" class="text-decoration-none text-black">Kiswahili</a></li>
                                <li><a href="" class="text-decoration-none text-black">Nederlands</a></li>
                                <li><a href="" class="text-decoration-none text-black">polski</a></li>
                                <li><a href="" class="text-decoration-none text-black">shqip</a></li>
                                <li><a href="" class="text-decoration-none text-black">svenska</a></li>
                                <li><a href="" class="text-decoration-none text-black">български</a></li>
                                <li><a href="" class="text-decoration-none text-black">српски</a></li>
                                <li><a href="" class="text-decoration-none text-black">العربية</a></li>
                                <li><a href="" class="text-decoration-none text-black">ગુજરાતી</a></li>
                                <li><a href="" class="text-decoration-none text-black">తెలుగు</a></li>
                                <li><a href="" class="text-decoration-none text-black">繁體中文（台灣）</a></li>
                                <li><a href="" class="text-decoration-none text-black">한국어</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>