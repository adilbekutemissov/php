<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Online buy ticket";
            @include('../blocks/head2.php');
        ?>
    </head>
    <body>
        <header>
            <?php
                $greeting = "Online buy ticket";
                @include('../blocks/header3.php');
            ?>
        </header>
        <main>
            <form method="post" onsubmit="return ValidateForm()">
                <div id="booking" class="section">
                    <div class="section-center">
                        <div class="continer">
                            <div class="row">
                                <div class="booking-form">
                                        <?php 
                                            @include('../server/buy.php');
                                            @include('../server/buyticket.php');
                                            @include('../server/errors.php');
                                            $id=$_GET['id'];
                                            $row = get_flight_by_id($id);
                                            $user=get_user();
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="departure_date" class="form-label">Departure</label>
                                                        <span class="povinnost"> *</span>
                                                    </div>
                                                    <input class="form-control" name="firstname" id="firstname" type="text" value="<?=$user['firstname']?>" required />
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="lastname" class="form-label">Last Name</label>
                                                        <span class="povinnost"> *</span>
                                                    </div>
                                                    <input class="form-control" name="lastname" id="lastname" type="text" value="<?=$user['lastname']?>" required />
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="departure_date" class="form-label">Departure</label>
                                                        <span class="povinnost"> *</span>
                                                    </div>
                                                    <input class="form-control" id="departure_date" name="departure_date" type="date" value="<?=$row['departure date']?>" required/>
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="arrival_date" class="form-label">Arrival</label>
                                                        <span class="povinnost"> *</span>
                                                    </div>
                                                    <input class="form-control" id="arrival_date" name="arrival_date" type="date" value="<?=$row['arrival date']?>" required />
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="of" class="form-label">Flying from</label>
                                                        <span class="povinnost"> *</span>
                                                    </div>
                                                    <input class="form-control" id="of" name="of" type="text" value="<?=$row['of']?>" required />
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="toward" class="form-label">Flying to</label>
                                                        <span class="povinnost"> *</span>
                                                    </div>
                                                    <input class="form-control" id="toward" name="toward" type="text" value="<?=$row['toward']?>" required />
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="departure_time" class="form-label">Departure Time</label>
                                                        <span class="povinnost"> *</span>
                                                    </div>
                                                    <input class="form-control" id="departure_time" name="departure time" type="time" value="<?=$row['departure time']?>" required >
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="arrival_time" class="form-label">Arrival Time</label>
                                                        <span class="povinnost"> *</span>
                                                    </div>
                                                    <input class="form-control" id="arrival_time" name="arrival time" type="time" value="<?=$row['arrival time']?>" required />
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="travel class" class="form-label">Travel Class</label>
                                                    <select class="form-control" >
                                                        <option>Economy class</option>
                                                        <option>Business class</option>
                                                        <option>First class</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="pov">
                                                        <label for="flight" class="form-label">Flight</label>
                                                        <span class="povinnost">*</span>
                                                    </div>
                                                    <input class="form-control" id="flight" name="flight" type="text" value="<?=$row['flight']?>" required />
                                                    <p class="er"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buy">
                                            <div class="price">
                                                <h3><?=$row['price']?>$</h3>
                                            </div>
                                            <button type="submit" class="submit-btn" name="buy">Buy</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
    <?php @include('../blocks/script4.php'); ?>
    <script src="../public/js/validate4.js"></script>
    <script> 
if ( window.history.replaceState ) { 
window.history.replaceState( null, null, window.location.href ); 
} 
</script>
    </body>
</html>