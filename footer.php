<footer class="footer">
    <div class="container">
        <div class="footer-flex">
            <div class="card card1">
                <h4>Workout Fitness Center</h4>
                <p>Join us at Workout Fitness and embark on a journey to a healthier, stronger, and happier you.
                    Discover the power of fitness. Discover Workout Fitness.</p>

                <div class="icon-flex">
                    <div class="icon">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="icon">
                        <i class="fa-brands fa-facebook-f"></i>
                    </div>

                    <div class="icon">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="card card2">

                <h4>CONTACT INFO</h4>

                <h5>Address</h5>
                <p>34 Street, City, Province, Canada</p>

                <h5>Telephone</h5>
                <p>+1 242 4942 290</p>

                <h5>Email</h5>
                <p>info@youdomain.com</p>

            </div>

            <div class="card card3">
                <h4>QUICK LINKS</h4>

                <h5><a href="">Menu</a></h5>
                <h5><a href="">About</a></h5>
                <h5><a href="">Classes</a></h5>
                <h5><a href="">Pricing</a></h5>
            </div>
        </div>
    </div>
</footer>

    <!-- slick jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- cdn slick JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.custom-slider').slick({
            infinite: true,
            autoplay: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000
            });
    </script>

<?php wp_footer(); ?>

</body>

</html>