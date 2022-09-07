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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark p-0" id="nav">
        <div class="container">
            <a href="admin.php" class="navbar-brand">Blogen</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="admin.php" class="nav-link active">Dashboard</a></li>
                    <li class="nav-item"><a href="posts.php" class="nav-link">Posts</a></li>
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
                    <h1 class="h1"><span class="fa fa-gear"></span> Dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- actions -->

    <section class="py-4 mb-4 bg-light" id="action">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addPostModal">
                        <span class="fa fa-plus"></span> Add Post
                    </a>
                </div>
                <br>
                <br>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                        <span class="fa fa-plus"></span> Add Category
                    </a>
                </div>
                <br>
                <br>
                <div class="col-md-3">
                    <a href="#" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <span class="fa fa-plus"></span> Add User
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- posts -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
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
                    </div>
                </div>
                <div class="col-md-3 mt-2" id="icon">
                    <div class="card text-center bg-primary text-white mb-3">
                        <div class="card-body">
                            <h5>Posts</h5>
                            <h1 class="display-6">
                                <span class="fa fa-pencil"></span> 6
                            </h1>
                            <a href="posts.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>

                    <div class="card text-center bg-success text-white mb-3">
                        <div class="card-body">
                            <h5>Categories</h5>
                            <h1 class="display-6">
                                <span class="fa fa-folder-open"></span> 4
                            </h1>
                            <a href="categories.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>

                    <div class="card text-center bg-warning text-white mb-3">
                        <div class="card-body">
                            <h5>Users</h5>
                            <h1 class="display-6">
                                <span class="fa fa-user"></span> 2
                            </h1>
                            <a href="users.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>
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

    <!-- post modal -->

    <div class="modal fade" id="addPostModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Add Post</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control">
                                <option value="">Web Development</option>
                                <option value="">Tech Gadgets</option>
                                <option value="">Buisness</option>
                                <option value="">Health & Wellness</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file">Image Upload</label>
                            <br>
                            <input type="file" class="form-control-file">
                            <br>
                            <small class="form-text text-muted">Max Size 3mb</small>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="editor1" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" data-bs-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Category modal -->

    <div class="modal fade" id="addCategoryModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Add Category</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-success" data-bs-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- User modal -->

    <div class="modal fade" id="addUserModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title">Add User</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control">
                        </div>
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
                    <button class="btn btn-warning" data-bs-dismiss="modal">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>