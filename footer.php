<footer class="footer">
    <div class="container">
        <div class="row mt-0 pt-4 pb-4">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 ">
                <div class="footer-logo">
                    <a href="https://assignmentdoers.co.uk/"><img src="assets/images/logo.png" /></a>
                    <p>Assignment Doers prioritize customer satisfaction and guarantees timely delivery, confidentiality, and originality of work. Our commitment to excellence is reflected in our rigorous quality assurance processes, ensuring that every assignment undergoes thorough proofreading, editing, and plagiarism checks before being delivered to the client.</p>
                    <div class="social">
                        <p class="mb-0">
                            <a target="_blank" aria-label="Facebook" href="#"><i
                                    class="fa fa-facebook-official"></i></a>
                            <a target="_blank" aria-label="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" aria-label="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-xs-12 ">
                <div class="footer-links ">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="https://assignmentdoers.co.uk/"> Home</a></li>
                        <li><a href="about-us"> About Us</a></li>
                        <!--<li><a href="blogs"> Blogs</a></li>-->
                        <li><a href="contact-us"> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
                <div class="footer-links ">
                    <h6>Contact Us</h6>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start">
                            <img src="assets/images/phone.png">
                            <div class="mb-0">
                                <a href="tel:+447983832171">+44 798 383 2171</a>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <img src="assets/images/email.png">
                            <div class="mb-0">
                                <a href="mailto:info@assignmentdoers.co.uk">info@assignmentdoers.co.uk</a>
                            </div>
                        </li>
                        <!--<li class="d-flex align-items-start">-->
                        <!--    <img src="assets/images/location.png">-->
                        <!--    <div class="mb-0">-->
                        <!--        <a href="#">407 Lincoln Rd St 6H Miami Beach, FL-->
                        <!--            33139</a>-->
                        <!--    </div>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-links">
                    <h6>Subscribe Us</h6>
                    <p>Stay updated with our latest news. We promise not to spam!</p>
                    <form method="POST" action="signup">
                        <div class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="Your Email" aria-label="Your Email"
                                aria-describedby="Your Email" name="email"
                                pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required="">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <div class="row align-items-center mt-0 pt-2 pb-2">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-bootom-links">
                    <p>© Copyright 2023 - 2024 . Assignment Doers . All rights reserved.</p>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Website JS -->
<script src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick Carousel JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
<!-- AOS JS -->
<script src="assets/js/aos.js"></script>
<script>
AOS.init({
    duration: 1000
});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65eb81e19131ed19d9770ce0/1hofv6nar';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Offcanvas Side Bar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <a href="https://assignmentdoers.co.uk/"><img src="assets/images/logo.svg" alt="logo"></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'index') { echo 'active'; } ?>" href="https://assignmentdoers.co.uk/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'about-us') { echo 'active'; } ?>" href="about-us">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Services <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="assignment">Assignment</a></li>
                    <li><a class="dropdown-item" href="dissertation">Dissertation</a></li>
                    <li><a class="dropdown-item" href="research-paper">Research Paper</a></li>
                    <li><a class="dropdown-item" href="online-exam">Online Exam</a></li>
                    <li><a class="dropdown-item" href="thesis">Thesis</a></li>
                </ul>
            </li>
            <!--<li class="nav-item">-->
            <!--    <a class="nav-link <?php if ($page == 'blogs') { echo 'active'; } ?>" href="blogs">-->
            <!--        Blogs-->
            <!--    </a>-->
            <!--</li>-->
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'contact-us') { echo 'active'; } ?>" href="contact-us">
                    Contact Us
                </a>
            </li>
        </ul>
        <div class="mt-3">
            <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal"
                class="btn btn-theme btn-lg">Get Started</a>
        </div>
    </div>
</div>