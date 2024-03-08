<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <?php include 'links.php'?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php'?>
    <!-- End header -->

    <!-- section banner -->
    <section class="top-section">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="center-heading">
                        <h1 class="title">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->


    <!-- contact us -->
    <section class="get-quote">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="left-col">
                        <h3>Let's Work Together!</h3>
                        <p class="mb-3">We're passionate about helping individuals and businesses achieve their writing
                            goals. Whether you need assistance with a specific project or ongoing support, we'd love to
                            hear about your needs.</p>
                        <p>Feel free to share details about your project, including:</p>
                        <h4>The type of writing:</h4>
                        <p>Is it an academic paper, blog post, website content, or something else?</p>
                        <h4>The scope of the project:</h4>
                        <p>What is the length and complexity of the project?</p>
                        <h4>Your specific needs:</h4>
                        <p>Do you need help with brainstorming, research, writing, editing, or proofreading?</p>
                        <h4>The more information you provide, the better we can understand your project and tailor our
                            services to meet your specific needs. We look forward to collaborating with you!</h4>
                        <div class="contact-info">
                            <div class="contact-inner">
                                <img src="assets/images/c-phone.png" alt="" />
                                <div class="mb-0">
                                    <span>Call Us Here</span>
                                    <p><a href="tel:+447983832171">+44 798 383 2171</a></p>
                                </div>
                            </div>
                            <div class="contact-inner">
                                <img src="assets/images/c-email.png" alt="" />
                                <div class="mb-0">
                                    <span>Email Us Here</span>
                                    <p><a href="mailto:info@assignmentdoers.co.uk">info@assignmentdoers.co.uk</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="assets/images/img-6.png" class="w-100" alt="" /> -->
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="right-col">
                        <form method="POST" action="signup" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" pattern="[A-Za-z ]+"
                                            placeholder="Enter your name*" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email"
                                            pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$"
                                            placeholder="Enter email here*" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label>Phone</label>
                                        <input type="number" class="form-control" name="phone"
                                            onkeypress="if(this.value.length==12) return false;"
                                            placeholder="Enter phone number*" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label>Service</label>
                                        <select class="form-control form-select" id="mySelect" required=""
                                            name="service">
                                            <option selected="" disabled="" value="">Select Service</option>
                                            <option value="Assignment">Assignment</option>
                                            <option value="Dissertation">Dissertation</option>
                                            <option value="Research Paper">Research Paper</option>
                                            <option value="Online Exam">Online Exam</option>
                                            <option value="Thesis">Thesis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label>Message</label>
                                        <textarea class="form-control"
                                            onkeypress="if(this.value.length==250) return false;" name="message"
                                            rows="4" cols="50"
                                            placeholder="Is there anything else we need to know?"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-0 text-center">
                                        <button type="submit" class="btn btn-theme-outline">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- footer -->
    <?php  include 'footer.php'?>
    <!-- end -->


</body>

</html>