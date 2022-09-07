<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="whatsApp.css">
    <link rel="stylesheet" href="/css-custom/custom.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="/Nensi_radix/css-custom/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-success overflow-hidden" id="home_heading">
                <div class="ms-sm-2 ms-lg-5 ms-0 mt-sm-3 mt-2">
                    <a href="banner.php" class="text-decoration-none text-white">
                        <img src="../Images/whatsApp/WhatsApp.svg.png" alt="logo" class="logo text-white" width="50">
                    </a>
                    <a href="whatsApp_web.php" class="text-center pt-1 text-decoration-none text-white">WHATSAPP WEB</a>
                </div>
            </div>
            <div class="col-12 bg-black" id="home_body">
                <div class="card w-75 p-lg-5 p-md-2 p-0" id="qrcode">
                    <div class="card-body">
                        <div class="d-md-flex d-block">
                            <div class="">
                                <h6>To use WhatsApp on your computer:</h6>
                                <br>
                                <ol>
                                    <li>Open WhatsApp on your phone</li>
                                    <li>Tap <strong> Menu</strong> <span class="fa fa-bold fa-ellipsis-vertical"></span>
                                        or <strong> Settings</strong> <span class="fa fa-user-gear"></span> and select
                                        <strong> Linked Devices</strong>
                                    </li>
                                    <li>Point your phone to this screen to capture the code.</li>
                                </ol>
                            </div>
                            <div class="card ms-md-5 ms-4 bg-success bg-opacity-75 h-25" id="fa-qrcode">
                                <span class="fa fa-thin fa-qrcode text-white text-center m-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>