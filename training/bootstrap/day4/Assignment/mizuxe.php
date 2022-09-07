<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="/css-custom/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="mizuxe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body id="home">
    <div>
        <nav class="navbar navbar-expand-md navbar-light fixed-top py-1">
            <div class="container-fluid">
                <a href="mizure.html" class="navbar-brand">
                    <img src="../../../Images/bootstrap/mizuxe/mlogo.jpg" alt="logo" width="100" height="100">
                    <h4 class="d-inline align-middle h6">Mizure</h4>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="#home" class="nav-link"> Home </a></li>
                        <li class="nav-item"><a href="#about" class="nav-link"> About </a></li>
                        <li class="nav-item"><a href="#author" class="nav-link"> Meet the Authors </a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link"> Contact </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- showcase -->

    <section class="py-3" id="showcase">
        <div class="primary-overlay text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <h1 class="display-5 mt-4 pt-4">So What You Dream Of...</h1>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, consequatur.</p>
                        <a href="#" class="btn btn-outline-secondary btn-lg text-white">
                            <span class="fa fa-arrow-right"></span>Read More</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="../../../Images/bootstrap/mizuxe/poster.jpg" alt="poster" class="img-fluid h-50 mt-4 d-none d-lg-block">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Newsletter -->

    <section id="newsletter" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-lg mizuxebtn1" placeholder="Enter Name">
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control form-control-lg mizuxebtn1" placeholder="Enter Email">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-lg btn-block mizuxebtn"><span class="fa fa-envelope-open-text"></span>Subscribe</button>
                </div>
            </div>
        </div>
    </section>


    <!-- boxes -->

    <section class="py-5" id="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-2">
                    <div class="card text-center border-primary">
                        <div class="card-body">
                            <h3 class="text-primary">Be Better</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card text-center bg-primary text-white">
                        <div class="card-body">
                            <h3>Be Smart</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card text-center border-primary">
                        <div class="card-body">
                            <h3 class="text-primary">Be Faster</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, voluptatum.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="card text-center bg-primary text-white">
                        <div class="card-body">
                            <h3>Be Strong</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, voluptatum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About / Why section -->

    <section class="py-5 text-center bg-light" id="about">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h1 class="text-primary pb-3">
                            Why this Book?
                        </h1>
                        <p class="lead pb-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quaerat.
                        </p>
                    </div>

                    <!-- Accordion -->
                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0">
                                    <div href="#collapse1" data-bs-toggle="collapse" data-bs-parent="#accordion">
                                        <span class="fa fa-arrow-circle-down"></span>
                                        Get Inspired
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse1" class="collapse show">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ullam quaerat quisquam amet.
                                    Ullam id necessitatibus perspiciatis nostrum natus, voluptatem, quam itaque incidunt,
                                    perferendis minus assumenda consequatur aliquam. Voluptates doloremque possimus culpa
                                    nesciunt quos nam perspiciatis dolorem nemo eligendi, minus inventore id repudiandae veritatis
                                    pariatur sapiente minima, libero eum? Sapiente nisi molestiae ducimus consequuntur eveniet minus omnis
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0">
                                    <div href="#collapse2" data-bs-toggle="collapse" data-parent="#accordion">
                                        <span class="fa fa-arrow-circle-down"></span>
                                        Gain the Knowledge
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse2" class="collapse show">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ullam quaerat quisquam amet.
                                    Ullam id necessitatibus perspiciatis nostrum natus, voluptatem, quam itaque incidunt,
                                    perferendis minus assumenda consequatur aliquam. Voluptates doloremque possimus culpa
                                    nesciunt quos nam perspiciatis dolorem nemo eligendi, minus inventore id repudiandae veritatis
                                    pariatur sapiente minima, libero eum? Sapiente nisi molestiae ducimus consequuntur eveniet minus omnis
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0">
                                    <div href="#collapse3" data-bs-toggle="collapse" data-parent="#accordion">
                                        <span class="fa fa-arrow-circle-down"></span>
                                        Open your Mind
                                    </div>
                                </h5>
                            </div>

                            <div id="collapse3" class="collapse show">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ullam quaerat quisquam amet.
                                    Ullam id necessitatibus perspiciatis nostrum natus, voluptatem, quam itaque incidunt,
                                    perferendis minus assumenda consequatur aliquam. Voluptates doloremque possimus culpa
                                    nesciunt quos nam perspiciatis dolorem nemo eligendi, minus inventore id repudiandae veritatis
                                    pariatur sapiente minima, libero eum? Sapiente nisi molestiae ducimus consequuntur eveniet minus omnis
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Authors -->

    <section class="my-5 text-center" id="author">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h1 class="text-primary pb-3">
                            Meet the Authors
                        </h1>
                        <p class="lead pb-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quaerat.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body picture">
                                <img src="../../../Images/bootstrap/mizuxe/person1.jpg" alt="person1" class="img-fluid rounded-circle w-50 mb-3">
                                <h5>Susan Williams</h5>
                                <h5 class="text-muted">Lead Writer</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sunt.</p>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-facebook"></span>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body picture">
                                <img src="../../../Images/bootstrap/mizuxe/person2.jpg" alt="person1" class="img-fluid rounded-circle w-50 mb-3">
                                <h5>Grace Smith</h5>
                                <h5 class="text-muted">Co-Writer</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sunt.</p>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-facebook"></span>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body picture">
                                <img src="../../../Images/bootstrap/mizuxe/person3.jpg" alt="person1" class="img-fluid rounded-circle w-50 mb-3">
                                <h5>John Doe</h5>
                                <h5 class="text-muted">Editor</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sunt.</p>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-facebook"></span>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body picture">
                                <img src="../../../Images/bootstrap/mizuxe/person4.jpg" alt="person1" class="img-fluid rounded-circle w-50 mb-3">
                                <h5>Kevin Doe</h5>
                                <h5 class="text-muted">Designer</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sunt.</p>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-facebook"></span>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-twitter"></span>
                                        </a>
                                    </div>
                                    <div class="p-2">
                                        <a href="#">
                                            <span class="fa fa-brands fa-instagram"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="bg-light py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h4>Get in Touch</h4>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, quidem.</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text"><em class="fa fa-user"></em></span>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text"><em class="fa fa-envelope"></em></span>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text"><em class="fa fa-pencil"></em></span>
                                <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="d-grid">
                            <input type="submit" value="submit" class="btn btn-primary btn-lg">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 align-self-center">
                    <img src="../../../Images/bootstrap/mizuxe/mlogo.jpg" alt="logo" class="img-fluid rounded-circle">
                </div>
            </div>
        </div>
    </section>

    <footer id="main-footer" class="py-1 bg-primary text-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 ms-auto">
                    <p class="lead">Copyright &copy; 2017</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>