<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('./head.inc.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/client-side.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApMRmb_Fdi3xbnlz8K_P65LvNPbWXnRBc&callback=initMapInd"></script>
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

            <h1>Iroquois Park Sports Centre</h1>
            <div class="ind-stars">
                <table id="table-review">
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </td>
                        <td>4 Reviews</td>
                    </tr>
                </table>
            </div>
            <div class="results-tabular">
                <table>
                    <tr>
                        <td class="user">Mike S.</td>
                        <td class="review" rowspan="2">This arena was really nice. I enjoyed playing in it, it had great concessions and every staff member was lovely. One thing it was missing was padded seats in every pad exept pad 1. Other than this I had a great experience!</td>
                    </tr>
                    <tr>
                        <td class="user-stars"><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="user">Sarah R.</td>
                        <td class="review" rowspan="2">This arena was really nice. I enjoyed playing in it, it had great concessions and every staff member was lovely.</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="user">Gregg H.</td>
                        <td class="review" rowspan="2">This arena was really nice. I enjoyed playing in it, it had great concessions and every staff member was lovely.</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </td>
                    </tr>
                    <tr>
                        <td class="user">Jessica D.</td>
                        <td class="review" rowspan="2">This arena was really nice. I enjoyed playing in it, it had great concessions and every staff member was lovely.</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </td>
                    </tr>

                </table>

            </div>
            <div class="individual-rhs">
                <div class="individual-sample-map">
                        <!-- OLD MAP -->
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2876.700744122468!2d-78.9449637842756!3d43.86203094691915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4e1e30208ce93%3A0x9190cfdc7eb7db3!2sIroquois+Park+Sports+Centre!5e0!3m2!1sen!2sca!4v1518012741914" style="border:0" allowfullscreen></iframe>-->
                        <div id="map-ind"></div>
                </div>
                <div class="individual-sample-specs">
                    <table class="spec-table">
                        <tr>
                            <th colspan="2">Arena Information</th>
                        </tr>
                        <tr>
                            <td>Number of rinks</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>Concession</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Heated Viewing</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Wifi</td>
                            <td>NO</td>
                        </tr>
                        <tr>
                            <td>Wheelchair Accessible</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Referees Room</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Bar</td>
                            <td>YES</td>
                        </tr>
                        <tr>
                            <td>Public Skating</td>
                            <td>YES</td>
                        </tr>


                    </table>
                </div>
                <!--
                <div class="individual-sample-options">
                    <button>SUBMIT</button>
                </div>
-->
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
