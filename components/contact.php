<section class="contact-sec" id="contact">
    <div class="img-holder hidden-xs hidden-sm">
        <img src="images/bg-7.jpg" alt="img description" class="img-responsive">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-5">
                <div class="contact-holder">
                    <h3 class="heading text-uppercase" data-heading="contact">Benimle İletişime Geçin</h3>
                    <!-- Contact list of the page -->
                    <ul class="list-unstyled contact-list">
                        <li>
                            <span class="icon-holder pull-left"><i class="icofont-envelope"></i></span>
                            <div class="wrap">
                                <strong class="title text-uppercase">Email</strong>
                                <a href="mailto:havva.zeynep.16@gmail.com">havva.zeynep.16@gmail.com</a>
                            </div>
                        </li>
                        <li>
                            <span class="icon-holder pull-left"><i class="fab fa-linkedin"></i></span>
                            <div class="wrap">
                                <strong class="title text-uppercase">LinkedIn</strong>
                                <a href="https://www.linkedin.com/in/havvazeynepakdemir/">havvazeynep</a>
                            </div>
                        </li>
                        <li>
                            <span class="icon-holder pull-left"><i class="icofont-phone"></i></span>
                            <div class="wrap">
                                <strong class="title text-uppercase">phone</strong>
                                <a href="tel:05079782904">+09(0507)978-29-04</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 col-md-offset-6">
                <!-- contact form of the page -->
                <div class="contact-form">
                    <form id="contactForm" data-toggle="validator">
                        <fieldset>
                            <div class="form-group">
                                <label for="text">Your name:</label>
                                <input class="form-control" id="txtname" name="name" type="text" placeholder="Enter your name here" required data-error="NEW ERROR MESSAGE">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input class="form-control" id="txtemail" name="email" type="email" placeholder="Enter your email address" required data-error="NEW ERROR MESSAGE">
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="txtmessage" name="message" placeholder="Write your message here" required data-error="NEW ERROR MESSAGE"></textarea>
                            </div>
                            <div id="msgSubmit" class="form-message hidden"></div>
                            <button type="submit" class="btn-primary text-capitalize" id="form-submit">send message</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>