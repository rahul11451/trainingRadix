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
            <a href="admin.php" class="navbar-brand">Blogen</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="admin.php" class="nav-link">Dashboard</a></li>
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
                    <h1 class="h1">Post One</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- actions -->

    <section class="py-4 mb-4 bg-light" id="action">
        <div class="container">
            <div class="row">
                <div class="col-md-3 me-auto">
                    <a href="admin.php" class="btn btn-light w-100">
                        <span class="fa fa-arrow-left"></span> Back to Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success w-100">
                        <span class="fa fa-check"></span> Save Changes
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger w-100">
                        <span class="fa fa-remove"></span> Delete Post
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- posts -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Posts</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" value="Post One">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">Category</label>
                                    <select class="form-control">
                                        <option value="">Web Development</option>
                                        <option value="">Tech Gadgets</option>
                                        <option value="">Buisness</option>
                                        <option value="">Health & Wellness</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="file">Image Upload</label>
                                    <br>
                                    <input type="file" class="form-control-file">
                                    <br>
                                    <small class="form-text text-muted">Max Size 3mb</small>
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