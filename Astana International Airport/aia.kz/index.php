<?php @include('server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $title = "Astana International Airport";
            @include('blocks/head.php');
        ?>
    </head>
    <body>
        <header>
            <?php
                $greeting = "Astana International Airport";
                @include('blocks/header.php');
            ?>
        </header>
        <main>
            <div class="top-slide">
                <div class = "animation-table">
                    <?php @include('server/table1.php'); ?>
                    <?php @include('server/table2.php'); ?>
                </div>
            </div>
            <div class="news-slider">
                <div class = "animation-new">
                    <h1>News</h1>  
                    <div class="all">
                        <input checked type="radio" name="respond" id="desktop">
                        <article id="slider">
                            <input checked type="radio" name="slider" id="switch1">
                            <input type="radio" name="slider" id="switch2">
                            <input type="radio" name="slider" id="switch3">
                            <div id="slides">
                                <div id="overflow">
                                    <div class="image">
                                        <article>
                                            <?php @include('server/news.php'); ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <div id="controls">
                                <label for="switch1"></label>
                                <label for="switch2"></label>
                                <label for="switch3"></label>
                            </div>
                            <div id="active">
                                <label for="switch1"></label>
                                <label for="switch2"></label>
                                <label for="switch3"></label>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <?php @include('blocks/footer.php'); ?>
        </footer>
        <?php @include('blocks/script.php'); ?>
    </body>
</html>