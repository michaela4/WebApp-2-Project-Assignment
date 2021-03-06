<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Home - deCoders</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap4.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- Temporary fix for navbar responsiveness -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

    @include('layoutProject.nav')

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Share your Thoughts! <small>Explore with Us!</small></h1>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top img-fluid" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-block">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by <a href="#">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top img-fluid" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-block">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by <a href="#">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top img-fluid" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-block">
                        <h2 class="card-title">Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a href="#" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 1, 2017 by <a href="#">Start Bootstrap</a>
                    </div>
                </div>

                <!-- Pagination -->
                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item"><a class="page-link" href="#">&larr; Older</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">Newer &rarr;</a></li>
                </ul>

            </div>

            @include('layoutProject.side')

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    @include('layoutProject.footer')


</body>

</html>
