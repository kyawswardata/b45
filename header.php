<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFU</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.css'/>
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@200;400&display=swap" rel="stylesheet"> 
    <style>
        h1,h2,h3,h4,h5{
            font-family: 'Grenze Gotisch', cursive;
        }
        p{
            font-family: 'Grenze Gotisch', cursive;
            font-weight:200;
            font-size:16pt;
        }
        .fstyle{
            font-family: 'Grenze Gotisch', cursive;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CSR</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>