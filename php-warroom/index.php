<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP Warzone</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
    </style>
</head>
<body>
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
            <main role="main" class="col-md-9 ml-sm-auto col-lg-9 px-4">
                <div class="container mt-4">
                    <div class="left-panel">
                        <h1>Welcome to PHP Warzone</h1>
                    </div>
                    <div id="content">
                        
                    </div>
                </div>
            </main>
        </div>
    </div>

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <script>
        
        function loadContent(url) {
            $('#content').load(url);
            return false;
        }
    </script>
</body>
</html>
