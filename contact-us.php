<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Contact Us - Get in Touch for Construction Services</title>
    <meta name="keywords"
        content="<?php echo $appName ?> contact, construction company contact USA, building contractors contact, request construction quote, construction consultation, general contractor contact, construction inquiry USA, project estimate request, commercial construction contact, residential builders contact, construction support, construction company phone email" />
    <meta name="description"
        content="Contact Urban and Rural Construction  for professional construction services across the USA. Request a quote, schedule a consultation, or speak with our team about your residential, commercial, or infrastructure projects." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Contact Us - Construction Services Inquiry" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta property="og:description"
        content="Get in touch with Urban and Rural Construction  for reliable construction solutions. Request project estimates, consultations, and expert guidance for residential and commercial projects." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Contact Us - Construction Services Inquiry" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/uarconstruction.jpg" />
    <meta name="twitter:description"
        content="Contact us today for construction consultations, project estimates, and expert building services across the USA." />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="top-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/contact-us">
                        <li title="Contact Us">Contact Us</li>
                    </a>
                </ul>
            </div>
            <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                <h1 data-aos="fade-in" data-aos-duration="800"><span>Contact Us</span></h1>
                <p>
                  Reach out to Urban and Rural Construction  for inquiries and support on construction projects in the USA.
                </p>
                <?php $callclass->_otherPagesBtn($websiteUrl); ?>
            </div>
        </div>
    </section>

    <section class="other-pages-main-section">
        <section class="contact-hash-bg">
            <div class="bottom-body-div">
                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/email.png" alt="<?php echo $thename ?> Email Address" /></div>

                        <div class="text">
                            <h2>MAIL US</h2>
                            <p>info@uarconstruction.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/phone.png" alt="<?php echo $thename ?> Phone Number" /></div>

                        <div class="text">
                            <h2>CALL US</h2>
                            <p>+1 (832) 288-5625</p>
                        </div>
                    </div>
                </div>

                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/location.png" alt="<?php echo $thename ?> Office Address" /></div>

                        <div class="text">
                            <h2>LOCATION</h2>
                            <p>13180 Westpark Drive Ste 201 B/D Houston, TX 77082 USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-body-div">
            <div class="map-back-div">
                <iframe
                    class="google-map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3445753.784162846!2d-99.9018137!3d31.9685988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640b8c1c2c9a2a9%3A0x1c2f3a4b5c6d7e8f!2sTexas%2C%20USA!5e0!3m2!1sen!2sng!4v1710000000000!5m2!1sen!2sng"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="contact-mail-div" data-aos="fade-in" data-aos-duration="800">
                    <div class="title">
                        <h3><i class="bi bi-envelope-fill"></i> Leave Your Message</h3>
                    </div>
                    <div class="inner-div">
                        <div class="div-in">
                            <div class="text_field_container" id="fullName_container">
                                <script>
                                    textField({
                                        id: 'fullName',
                                        title: 'Full Name'
                                    });
                                </script>
                            </div>

                            <div class="text_field_container" id="email_container">
                                <script>
                                    textField({
                                        id: 'email',
                                        title: 'Email Address',
                                        type: 'email'
                                    });
                                </script>
                            </div>

                            <div class="text_field_container" id="inquiryPhoneNumber_container">
                                <script>
                                    textField({
                                        id: 'inquiryPhoneNumber',
                                        title: 'Enter Your Phone Number',
                                        type: 'tel',
                                        onKeyPressFunction: 'isNumberCheck(event);'
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="div-in right-div-in">
                            <div class="text_field_container" id="subject_container">
                                <script>
                                    textField({
                                        id: 'subject',
                                        title: 'Subject'
                                    });
                                </script>
                            </div>

                            <div class="text_area_container" id="message_container">
                                <script>
                                    textField({
                                        id: 'message',
                                        title: 'Message',
                                        type: 'textarea'
                                    });
                                </script>
                            </div>

                            <button class="btn" id="submitBtn" title="Send Mail" onclick="">Send Mail <i class="bi-send-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>