<?php include_once "partials/navbar.php" ?>

<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <ul>
                <li> <a href="index"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact US</li>
            </ul>
        </div>
    </div>
</div>



<!--  ************************* Contact Us Starts Here ************************** -->


<div class="row contact-rooo no-margin">
    <div class="container">
        <div class="row">
           
            <form action="assets/config/contact_betharbel.php" method="post">
                <div class="col-sm-7">
                    <h2 class="fw-bolder">Contact Betharbel</h2> <br>
                    <div class="row cont-row ">
                        <div class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="cont_name" class="form-control input-sm"></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email_address" placeholder="Enter Email Address" class="form-control input-sm"></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="phone" name="phone_number" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                    </div>
                    <div class="row cont-row">
                        <div class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="comment"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-primary btn-sm" name="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="col-sm-5">

                <div style="margin:50px" class="serv">

                    <h2 style="margin-top:10px;">Address</h2>

                    IDP Camp Durumi, FCT Abuja
                    22 Shelter Farms, Kubwa, Abuja<br><br>
                    Phone: +234 80625 05647
                    +234 80285 32911 <br>
                    Email: <a href="mailto:info@anybiz.com" class="text-info">info@betharbelfoundation.net</a><br>
                    Web: <a href="smart-eye.html" class="text-info">www.betharbelfoundation.in</a>

                </div>

            </div>

        </div>
    </div>

</div>


<?php include_once "partials/footer.php" ?>