<footer id="footer" class="footer light-background">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                        <span class="sitename">{{ config('app.name', 'TabSphere') }}</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Scotland, UK</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+44 1234 567890</span></p>
                        <p><strong>Email:</strong> <span>support@tabsphere.co.uk</span></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div>
                    © Copyright <strong><span>{{ config('app.name', 'TabSphere') }}</span></strong>. All Rights Reserved
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
