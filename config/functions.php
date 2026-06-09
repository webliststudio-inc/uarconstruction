<?php
class allClass
{
    function _otherPagesBtn($websiteUrl) { ?>
        <div class="other-pages-btn-div">
            <a href="<?php echo $websiteUrl ?>">
                <button class="btn" title="Request an Estimate">Request an Estimate <i
                        class="bi bi-arrow-right-short"></i></button>
            </a>

            <a href="<?php echo $websiteUrl ?>">
                <button class="btn contact-btn" title="Contact Us">Contact Us <i
                        class="bi bi-telephone-inbound-fill"></i></button>
            </a>
        </div>
    <?php }

    public function _aboutUsSection($websiteUrl, $extraClass = '') { ?>
        <section class="body-div <?= !empty($extraClass) ? ' '.$extraClass : ''; ?>">
            <div class="body-div-in">
                <div class="about-div" data-aos="fade-in" data-aos-duration="1200">
                    <div class="content-div">
                        <div class="title-div">
                            <div class="inner-div">
                                <span class="top-title">ABOUT US</span>
                                <h2>We are Best construction in the <span>World</span></h2>
                            </div>
                        </div>

                        <div class="text-div">
                            <p>Urban and Rural Construction LLC is a leading construction company specializing in
                                residential, commercial, renovation, remodeling, and infrastructure development
                                services across the USA. With a commitment to quality craftsmanship and dependable
                                project delivery, we build durable and innovative solutions for our clients.</p>

                            <div class="success-metrics">
                                <div class="metric" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="icon">
                                        <img src="<?php echo $websiteUrl?>/all-images/images/exprerience.png"
                                            alt="Years Experience" />
                                    </div>
                                    <h3 data-count="598">25<span>+</span></h3>
                                    <h4>Years Experience</h4>
                                </div>

                                <div class="metric" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="icon">
                                        <img src="<?php echo $websiteUrl?>/all-images/images/completed-project.png"
                                            alt="Completed Projects" />
                                    </div>
                                    <h3 data-count="128">128<span>+</span></h3>
                                    <h4>Completed Projects</h4>
                                </div>

                                <div class="metric" data-aos="fade-up" data-aos-duration="1700">
                                    <div class="icon">
                                        <img src="<?php echo $websiteUrl?>/all-images/images/satisfaction.png"
                                            alt="Client Satisfaction" />
                                    </div>
                                    <h3 data-count="120">120<span>+</span></h3>
                                    <h4>Client Satisfaction</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="image-div">
                        <img src="<?php echo $websiteUrl ?>/all-images/body-pix/about-banner.png" alt="About Us" />
                    </div>
                </div>
            </div>
        </section>
    <?php }

    public function _constructionProcessSection($websiteUrl, $extraClass = '') { ?>
        <section class="body-div <?= !empty($extraClass) ? ' '.$extraClass : ''; ?>">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">HOW WE BUILD</span>
                            <h2>Our Construction <span>Process</span></h2>
                        </div>
                    </div>

                    <div class="const-process-wrapper">
                        <div class="const-process-div" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl?>/all-images/images/discovery.png" alt="Discovery" />
                            </div>

                            <div class="content-div">
                                <h3>Discovery</h3>
                                <p>We assess your project needs and goals to create the right construction plan.</p>
                            </div>
                        </div>

                        <div class="const-process-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl?>/all-images/images/house-design.png" alt="Design" />
                            </div>

                            <div class="content-div">
                                <h3>Design</h3>
                                <p>We create detailed architectural and structural designs that align with your vision
                                    and needs.</p>
                            </div>
                        </div>

                        <div class="const-process-div" data-aos="fade-up" data-aos-duration="1500">
                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl?>/all-images/images/panning.png" alt="Planning" />
                            </div>

                            <div class="content-div">
                                <h3>Planning</h3>
                                <p>We organize resources, schedules, and project timelines to ensure smooth execution
                                    from start.</p>
                            </div>
                        </div>

                        <div class="const-process-div" data-aos="fade-up" data-aos-duration="1700">
                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl?>/all-images/images/completion.png" alt="Completion" />
                            </div>

                            <div class="content-div">
                                <h3>Completion</h3>
                                <p>We deliver finished projects with quality assurance, ensuring satisfaction and
                                    lasting value.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }

