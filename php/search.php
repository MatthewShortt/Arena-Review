<?php include('./server.php'); ?>
<?php include('./results.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./head.inc.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/client-side.js"></script>
</head>

<body>
   
    <div class="container">
        <header>
            <nav>
                <div class="nav-title"><a href="./index.php"><i class="fas fa-rocket"></i>Rink Review</a></div>
                <div class="nav-review"><a href="./submission.php"><i class="fas fa-pencil-alt"></i><span class="nav-block"> Write Review</span></a></div>
                <div class="nav-favs"><a href="#"><i class="far fa-star"></i><span class="nav-block"> My Favs</span></a></div>
                <div class="nav-search"><a href="./search.php"><i class="fas fa-search"></i><span class="nav-block"> Search</span></a></div>
                <div class="nav-user"><a href="./registration.php"><i class="fas fa-user-circle"></i></a></div>
            </nav>
        </header>

        <main>

            <div class="container-form">
                <h1>Search</h1>
                <form method="post" action="results.php">

                    <input class="long-input" type="text" required placeholder="Search.." name="search"><br><br>
                    <select name="ratings">
                       <option value="default">Select a Rating</option>
                        <option value="5">5 stars</option>
                        <option value="4">4 stars</option>
                        <option value="3">3 stars</option>
                        <option value="2">2 stars</option>
                        <option value="1">1 star</option>
                        <option value="0">0 stars</option>
                    </select><br><br>
                    
                    <input id="loc-city" class="long-input" type="text" placeholder="Location (Default Current Loc.)" name="location"><br><br>
                    
                    <div class="input-with-button">
                        <div class="iwb-1"><input class="input-loc" type="text" placeholder="Location (Click Button for Current Loc)" name="search"></div>
                        <div class="iwb-2"><button class="button-loc">My Loc.</button></div>
                    </div>
                <button type="submit" name="user_search" class="button-submit">SUBMIT</button>
                </form>
                <button class="button-fill-coords">** Use Current Location **</button>
                
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
