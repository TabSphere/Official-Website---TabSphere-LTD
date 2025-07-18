
<!-- Contact Section -->
<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us </p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-right" data-aos-delay="200">
                <div class="contact-info-section">
                    <div class="info-header">
                        <h3>Connect With Us</h3>
                        <p>We are delighted to hear from you soon.</p>
                    </div>

                    <div class="contact-info-grid">
                        <div class="info-item" data-aos="zoom-in" data-aos-delay="250">
                            <div class="info-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="info-content">
                                <h5>Visit Our Office</h5>
                                <p>Scotland, UK</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="300">
                            <div class="info-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="info-content">
                                <h5>Send Email</h5>
                                <p>{{config('')}}</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="350">
                            <div class="info-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="info-content">
                                <h5>Call Direct</h5>
                                <p>+44 1234 567890</p>
                            </div>
                        </div>

                        <div class="info-item" data-aos="zoom-in" data-aos-delay="400">
                            <div class="info-icon">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div class="info-content">
                                <h5>Business Hours</h5>
                                <p>Mon-Fri: 9AM - 5PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-contact" data-aos="fade-up" data-aos-delay="450">
                        <h5>Follow Our Journey</h5>
                        <div class="social-icons">
                            <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="contact-form-wrapper">
                    <div class="form-header">
                        <h3>Send Us Message</h3>
                        <p>We are delighted to hear from you soon.</p>
                    </div>

                    <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="mb-3">
                            <label for="contactName" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="contactName" placeholder="Enter your full name" required="">
                        </div>

                        <div class="mb-3">
                            <label for="contactEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="contactEmail" placeholder="Enter your email address" required="">
                        </div>

                        <div class="mb-3">
                            <label for="contactPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" id="contactPhone" placeholder="Enter your phone number">
                        </div>

                        <div class="mb-3">
                            <label for="contactSubject" class="form-label">Service</label>
                            <input type="text" class="form-control" name="subject" id="contactSubject" placeholder="Enter message subject" required="">
                        </div>

                        <div class="mb-4">
                            <label for="contactMessage" class="form-label">Your Message</label>
                            <textarea class="form-control message-textarea" name="message" id="contactMessage" rows="5" placeholder="Enter your message" required=""></textarea>
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>

                        <button type="submit" class="submit-btn">
                            <span>Send Message</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Contact Section -->
