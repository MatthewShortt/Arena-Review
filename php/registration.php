<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./head.inc.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/validation.js"></script>
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
                <h1>Register New Account</h1>
                <form onsubmit="return validate(this)" id="form_register">
                    <input class="name" type="text" name="firstname" placeholder="first name*">
                    <input class="name" type="text" name="lastname" placeholder="last name*">
                    <input class="name" type="text" name="username" placeholder="username*">
                    <input class="name" type="password" name="userpw" placeholder="password*">
                    <input class="long-input" name="useremail" placeholder="email*"> <!-- took out type email to test regex -->
                    <input class="long-input" type="date" name="dob">


                    <label for="male">Male<input class="gender" type="radio" name="gender" id="male" value="male"></label>
                    
                    <label for="female">Female</label>
                    <input class="gender" type="radio" name="gender" id="female" value="female">
                    <label for="other">Other</label>
                    <input class="gender" type="radio" name="gender" id="other" value="other">


                    <button id="button-register" class="button-submit">SUBMIT</button>
                </form>
                
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
