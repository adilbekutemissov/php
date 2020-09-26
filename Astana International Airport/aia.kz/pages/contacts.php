<?php @include('../server/send.php'); ?>
<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Contact Us";
            @include('../blocks/head2.php');
        ?>
    </head>
    <body>
        <header>
            <?php
                $razdel= "Contact Us";
                @include('../blocks/header2.php');
            ?>
        </header>
        <main>
            <div id="map"></div>
            <div class="contact_details_inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact_text">
                            <div class="main_title">
                                <h2>Contact Us</h2>
                                <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most</p>
                            </div>
                            <div class="contact_d_list">
                                <div class="contact_d_list_item">
                                    <a href="#">+420 776 777 899</a>
                                    <a href="#">utemissov.a@mail.kz</a>
                                </div>
                                <div class="contact_d_list_item">
                                    <p>119 Av. Kabanbay batyr <br> Astana, Kazakhstan</p>
                                </div>
                                <div class="contact_d_list_item">
                                    <p>Open hours: 24 hours <br> Everyday</p>
                                </div>
                            </div>
                            <div class="static_social">
                                <div class="main_title">
                                    <h2>Follow Us:</h2>
                                </div>
                                <ul class="soc">
                                    <li>
                                        <a href="https://vk.com/adilbekutemissov07"><img src="../public/images/vk.png" alt="" title = "Vkontakte"></a>
                                        <a href="https://www.facebook.com/AdilbekUtemissov07"><img src="../public/images/facebook-icon.png" alt="" title = "Facebook"></a>
                                        <a href="https://www.instagram.com/utemissov.a/"><img src="../public/images/instagram-icon.png" alt="" title = "Instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact_form">
                            <div class="main_title">
                                <h2>Get In Touch With Us!</h2>
                                <p>Fill out the form below to recieve a free and confidential.</p>
                            </div>
                            <form class="contact_us_form row" action="../server/send.php" method="post" id="contactForm" novalidate="novalidate">
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea class="form-control" name="message" rows="1" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" name="submit" value="submit" class="btn submit_btn2 form-control">Send Messages</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php'); ?>
        </footer>
        <?php @include('../blocks/script3.php'); ?>
    </body>
</html>