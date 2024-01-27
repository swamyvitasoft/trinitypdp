<?php include 'header.php';
include 'connect.php' ?>
<style>
    .btn:hover,
    .btn:focus,
    .btn.focus {
        color: #26c8dd;
        text-decoration: none;
    }
</style>
<div class="row" style="background:url('images/about/clg-bg.jpg');background-size:cover;height: 200px;">
    <div class="container">
        <div class="page-header text-center">
            <h1>Contact US</h1>
            <p class="lead"></p>
        </div>
    </div>
</div>
<section class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="general-title clearfix text-left">
                    <h2>ADDRESS </h2>
                    <hr>
                </div>
                <div style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                    <div style="padding: 10px;" class="newfont">
                        <address style="line-height: 2.528571;">
                            Trinity&nbsp;College&nbsp;of&nbsp;Engineering&nbsp;and&nbsp;Technology, <br>
                            Bandarikunta,Peddapalli - Telangana - 505172,<br>
                            <span class="fa fa-envelope " style="color:#3b2277"></span> officetcek@gmail.com <br>
                            <span class="fa fa-globe" style="color:#3b2277"></span> www.tcek.ac.in
                        </address>
                        <div>
                            <hr>
                            <h4 style="color:#3b2277">Director Academics</h4>
                            <p><span class="fa fa-phone "> +91 73969 03383</span></p>
                        </div>
                        <div>
                            <hr>
                            <h4 style="color:#3b2277">Administrative Officer</h4>
                            <p><span class="fa fa-phone "> +91 85729 54369</span></p>
                            <p><span class="fa fa-envelope "> ao.tcek@gmail.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="general-title clearfix text-left">
                    <h2>LOCATION </h2>
                    <hr>
                </div>
                <div style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15123.79041727655!2d79.3795503!3d18.6214263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8feb86f26d6d0771!2sTrinity+College+Of+Engineering+And+Technology!5e0!3m2!1sen!2sin!4v1553594689888" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4 leftside">
                <div class="general-title clearfix text-left">
                    <h2>GET IN TOUCH </h2>
                    <hr>
                </div>
                <div class="contact_form" style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
                    <form id="contactform" class="row" action="add.php" name="contactform" method="post" style="padding: 20px;">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name*">
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email*">
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <input type="text" name="website" id="website" class="form-control" placeholder="Website">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <textarea class="form-control" name="message" id="comments" rows="6" placeholder="Message Below"></textarea>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <button type="submit" class="btn btn-outline-success btn-lg" style="background-color:#07294d;color:white">Send Message</button>
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</section>
<?php include 'footer.php'; ?>