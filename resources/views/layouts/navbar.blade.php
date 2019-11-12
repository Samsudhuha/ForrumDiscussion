<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<title>ForumDiscussion</title>
</head> 
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">ForumDiscussin</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <nav class="nav nav-pills">
                <a href="#" class="nav-item nav-link">
                    <i class="fa fa-home"></i> Home
                </a>
                <a href="#" class="nav-item nav-link">
                    <i class="fa fa-user"></i> Profile
                </a>
                <a href="#" class="nav-item nav-link">
                    <i class="fa fa-envelope"></i> Messages
                </a>
            </nav>
            <form class="form-inline ml-auto" action="/content" method="POST">
                @csrf
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light" disabled>Search</button>
            </form>
        </div>
    </nav>
    <main style="background-color:#336b87">
            @yield('kontenku')
    </main>
</body>
</html>                                                        