<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Matthew Shortt">
    <meta name="description" content="Website that allows users to contribute and view reviews on sports arenas.">
    <meta name="viewport" content="width=device-width; initial-scale=1.0;" />

    <title>Arena Review</title>


    <!--     favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicon/favicon.ico">


    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/client-side.js"></script>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="nav-title"><a href="./index.html"><i class="fas fa-rocket"></i>Arena Review</a></div>
                <div class="nav-review"><a href="./submission.html"><i class="fas fa-pencil-alt"></i><span class="nav-block"> Write Review</span></a></div>
                <div class="nav-favs"><a href="#"><i class="far fa-star"></i><span class="nav-block"> My Favs</span></a></div>
                <div class="nav-search"><a href="./search.html"><i class="fas fa-search"></i><span class="nav-block"> Search</span></a></div>
                <div class="nav-user"><a href="#"><i class="fas fa-user-circle"></i></a></div>
            </nav>
        </header>

        <main>


            <div class="container-form">
                <h1>Write a Review</h1>
                <form>
                    <input class="long-input" type="text" required name="arena-name" placeholder="arena name"><br><br> <!-- --> 
                    <label for="review-description">Description of the Arena:</label><br>
                    <textarea name="comments" required id="review-description"></textarea><br><br>  <!-- --> 
                    <input id="submit-lat" class="name" type="number" required min="-90" max="90" step="0.00000000000001" name="latitude" placeholder="latitude*">  <!-- --> 
                    <input id="submit-long" class="name" type="number" required min="-180" max="180" step="0.00000000000001" name="longitude" placeholder="longitude*"><br><br>  <!-- --> 
                    <label for="img-up">Upload an Image:</label><br>
                    <input class="file-up" id="img-up" type="file" name="image"><br><br>


                <button class="button-submit">SUBMIT</button>
                </form>
                <button class="button-fill-coords">** Use Location for Lat/Long **</button>
            </div>



        </main>

        <footer>
            <div class="foot-left">
                <p>&copy; 2018</p>
            </div>
            <div class="foot-center">
                <p><a href="">Site map</a></p>
            </div>
            <div class="foot-right">
                <p>
                    <a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a>
                </p>

            </div>
        </footer>
    </div>
</body>
