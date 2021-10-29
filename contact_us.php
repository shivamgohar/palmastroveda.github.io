<?php include 'header.php';?>


















<!-- Header End -->
<!-- breadcrumb -->
<section class="main_breadcrumb">
    <div class="container-fluid">
        <div class="row">
            <div class="breadcrumb-content">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div style="color:white;font-size:40px;"class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <!--Date.. Easily adjustable with javascript Array-->
                    <p><span id="date_time"></span></p>
                    <script type="text/javascript">
                    window.onload = date_time('date_time');
                    </script>
                    <!--this MUST be included for Date-->
                    <!--Time in 12 hour format-->
                    <p><span id="dT">
                            <script language="JavaScript">
                            window.onload = dT('dT');
                            </script>
                        </span></p>

                </div>
            </div>
        </div>
    </div>
</section>
<div id="content" class="contact_page">
    <!-- Our Services -->
    <div id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="block-sm login_box">
                        <h3>Contact</h3>
                        <p></p>
                        <!-- <div class="comments-form-wrapper clearfix comment-respond">
                            <form class="comment-form" method="POST" id="postComment" action="">
                                <div class="field">
                                    <label for="name">Name<em class="required">*</em></label>
                                    <input type="text" class="input-text" title="Name" value="" id="user"
                                        name="user_name">
                                </div>
                                <div class="field">
                                    <label for="email">Email<em class="required">*</em></label>
                                    <input type="text" class="input-text validate-email" title="Email" value=""
                                        id="email" name="user_email">
                                </div>
                                <div class="clear"></div>
                                <div class="field aw-blog-comment-area">
                                    <label for="comment">Your Message<em class="required">*</em></label>
                                    <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment"
                                        name="comment"></textarea>
                                </div>
                                <div style="width:96%" class="button-set">
                                    <input type="hidden" value="1" name="blog_id">
                                    <button type="submit" class="btn submit"><span><span>Add
                                                Comment</span></span></button>
                                </div>
                            </form>
                        </div> -->
                        <div id="query" class="block-sm login_box">
                            <h3>Please Provide Details</h3>


                            <div class="comments-form-wrapper clearfix comment-respond">




                                <form class="comment-form" method="POST" id="postComment" action="sendmail.php">
                                    <div class="field">
                                        <label for="name">Name<em class="required">*</em></label>
                                        <input type="text" name="name" id="name" required>
                                    </div>

                                    <div class="field">
                                        <label for="name">Email<em class="required">*</em></label>
                                        <!-- <input type="text" class="input-text" title="Email" value="" id="email"
                                            name="email"> -->
                                        <input type="email" id="email" pattern="+@+.com" size="30" required>
                                    </div>

                                    <div class="field">
                                        <label for="name">Phone no.<em class="required">*</em></label>
                                        <!-- <input type="tel" class="input-tel" title="tel" value="" id="tel"
                                            name="tel"> -->
                                        <input type="tel" id="phone" name="phone" minlength="10" maxlength="12"
                                            required>
                                    </div>
                                    <label for="Date">Date of Birth<em class="required">*</em></label>
                                    <div class="field">
                                        <input type="date" id="start" name="date" value="1980-07-22" min="1950-01-01"
                                            max="2020-12-31" required>
                                    </div>

                                    <div class="field">
                                        <label for="email">Place of Birth<em class="required">*</em></label>
                                        <input type="text" class="input-text validate-email" title="Place" id="place"
                                            name="placeofbirth" required>
                                    </div>

                                    <div class="field">
                                        <label for="email">Time of Birth<em class="required">*</em></label>
                                        <input type="time" id="appt" name="time" min="00:01" max="23:59" required>
                                    </div>

                                    <div class="clear"></div>
                                    <div class="field aw-blog-comment-area">
                                        <label for="comment">Your Query - <em class="required">*</em></label>
                                        <textarea title="Comment" id="comment" name="comment" required></textarea>
                                    </div>

                                    <div style="width:96%" class="button-set">
                                        <input type="hidden" value="1" name="submit">
                                        <button type="submit"
                                            class="btn submit"><span><span>Submit</span></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>





                </div>

                <div class="col-sm-4">
                    <div class="contact-box-wrap">
                        <div class="contact-box">
                            <div class="contact-box-item">
                                <p class="contact-box-title">Get social</p>
                                <ul class="top-header-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="contact-box-item">
                                <!-- <p class="contact-box-title">Phone</p>
                                <div class="link-inline"><a href="#"><i class="fa fa-phone"></i> 1-800-1234-567</a>
                                </div> -->
                            </div>
                            <div class="contact-box-item">
                                <p class="contact-box-title">E-mail</p>
                                <div class="link-inline"><a href="#"><i class="fa fa-envelope-o"></i>
                                        contact@palmastroveda.com</a></div>
                            </div>
                            <div class="contact-box-item">
                                <!-- <p class="contact-box-title">Address</p>
                                <div class="link-inline link-inline-top"><a href="#"><i class="fa fa-map-marker"></i>
                                        6036 Richmond hwy., Alexandria, VA, 2230</a></div> -->
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Our Services End-->

</div>
<!-- Footer Section -->
<!-- <button><a href="sendmail.php">   sendmail    </a></button> -->








<?php include 'footer.php';?>

<!-- <?php


// if(empty($_POST['name'])){

//         $name_error = "please enter the name";

// }
// if(empty($_POST['email'])){

//     $email_error = "please enter the email";

// }
// if(empty($_POST['phone'])){

//     $phone_error = "please enter the phone number";

// }
// if(empty($_POST['dop'])){

//     $dop_error = "please enter the Date of Place";

// }
// if(empty($_POST['dob'])){

//     $dob_error = "please enter the Date of Birth";

// }
// if(empty($_POST['Query'])){

//     $name_error = "please enter the Query";

// }




// if(issetn($_POST['Submit'])) {

//                 $name = $_POST ['name'];
//                 $email = $_POST ['email'];
//                 $phone = $_POST ['phone'];
//                 $message = $_POST ['message'];
//                 $DateOfBirth = $_POST ['Date Of Birth'];
//                 $DateOfPlace = $_POST ['DateOfPlace'];
//                 $Query = $_POST ['Query'];

    
// }













?>













 -->