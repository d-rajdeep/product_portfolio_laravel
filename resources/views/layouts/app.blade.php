<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts.menu')
    <!-- Navbar End -->


    <!-- Carousel Start -->

    @yield('content')

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
<style>
    nav.navbar {
        background: #ffffff !important;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: relative;
        z-index: 1000;
        /* ensures navbar stays above slider */
    }

    .feature-card {
        transition: all 0.3s ease;
        border-radius: 12px;
    }

    .feature-card:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }

    .feature-icon {
        font-size: 50px;
        color: #F79E2A;
        /* your brand color */
        margin-bottom: 20px;
    }

    .fixed-top {
        background: #ffffff !important;
        /* White background */
        z-index: 9999 !important;
        /* Keep menu above slider */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        /* Light shadow */
    }

    /* Push slider down so it doesn’t hide behind navbar */
    #header-carousel {
        margin-top: 120px;
        /* Adjust according to your menu height */
    }

    .carousel-item img {
        width: 100%;
        height: auto;
        object-fit: cover;
        /* Ensures image fills nicely */
    }

    /* Large screens (default) */
    /* #header-carousel .carousel-item {
        height: 600px;
    } */

    #header-carousel .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    /* Tablets */
    @media (max-width: 992px) {
        #header-carousel .carousel-item {
            height: 450px;
        }
    }

    /* Mobile devices */
    @media (max-width: 576px) {
        #header-carousel .carousel-item {
            height: 300px;
        }
    }

    .top-info {
        display: flex;
        align-items: center;
        white-space: nowrap;
        /* prevents breaking into multiple lines */
        gap: 20px;
        /* spacing between address & email */
    }
</style>

</html>
