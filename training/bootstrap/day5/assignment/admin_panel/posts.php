<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="/css-custom/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0" id="nav" aria-label="navbar">
        <div class="container">
            <a href="admin.php" class="navbar-brand">Blogen</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="admin.php" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="posts.php" class="nav-link active">Posts</a></li>
                    <li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="users.php" class="nav-link">Users</a></li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown me-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="fa fa-user"></span>Welcome Nensi
                        </a>
                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item">
                                <span class="fa fa-user-circle"></span>Profile
                            </a>
                            <a href="settings.php" class="dropdown-item">
                                <span class="fa fa-gear"></span>Settings
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">
                            <span class="fa fa-user-times"></span>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-2 bg-primary text-white" id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="h1"><span class="fa fa-pencil"></span> Posts</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- actions -->

    <section class="py-4 mb-4 bg-light" id="action">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ms-auto">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-text">
                            <button class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- posts -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Posts</h4>
                        </div>
                        <table class="table table-striped">
                            <caption>table</caption>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Data Posted</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Post One</td>
                                    <td>Web Development</td>
                                    <td>July 12, 2021</td>
                                    <td><a href="detais.php" class="btn btn-secondary">
                                            <span class="fa fa-angle-double-right"></span> Details
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Post Two</td>
                                    <td>Tech Gadgets</td>
                                    <td>July 13, 2021</td>
                                    <td><a href="detais.php" class="btn btn-secondary">
                                            <span class="fa fa-angle-double-right"></span> Details
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Post Three</td>
                                    <td>Web Developmen</td>
                                    <td>July 14, 2021</td>
                                    <td><a href="detais.php" class="btn btn-secondary">
                                            <span class="fa fa-angle-double-right"></span> Details
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Post Four</td>
                                    <td>Buisness</td>
                                    <td>July 15, 2021</td>
                                    <td><a href="detais.php" class="btn btn-secondary">
                                            <span class="fa fa-angle-double-right"></span> Details
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Post FIve</td>
                                    <td>Web Development</td>
                                    <td>July 16, 2021</td>
                                    <td><a href="detais.php" class="btn btn-secondary">
                                            <span class="fa fa-angle-double-right"></span> Details
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Post Six</td>
                                    <td>Health & Wellness</td>
                                    <td>July 17, 2021</td>
                                    <td><a href="detais.php" class="btn btn-secondary"> Details
                                            <span class="fa fa-angle-double-right"></span>
                                        </a></td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="ms-2" aria-label="pagination">
                            <ul class="pagination">
                                <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                                <li class="page-item"><a href="#" class="page-link active">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->

    <footer class="bg-dark text-white mt-3 p-3" id="main-footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">Copyright &copy; 2017 Blogen</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>