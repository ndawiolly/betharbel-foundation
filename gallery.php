<?php include_once "partials/navbar.php" ?>
<!--  ************************* Page Title Starts Here ************************** -->

<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Our Gallery</h2>
            <ul>
                <li> <a href="index"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Gallery</li>
            </ul>
        </div>
    </div>
</div>



<!--  ************************* Gallery Starts Here ************************** -->
<div id="portfolio" class="gallery">
    <div class="container">

        <div class="row">

            <div class="gallery-filter d-sm-block">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-info filter-button" data-filter="hdpe">Education</button>
                <button class="btn btn-success filter-button" data-filter="sprinkle">Feeding</button>
                <button class="btn btn-warning filter-button" data-filter="spray">Skills</button>
                <!-- <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button> -->
            </div>
            <br />



            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/events/image_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/events/image_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/events/image_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/events/image_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/events/image_04.jpg" class="img-responsive">
            </div>



            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/events/image_05.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/events/image_06.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
                <img src="assets/images/events/image_07.jpg" class="img-responsive">
            </div>


        </div>
    </div>


</div>
<!-- ######## Gallery End ####### -->

<?php include_once "partials/footer.php" ?>