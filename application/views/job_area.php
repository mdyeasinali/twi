<?php include('header.php'); ?>
    <!--End pre page loader-->
    <main>
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--Page body title-->
        <div class="me-page-title">
            <!--Page Title-->
            <h1>Jobs</h1></div>
        <!--End page body title-->


        <!--Collapsibles-->
        <div class="row">


            <?php if ($jobarea){
            if ($jobarea->cat->cat_name == "Data Entry"){ ?>

            <h2 class="col s12 header">Question</h2>

            <div class="col s12">
                <form action="/admin/job_area" method="post">

                <p><?php echo $jobarea->question  ?></p>

                <div class="input-field col s6">
                    <input placeholder="Answer" id="first_name" type="text" name="answer" class="validate">
                    <label for="first_name" class="active">Answer</label>

                    <div class="input-field col s4 __web-inspector-hide-shortcut__">
                        <button class="btn waves-effect waves-light right default" type="submit" name="action">Submit <i
                                    class="material-icons right">send</i></button>
                    </div>
                </div>

                </form>

                <?php } else if ($jobarea->cat->cat_name == "Youtube") { ?>
                    <h2 class="col s12 header"><?php echo $jobarea->question  ?></h2>

                    <h5>
                        <a target="_blank" href="<?php echo "/admin/job_area/$jobarea->id"; ?>"
                           onclick="location.href='jobs_red.php';">Click Here</a> To Watch the video
                    </h5>

                <?php } else if ($jobarea->cat->cat_name == "Facebook") { ?>

                    <h5><a target="_blank" href=" <?php echo $jobarea->question?>"
                           onclick="location.href='<?php echo "/admin/job_area/$jobarea->id/?click=ture"; ?>';">Click Here</a> To Like the Facebook Page/Post</h5>

                <?php } else if ($jobarea->cat->cat_name == "Captcha") { ?>
                    <h2 class="col s12">Question</h2>
                <form action="/admin/job_area" method="post">
                    <input type="hidden" name="question" value="<?php echo $jobarea->question  ?>" />
                    <h5><?php echo $jobarea->question  ?></h5>

                    <p><?php echo $jobarea->answer  ?></p>

                    <div class="input-field col s6">
                        <input placeholder="Answer" id="first_name" type="text"  name="answer" class="validate">
                        <label for="first_name" class="active">Answer</label>

                        <div class="input-field col s4 __web-inspector-hide-shortcut__">
                            <button class="btn waves-effect waves-light right default" type="submit" name="action">Submit <i
                                        class="material-icons right">send</i></button>
                        </div>
                    </div>
                </form>

                <?php } else {
                    echo "<h5>Yet to Publish</h5>";
                }

                } ?>

            </div>
            <!--End Collapsibles-->
        </div>
        <!--End page body content-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </main>
    <!--End page body-->
<?php include('footer.php'); ?>