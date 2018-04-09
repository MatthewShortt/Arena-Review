<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Matthew Shortt">
    <meta name="description" content="Website that allows users to contribute and view reviews on sports arenas.">
    <meta name="viewport" content="width=device-width; initial-scale=1.0;" />

    <title>Rink Review</title>


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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApMRmb_Fdi3xbnlz8K_P65LvNPbWXnRBc&callback=initMap"></script>

</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="nav-title"><a href="./index.html"><i class="fas fa-rocket"></i>Rink Review</a></div>
                <div class="nav-review"><a href="./submission.html"><i class="fas fa-pencil-alt"></i><span class="nav-block"> Write Review</span></a></div>
                <div class="nav-favs"><a href="#"><i class="far fa-star"></i><span class="nav-block"> My Favs</span></a></div>
                <div class="nav-search"><a href="./search.html"><i class="fas fa-search"></i><span class="nav-block"> Search</span></a></div>
                <div class="nav-user"><a href="./registration.html"><i class="fas fa-user-circle"></i></a></div>
            </nav>
        </header>

        <main>

            <h1>Showing Results near Whitby, Ontario</h1>
            <div class="results-tabular">
                <table>
                    <tr>
                        <td rowspan="2"><a href="./individual_sample.html"><img src="../images/Iroquois-Park-Sports-Centre.jpg" alt="Photo of Iroquois Sports Park Centre "></a></td>
                        <td><a href="./individual_sample.html">Iroquois Park Sports Centre</a></td>
                        <td>500 Victoria St W, Whitby, ON L1N 9G4</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </td>
                        <td><a href="tel:905-668-7765">(905) 668-7765</a></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><a href="./individual_sample.html"><img src="../images/McKinney-Centre.jpg" alt="Photo of McKinney Cnetre"></a></td>
                        <td><a href="./individual_sample.html">McKinney Centre</a></td>
                        <td>222 McKinney Dr, Whitby, ON L1R 3M3</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </td>
                        <td><a href="tel:905-655-2203">(905) 655-2203</a></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><a href="./individual_sample.html"><img src="../images/Luther-Vipond.jpg" alt="Luther Vipond Memorial Arena"></a></td>
                        <td><a href="./individual_sample.html">Luther Vipond Memorial Arena</a></td>
                        <td>67 Winchester Rd, Whitby, ON L1M 1B4</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </td>
                        <td><a href="tel:905-655-4571">(905) 655-4571</a></td>
                    </tr>
                </table>

            </div>
            <div class="results-map">
<!--                <iframe src="https://www.google.com/maps/d/embed?mid=1JQpnZ9hyoDzQK8xdjcrlB6iX_GxECLUQ&hl=en"></iframe>-->
                   <div id="map"></div>
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
