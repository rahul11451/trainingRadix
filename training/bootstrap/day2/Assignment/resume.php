<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        img {
            width: 100%;
            margin-bottom: 50px;
        }

        @media (max-width: 576px) {
            #projects .nen_li {
                display: none;
            }

            #projects video {
                width: 70% !important;
            }
        }

        @media (max-width:1200px) {
            .card-body h6 {
                font-size: 20px;
            }
        }

        @media (max-width:885px) {
            .card-body h6 {
                font-size: 15px;
            }

            #projects video {
                width: 100% !important;
            }
        }
    </style>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="font-family: 'Courier New', Courier, monospace;">
    <div class="overflow-hidden container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl fixed-top navbar-dark bg-success d-sm-block d-md-none">
                    <div class="container d-flex justify-content-center">
                        <button class="navbar-toggler" type="button" data-bs-target="#menu" data-bs-toggle="collapse"
                            aria-label="menu" aria-controls="navbarText" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link" href="#about">About </a></li>
                                <li class="nav-item"><a class="nav-link" href="#objective">Objective</a></li>
                                <li class="nav-item"><a class="nav-link" href="#eduction">Education </a></li>
                                <li class="nav-item"><a class="nav-link" href="#projects">Experience </a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="bg-opacity-100 border col-3 h-100 card position-fixed d-none d-md-block bg-success">
                <div class="justify-content-center">
                    <div class="card-body">
                        <img src="../../../css/Module 4/Assignment/nensi.jpeg" alt="nensi_img"
                            class="border rounded-circle border-3">
                        <h6 class="text-center">
                            <a class="text-decoration-none text-light" href="#about">About</a>
                        </h6>
                        <h6 class="text-center">
                            <a class="text-decoration-none text-light" href="#objective">Objective</a>
                        </h6>
                        <h6 class="text-center">
                            <a class="text-decoration-none text-light" href="#eduction">Education</a>
                        </h6>
                        <h6 class="text-center">
                            <a class="text-decoration-none text-light" href="#projects">Experience</a>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 ms-sm-auto g-sm-2 col-lg-9 ms-lg-auto col-md-9 ms-md-auto">
                <div class="pt-4 pb-4" id="about">
                    <div class="pt-1 pb-1 mt-5 text-center bg-opacity-50 bg-secondary mt-md-0 text-success">
                        <h1>Nensi Sanjaykumar Darji</h1>
                    </div>
                    <div class="mt-5 detail">
                        <h3 class="text-decoration-underline text-success ps-1 pb-md-5 pb-sm-0">About:</h3>
                        <ul class="mb-5 list-unstyled ms-md-5 ms-sm-0">
                            <li class="p-2"><span class="text-black fw-bold text-decoration-underline">Address:
                                </span>Opp. Rajakawada post office, near Loteswar Mahadev
                                Temple,
                                Patan, Gujarat.</li>
                            <li class="p-2"><span class="text-black fw-bold text-decoration-underline">Mobile:
                                </span>+91 7046379223</li>
                            <li class="p-2"><span class="text-black fw-bold text-decoration-underline">Email: </span><a
                                    href="ndnensidarji@gmail.com" class="text-decoration-none text-start text-dark">
                                    ndnensidarji@gmail.com</a></li>
                            <li class="p-2"><span class="text-black fw-bold text-decoration-underline">LinkedIn:
                                </span><a href="https://www.linkedin.com/in/nensi-darji-96571616a"
                                    class="text-decoration-none text-start text-dark">
                                    https://www.linkedin.com/in/nensi</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pt-5 pb-4 mt-5 detail" id="objective">
                    <h3 class="mt-4 text-decoration-underline text-success ps-1 pb-md-5 pb-sm-0">
                        Objective:
                    </h3>
                    <p class="ms-md-5 ms-sm-0">To work in an environment which encourage me to succeed and grow
                        professionally
                        <br> where i can utilize my skills and knowledge appropriately.
                    </p>
                </div>

                <div id="eduction" class="pt-4 pb-4 mt-5 detail table-responsive-sm">
                    <h3 class="mt-5 text-decoration-underline text-success ps-1 pb-md-5 pb-sm-0">Education
                    </h3>
                    <table class="table ms-sm-0 ms-md-5 table-success table-responsive-lg table-striped w-50 desc"
                        style="font-size: 18px;">
                        <caption>Education information</caption>
                        <thead>
                            <tr>
                                <th class="">Course</th>
                                <th class="">percentages</th>
                                <th class="">school/college</th>
                                <th class="">passing year</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Pursuing BE in CSE </td>
                            <td>77.6%</td>
                            <td>Government Engineering College
                                Patan</td>
                            <td>2021</td>
                        </tr>
                        <tr>
                            <td>HSC</td>
                            <td>72%</td>
                            <td>B.M. High Secondary School,
                                Gujarat Board</td>
                            <td>2018</td>
                        </tr>
                        <tr>
                            <td>SSC</td>
                            <td>81%</td>
                            <td>B.M. High School, Gujarat Board</td>
                            <td>2016</td>
                        </tr>
                    </table>
                </div>
                <div id="projects" class="pt-4 pb-4 detail">
                    <h3 class="mt-5 text-decoration-underline text-success ps-1 pb-md-5 pb-sm-0">
                        Experience:
                    </h3>
                    <ul class="me-5 m-sm-0">
                        <li><strong>foodieAutomationSystem - restaurant table
                                reservation </strong></li>
                        <hr>
                        <ul>
                            <li class="nen_li">I have made the website for table reservation for lunch or dinner. By
                                help of
                                this website you can save your waiting time for table. I have made this website at
                                local host using
                                HTML, CSS, JAVASCRIPT, PHP and DATABASE (PhpMyAdmin).</li>
                            <br>
                            <video class="w-100" height="300vh" controls>
                                <source src="../../../css/Module 4/Assignment/project.mp4" type="video/mp4">
                                <track src="../../../css/Module 4/Assignment/project_no.vtt" kind="subtitles"
                                    srclang="no" label="English">
                            </video>
                        </ul>
                        <br>
                        <br>
                        <li><strong>healthcare_website - An appointment website</strong></li>
                        <hr>
                        <ul>
                            <li class="nen_li">This project was a group project which was
                                made in design engineering subject. I was a leader of this group.
                                The main aim of this website is to not wait for check-up and
                                save the time.
                                My group partner and I have made this website using HTML CSS and DATABASE at
                                local .host
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>