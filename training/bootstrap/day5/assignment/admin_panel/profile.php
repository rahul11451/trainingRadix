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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0" id="nav">
        <div class="container">
            <a href="admin.php
        " class="navbar-brand">Blogen</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="admin.php
                " class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="posts.php
                " class="nav-link">Posts</a></li>
                    <li class="nav-item"><a href="categories.php
                " class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="users.php
                " class="nav-link">Users</a></li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown me-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="fa fa-user"></span>Welcome Nensi
                        </a>
                        <div class="dropdown-menu">
                            <a href="profile.php
                        " class="dropdown-item">
                                <span class="fa fa-user-circle"></span>Profile
                            </a>
                            <a href="settings.php
                        " class="dropdown-item">
                                <span class="fa fa-gear"></span>Settings
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.php
                    " class="nav-link">
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
                    <h1 class="h1"><span class="fa fa-user"></span> Edit Profile</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- actions -->

    <section class="py-4 mb-4 bg-light" id="action">
        <div class="container">
            <div class="row">
                <div class="col-md-3 me-auto">
                    <a href="admin.php
                " class="btn btn-light w-100">
                        <span class="fa fa-arrow-left"></span> Back to Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#passwordModal">
                        <span class="fa fa-lock"></span> Change Password
                    </a>
                </div>
                <br>
                <br>
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger w-100">
                        <span class="fa fa-remove"></span> Delete Acccount
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- profile -->
    <section id="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" value="Nensi Darji">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" value="nensi@gmail.com">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea name="editor1" class="form-control">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        
                                    </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center">Your Avatar</h4>
                    <img src="../../../../Images/radix.jpg" alt="img" class="d-block img-fluid mb-3">
                    <button class="btn btn-primary w-100">Edit Image</button>
                    <br>
                    <br>
                    <button class="btn btn-danger w-100">Delet Image</button>
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


    <!-- password modal -->

    <div class="modal fade" id="passwordModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Change Password</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="rePassword">RePassword</label>
                            <input type="password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-bs-dismiss="modal">Update Password</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>