    public function _testimonialSection($websiteUrl, $extraClass = '') { ?>
        <section class="body-div <?= !empty($extraClass) ? ' '.$extraClass : ''; ?>">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div testimony-title" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">TESTIMONIAL</span>
                            <h2>What Our Client Says About <span>Us</span></h2>
                        </div>
                        <div class="btn-div">
                            <button class="btn" title="Submit Your Review">Submit Your Review <i
                                    class="bi bi-chat-quote"></i></button>
                        </div>
                    </div>

                    <div class="cg-carousel">
                        <div class="cg-carousel__container" id="js-carousel_1">
                            <div class="cg-carousel__track js-carousel__track">
                                <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="main-testimonial">
                                        <div class="img-back-div">
                                            <div class="img-div">
                                                <img src="all-images/images/avatar.png" alt="testimonial" />
                                            </div>

                                            <div class="icon">
                                                <i class="bi-quote"></i>
                                            </div>
                                        </div>

                                        <p>
                                            The team delivered exactly what we needed on time and exceeded our
                                            expectations in terms of quality. Their professionalism and attention to
                                            detail made the entire process smooth and stress-free from start to finish.
                                        </p>

                                        <div class="bottom-div">
                                            <div class="star-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>

                                            <h5>Michael A.</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="main-testimonial">
                                        <div class="img-back-div">
                                            <div class="img-div">
                                                <img src="all-images/images/avatar.png" alt="testimonial" />
                                            </div>

                                            <div class="icon">
                                                <i class="bi-quote"></i>
                                            </div>
                                        </div>

                                        <p>
                                            I’m very satisfied with their service from beginning to end. They
                                            communicated clearly, handled everything professionally, and ensured the
                                            project was completed without any issues or delays.
                                        </p>

                                        <div class="bottom-div">
                                            <div class="star-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>

                                            <h5>Sarah K.</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="main-testimonial">
                                        <div class="img-back-div">
                                            <div class="img-div">
                                                <img src="all-images/images/avatar.png" alt="testimonial" />
                                            </div>

                                            <div class="icon">
                                                <i class="bi-quote"></i>
                                            </div>
                                        </div>

                                        <p>
                                            Excellent execution and great communication throughout the entire project.
                                            They understood our requirements perfectly and delivered a result that was
                                            even better than we imagined.
                                        </p>

                                        <div class="bottom-div">
                                            <div class="star-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>

                                            <h5>David O.</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="main-testimonial">
                                        <div class="img-back-div">
                                            <div class="img-div">
                                                <img src="all-images/images/avatar.png" alt="testimonial" />
                                            </div>

                                            <div class="icon">
                                                <i class="bi-quote"></i>
                                            </div>
                                        </div>

                                        <p>
                                            They took the time to fully understand our needs and delivered a
                                            high-quality result that reflects true professionalism. We are very
                                            impressed with their consistency and dedication.
                                        </p>

                                        <div class="bottom-div">
                                            <div class="star-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>

                                            <h5>Grace T.</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="main-testimonial">
                                        <div class="img-back-div">
                                            <div class="img-div">
                                                <img src="all-images/images/avatar.png" alt="testimonial" />
                                            </div>

                                            <div class="icon">
                                                <i class="bi-quote"></i>
                                            </div>
                                        </div>

                                        <p>
                                            Very reliable and highly skilled team. They maintained excellent
                                            communication throughout the project and ensured everything was delivered on
                                            time with outstanding quality.
                                        </p>

                                        <div class="bottom-div">
                                            <div class="star-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                            </div>

                                            <h5>James E.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            window['carousel_options_1'] = ({
                items: 4,
                margin: 30,
                loop: true,
                dots: true,
                autoplayHoverPause: true,
                smartSpeed: 650,
                autoplay: true,
                breakpoints: {
                    700: {
                        slidesPerView: 2,
                    },
                    1100: {
                        slidesPerView: 3,
                    },
                    1300: {
                        slidesPerView: 3,
                    }

                }
            });
            _call_carousel('1')
            </script>
        </section>
    <?php }

    function _statisticsSection($websiteUrl) { ?>
        <section class="body-div statistics-body">
            <div class="body-div-in statistics-body-div-in">
                <div class="statistics-back-div">
                    <div class="statistics-div" data-aos="fade-up" data-aos-duration="1000">
                        <div class="image-div">
                            <img src="<?php echo $websiteUrl?>/all-images/images/project.png" alt="Projects" />
                        </div>
                        <div class="text-cont">
                            <h2 data-count="598">0<span>+</span></h2>
                            <h4>Projects</h4>
                        </div>
                    </div>

                    <div class="statistics-div" data-aos="fade-up" data-aos-duration="1200">
                        <div class="image-div">
                            <img src="<?php echo $websiteUrl?>/all-images/images/clients.png" alt="Clients" />
                        </div>
                        <div class="text-cont">
                            <h2 data-count="128">0</h2>
                            <h4>Clients</h4>
                        </div>
                    </div>

                    <div class="statistics-div" data-aos="fade-up" data-aos-duration="1400">
                        <div class="image-div">
                            <img src="<?php echo $websiteUrl?>/all-images/images/success.png" alt="Success" />
                        </div>
                        <div class="text-cont">
                            <h2 data-count="120">0</h2>
                            <h4>Success</h4>
                        </div>
                    </div>

                    <div class="statistics-div" data-aos="fade-up" data-aos-duration="1600">
                        <div class="image-div">
                            <img src="<?php echo $websiteUrl?>/all-images/images/award.png" alt="Win Awards" />
                        </div>
                        <div class="text-cont">
                            <h2 data-count="100">0</h2>
                            <h4>Win Awards</h4>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            _countStatistics();
            </script>
        </section>
    <?php }
} //end of class
$callclass = new allClass();
?>