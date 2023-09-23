<?php 
$page = "contact";
$title = "Contact Us";
include 'header.php';
?>

    <section class="component empt_top">
        <div class="container-fluid cc_container">
            <div class="ab_banner contact_banner">
                <img src="images/contact_us.jpg" alt="infrastructure">
            </div>
        </div>
    </section>

    <section class="component enquiry_container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="enquiry_cnt">
                        <h2 class="wow fadeInLeft">Any doubt?<br>Directly ask us out</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="enquiry_form wow fadeInRight" data-wow-delay="200ms">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Name" pattern="[A-Za-z ]{3,25}" onkeyup="value=value.replace(/[^\a-\z\A-\Z ]/g,'')" required>
                              </div>
                              <div class="mb-3">
                                <input type="email" class="form-control" id="mail" placeholder="Mail id" pattern="[a-zA-Z0-9._-]*@[a-zA-Z]*\.[a-zA-Z]{2,3}" required>
                              </div>
                            <div class="mb-3">
                              <input type="tel" class="form-control" id="mobile_number" placeholder="Mobile Number" pattern="[6-9]{1}[0-9]{9}" onkeyup="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="comment" rows="3" placeholder="Your Message"></textarea>
                              </div>
                            <button type="submit" class="btn btn-primary submit m-0 d-block ">Send Mail</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php';?>