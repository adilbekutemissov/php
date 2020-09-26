<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Registration";
            @include('../blocks/head2.php');
            ?>
    </head>
    <body>
        <header>
            <?php
                $greeting = "Registration";
                @include('../blocks/header3.php');
                ?>
        </header>
        <main>
            <form method="post" onsubmit="return ValidateForm()">
                <div class="registration">
                    <div class="form-registration">
                        <?php @include('../server/server.php'); ?>
                        <h2>Registration</h2>
                        <?php @include('../server/errors.php'); ?>
                        <label for="firstname">Firstname </label><span class="povinnost">*</span>
                        <input type="text" placeholder="Firstname" id="firstname" name="firstname" class="input" value="<?php echo $firstname; ?>" required/>
                        <p class="er"></p>
                        <label for="lastname">Lastname </label><span class="povinnost">*</span>
                        <input type="text" placeholder="Lastname" id="lastname" name="lastname" class="input" value="<?php echo $lastname; ?>" required/>
                        <p class="er"></p>
                        <label for="login">Login </label><span class="povinnost">*</span>
                        <input type="text" placeholder="Login" id="login" name="login" class="input" value="<?php echo $login; ?>" required/>
                        <p class="er"></p>
                        <label for="email">Email </label><span class="povinnost">*</span>
                        <input type="text" placeholder="Email" id="email" name="email" class="input" value="<?php echo $email; ?>" required/>
                        <p class="er"></p>
                        <label for="password1">Password </label><span class="povinnost">*</span>
                        <input type="password" placeholder="Password" id="password1" name="password1" class="input" required/>
                        <p class="er"></p>
                        <label for="password2">Confirm Password </label><span class="povinnost">*</span>
                        <input type="password" placeholder="Confirm password" id="password2" name="password2" class="input" required/>
                        <p class="er"></p>
                        <p><span class="povinnost">* </span> - is required field</p>  
                        <button type="submit" id="register" name="register" class="button3">Sign Up</button>
                    </div>
                </div>
            </form>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
    <?php @include('../blocks/script4.php'); ?>
    <script>if ( window.history.replaceState ) { 
window.history.replaceState( null, null, window.location.href ); 
} </script>
    <script src="../public/js/validate.js"></script>
    </body>
</html>