<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP Warzone</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        .top-navbar {
            background-color: #023020;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }
        .top-navbar .nav-link {
            color: white;
        }
        .left-panel {
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .navbar {
            background-color: #023020;
            height: 100%;

        }
        .nav-item {
            margin-bottom: 10px;
        }
        .nav-link {
            background-color: #023020;
            color: white;
            border: none;
            width: 100%;
            text-align: center;
        }
        .nav-link:hover {
            background-color: orange;
            color: white;
        }
        .search-container {
            text-align: center;
            margin-top: 50px;
        }
        .search-icon {
            position: relative;
            top: 7px;
            left: -30px;
        }
        .search-result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg top-navbar">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/php-warroom/reflected-xss/1.php">1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">4</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 d-none d-md-block left-panel">
                <div class="navbar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link btn btn-block" href="/php-warroom/reflected-xss/1.php">Reflected XSS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-block" href="b.php">DOM based XSS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-block" href="c.php">Stored XSS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-block" href="d.php">SQL Injection</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container search-container">
                <form class="form-inline" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit"><i class="fas fa-search search-icon"></i></button>
                        </div>
                    </div>
                </form>
                <?php 
                    if(isset($_GET['search'])){
                        $search_query = $_GET['search'];
                        echo "<div class='search-result'><p>Your search for '{$search_query}' wasn't found</p></div>";
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
                    