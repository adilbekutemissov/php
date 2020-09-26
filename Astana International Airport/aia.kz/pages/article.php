<?php @include('../server/login.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $title = "Post";
            @include('../blocks/head2.php');
            @include('../server/article.php');
        ?>
    </head>
    <body>
        <header>
            <?php
                @include('../blocks/header3.php');
                $id = $_GET['id'];
                $row = get_new_by_id($id);
            ?>
        </header>
        <main>
            <input type="checkbox" class="toggle" id="switch">
            <label class="lab" for="switch"></label>
            <div id = "wrapper">
                <?='<img alt="" src = "../public/images/'.$row["id"].'.jpg">'?>
                <h3><?=$row['title']?></h3>
                <p><?=$row['full text']?></p>
                <?php  if (isset($_SESSION['login'])) : ?>
                    <div class="contaisr">
                        <form method="POST" id="comment_form" onsubmit="return ValidateForm()">
                            <div class="form-group">
                                <label id="comment_label" for="comment_name">Name</label><span class="povinnost">*</span>
                                <input type="text" name="comment_name" id="comment_name" class="com_control" placeholder="Enter Name" required/>
                                <div class="er"></div>
                            </div>
                            <div class="form-group">
                                <label id="comment_label" for="comment_content">Comment</label><span class="povinnost">*</span>
                                <textarea name="comment_content" id="comment_content" class="com_control" placeholder="Enter Comment" rows="5" required></textarea>
                                <div class="er"></div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="comment_id" id="comment_id" value="0" />
                                <input type="hidden" name="post_id" id="post_id" value="<?=$_GET['id'];?>" />
                                <input type="submit" name="submit" id="submit" class="bbtn-info" value="Submit" />
                            </div>
                        </form>
                        <span id="comment_message"></span>
                        <div id="display_comment"></div>
                    </div>
                <?php endif ?>
            </div>
        </main>
        <footer>
            <?php @include('../blocks/footer2.php') ?>
        </footer>
        <script src="../public/js/validate5.js"></script>
        <script>
            function getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, '\\$&');
                var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                
                return decodeURIComponent(results[2].replace(/\+/g, ' '));
            }

            $(document).ready(function(){
                $('#comment_form').on('submit', function(event){
                    event.preventDefault();
                    var form_data = $(this).serialize();
                    $.ajax({
                        url:"../server/add_comment.php",
                        method:"POST",
                        data:form_data,
                        dataType:"JSON",
                        success:function(data)
                        {
                            console.trace(data);
                            if(data.error != '')
                            {
                                $('#comment_form')[0].reset();
                                $('#comment_message').html(data.error);
                                $('#comment_id').val('0');
                                load_comment();
                            }
                        }
                    })
                });

                load_comment();

                function load_comment()
                {
                    $.ajax({
                        url:"../server/fetch_comment.php?id=" + getParameterByName('id'),
                        method:"GET",
                        success:function(data)
                        {
                            console.trace(data);
                            $('#display_comment').html(data);
                        }
                    })
                }

                $(document).on('click', '.reply', function(){
                    var comment_id = $(this).attr("id");
                    $('#comment_id').val(comment_id);
                    $('#comment_name').focus();
                });  
            });
        </script>
    </body>
</html>