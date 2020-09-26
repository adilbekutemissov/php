<?php @include('server/login.php'); ?>
<div class = "header">
    <div class="header-container">
        <div class="logo">
            <a href="/~utemiadi/aia.kz"><img src="public/images/logo1.png" alt="" title = "A I A"></a>
        </div>
        <input type="checkbox" id="menu-checkbox">
        <nav>
            <label for="menu-checkbox" class="toggle-button" data-open="MENU" data-close="CLOSE" onclick></label>
            <ul class = "main-menu">
                <li>
                    <a href="#">Flights</a>
                    <ul>
                        <li><a href="/~utemiadi/aia.kz/pages/departures.php">Departures</a></li>
                        <li><a href="/~utemiadi/aia.kz/pages/arrivals.php">Arrivals</a></li>
                        <li><a href="/~utemiadi/aia.kz/pages/connections.php">Connections</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                    <ul>
                        <li>
                            <a href="/~utemiadi/aia.kz/pages/parking.php">Parking</a>
                        </li>
                        <li>
                            <a href="#">Baggage</a>
                            <ul>
                                <li><a href="/~utemiadi/aia.kz/pages/baggage-wrapping.php">Baggage Wrapping</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/baggage-storage.php">Baggage Storage</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Waiting</a>
                            <ul>
                                <li><a href="/~utemiadi/aia.kz/pages/wifi.php">Wi-Fi</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/vip-lounges.php">VIP lounges</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/business-lounges.php">Business lounges</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/mother&child-room.php">Mother and child room</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/duty-free.php">Duty Free</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/stores.php">Stores</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/food&beverages.php">Food and beverages</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Finances</a>
                            <ul>
                                <li><a href="/~utemiadi/aia.kz/pages/tax-free.php">Tax Free</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/banks.php">Banks</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/atms.php">ATMs</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/currency-exchange.php">Сurrency exchange</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Transport options</a>
                            <ul>
                                <li><a href="/~utemiadi/aia.kz/pages/air&train-tickets.php">Air and train tickets</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/car-rental.php">Car rental</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/taxi.php">Taxi</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.booking.com/index.html?aid=376376;label=bookings-name-x9XjJRNqhtTGZ30YXWfPUQS267724389816:pl:ta:p1:p22,109,000:ac:ap1t1:neg:fi:tikwd-65526620:lp9062893:li:dec:dm;ws=&gclid=EAIaIQobChMI3oD627TD3gIVEQ8YCh3ZLgXCEAAYASAAEgLnyvD_BwE">Hotels</a></li>
                        <li><a href="#">Assistance</a>
                            <ul>
                                <li><a href="/~utemiadi/aia.kz/pages/lost&found-office.php">Lost and Found office</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/medical-posts.php">Medical posts</a></li>
                                <li><a href="/~utemiadi/aia.kz/pages/passengers-with-disabilites.php">Passengers with disabilities</a></li>
                            </ul>
                        </li>
                    </ul>              
                </li>
                <li><a href="/~utemiadi/aia.kz/pages/airport-map.php">Airport Map</a></li>
                <li><a href="#">Directions</a>
                    <ul>
                        <li><a href="/~utemiadi/aia.kz/pages/directions-to-airport.php">To the airport </a></li>
                        <li><a href="/~utemiadi/aia.kz/pages/directions-from-airport.php">From the airport</a></li>
                        <li><a href="/~utemiadi/aia.kz/pages/directions-between-airports.php">Between airports</a></li>
                    </ul>
                </li>
                <li><a href="#">Online</a>
                    <ul>
                        <li><a href="/~utemiadi/aia.kz/pages/buy-ticket-online.php">Online buy ticket</a></li>
                        <li><a href="/~utemiadi/aia.kz/pages/online-check-in.php">Online check-in</a></li>
                    </ul>
                </li>
                <li>
                    <?php  if (isset($_SESSION['login'])) : ?>
                        <li>
                            <a>
                                <div class="user-logo">
                                    <i class="fas fa-user"></i>
                                </div>
                            </a>
                            <ul class="logo">
                                <li><a href="pages/user.php" class="regButton"><?php echo $_SESSION['login']; ?></a></li>
                                <li><a href="/~utemiadi/aia.kz/?logout" class="regButton">Log Out</a>
                            </ul>
                        </li>
                    <?php else: ?>
                        <a href="#login" class="regButton">Log In</a>
                        <a id="login" href="/~utemiadi/aia.kz" class="popup"></a>
                        <div class="popup">
                            <a class="close x" href="#">X</a>
                            <form method="post" onsubmit="return Validate()">
                                <div class="form">
                                    <h2>Authorization</h2>
                                    <?php include('server/error.php'); ?>
                                    <label for="log">Login</label>
                                    <input type="text" placeholder="Login" id="log" name="log" class="input" value="<?php echo $login; ?>" required/>
                                    <p class="er"></p>
                                    <label for="password">Password</label>
                                    <input type="password" placeholder="Password" id="password" name="password" class="input" required/>
                                    <p class="er"></p>
                                    <button type="submit" class="button" name="login_user">Log In</button>
                                    <input class="button2" value="Registration" onclick="window.location.href='/~utemiadi/aia.kz/pages/registration.php'" />
                                </div>
                            </form>
                        </div>
                    <?php endif ?>
                </li>
            </ul>
        </nav>
    </div>
    <div class = "animated wow bounceInLeft">
        <div class ="greeting"><?=$greeting?></div>
    </div>
    <script src="public/js/validate2.js"></script>
    <script> function show(state) { document.getElementById('window').style.display = state; document.getElementById('gray').style.display = state; } </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script> $(window).scroll(function() { if ($(this).scrollTop() > 1){ $('.header-container').addClass("sticky"); } else{ $('.header-container').removeClass("sticky"); } });; </script>
</div>