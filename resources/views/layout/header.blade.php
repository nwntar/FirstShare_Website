        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>@yield('title')</title>
            <link rel="shortcut icon" href="{{ URL::asset('img/logotop.png') }}" type="image/png">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="" name="keywords">
            <meta content="" name="description">
            <!-- Google Web Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
                rel="stylesheet">
            <!-- Icon Font Stylesheet -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
            <!-- Libraries Stylesheet -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
            <link href="" rel="stylesheet">
            <link rel="stylesheet" href="{{ URL::asset('lib/animate/animate.min.css') }}">

            <link href={{ URL::asset('lib/owlcarousel/assets/owl.carousel.min.css') }} rel="stylesheet">
            <link href={{ URL::asset('lib/lightbox/css/lightbox.min.css') }} rel="stylesheet">
            <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
            <!-- Customized Bootstrap Stylesheet -->
            <link href={{ URL::asset('css/bootstrap.min.css') }} rel="stylesheet">
            <!-- Template Stylesheet -->
            <link href={{ URL::asset('css/style.css') }} rel="stylesheet">
        </head>
        <style>
            .navbar-nav .nav-link {
                font-size: 18px;
                /* ปรับขนาดฟอนต์ตามที่ต้องการ */
            }
            /* พื้นหลังของ dropdown ทั้งกล่อง */
/* พื้นหลังของ dropdown ทั้งกล่อง */
.dropdown-menu {
    min-width: 220px !important; /* ปรับความกว้างตามต้องการ */
    background-color: #ffffff !important;
    border: 1px solid #ccc !important;
    padding: 5px 0 !important;
}

.dropdown-menu a.nav-link {
    color: #660000 !important;
    padding: 10px 15px !important;
    white-space: nowrap !important; /* บังคับไม่ให้ขึ้นบรรทัดใหม่ */
    display: block !important;
}

.dropdown-menu a.nav-link:hover {
    background-color: #e0e0e0 !important;
    color: #000000 !important;
}


        </style>

        <body>
            <div class="container-fluid topbar px-0 d-none d-lg-block" id="home-link">
                <div class="container px-0">
                    <div class="row gx-0 align-items-center" style="height: 45px;">
                        <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                            <div class="d-flex flex-wrap">
                            
                                        <a href="#" class="text-white me-4"><i
                                        class="fas fa-phone-alt text-light me-2"></i>0628919793 </a>
                                <a href="#" class="text-white me-0"><i
                                        class="fas fa-envelope text-light me-2"></i>firstshare2025@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center text-lg-end">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="https://www.facebook.com/profile.php?id=61572324180195" target="_blank" class="btn btn-light btn-square rounded-circle nav-fill me-3"><i
                                        class="fab fa-facebook-f text-dark"></i></a>
                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->


            <!-- Navbar & Hero Start -->
            <div class="container-fluid sticky-top px-0">
                <div class="container px-0">
                    <nav class="navbar navbar-expand-sm navbar-dark bg-white py-3 px-4">
                        <div class="navbar-brand">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ URL::asset('img/logo1.png') }}" alt="Logo" style="height: 80px;">
                            </a>
                        </div>
                        <button class="navbar-toggler"data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto py-0" aria-label="Main Navigation">
                                <a href="{{ route('welcome') }}" class="nav-item nav-link" id="home-link">หน้าแรก</a>
                              
                                 <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">บริการ</a>
                                <div class="dropdown-menu m-0">
                                    <a href="/conference_system" class="nav-item nav-link" id="service-link">Service 1 เว็บไซต์หลักงานประชุมวิชาการ</a>
                                    <a href="/conference_system2" class="nav-item nav-link">Service 2 ระบบ Submission <br> และประเมินบทความ </a>
                                    <a href="/conference_system3" class="nav-item nav-link">Service 3 การจัดการรูปแบบบทความ<br>และการออนไลน์บทความ</a>
                                </div>
                            </div>
                              <a href="/customer" class="nav-item nav-link" id="about-link">ผู้ใช้บริการของเรา</a>
                                <a href="/about" class="nav-item nav-link" id="about-link">เกี่ยวกับเรา</a>
                                <a href="/contact" class="nav-item nav-link"
                                    id="contact-link">ติดต่อสอบถาม</a> 
                            </div>
                        </div>
                    </nav>


                </div>
            </div>

            @yield('content')
            {{-- @extends('layout.footer') --}}
            <!-- Footer Start -->
            <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="footer-item d-flex flex-column">
                                <div class="footer-item">
                                    <h4 class="text-white mb-4">FirstShare: Contemporary Conference Platform</h4>
                                    <p class="mb-3 text-white ">
                                        "
                                        ระบบจัดการงานประชุมวิชาการแบบครบวงจรที่รวมทุกขั้นตอนสำคัญไว้ในแพลตฟอร์มเดียว ไม่ว่าจะเป็นการจัดทำเว็บไซต์ การลงทะเบียนออนไลน์ การส่งและประเมินบทความ การแก้ไขบทความ ไปจนถึงการเผยแพร่บทความออนไลน์ ด้วยระบบที่ใช้งานง่าย เทคโนโลยีทันสมัย และการสนับสนุนทางเทคนิคตลอด 24 ชั่วโมง พร้อมปรับแต่งบริการให้ตรงตามความต้องการเฉพาะของลูกค้า FirstShare ช่วยลดความซับซ้อน เพิ่มความสะดวก และยกระดับมาตรฐานการจัดการประชุมวิชาการในทุกระดับ! "
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="text-white mb-4"></h4>
                                <a href="{{ route('welcome') }}" class="text-white"><i
                                        class="fas fa-angle-right text-white  me-2"></i> หน้าแรก</a>
                                <a href="/conference_system" class="text-white"><i
                                        class="fas fa-angle-right text-white  me-2"></i> บริการ</a>
                                        
                                <a href="/about" class="text-white"><i
                                        class="fas fa-angle-right text-white  me-2"></i> เกี่ยวกับเรา</a>
                                <a href="/contact" class="text-white"> <i
                                        class="fas fa-angle-right text-white  me-2"></i> ติดต่อสอบถาม</a>
                               
                                    </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="footer-item d-flex flex-column">
                                <h4 class="text-white mb-4">ติดต่อสอบถาม</h4>
                                <a href="" class="text-white"><i class="fa fa-map-marker-alt me-2"></i> 222 มหาวิทยาลัยวลัยลักษณ์ ตำบล ไทยบุรี อำเภอท่าศาลา นครศรีธรรมราช 80160</a>
                                <a href="" class="text-white"><i class="fas fa-phone-alt text-light me-2"></i> 0628919793 
<br>คุณธัญญาภัสร์ โรจน์รุ่งนิธิคุณ </a>
                                <a href="" class="text-white"><i class="fas fa-envelope me-2"></i> firstshare2025@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Copyright Start -->
            <div class="container-fluid copyright py-4">
                <div class="container ">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6 text-center text-md-start mb-md-0">
                        </div>
                        <div class="col-md-6 text-center text-md-end text-body text-white ">
                            <a class="border-bottom text-white" href="#"> FirstShare
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyright End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

            <!-- JavaScript Libraries -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="{{ URL::asset('lib/wow/wow.min.js') }}"></script>
            <script src="{{ URL::asset('lib/easing/easing.min.js') }}"></script>
            <script src="{{ URL::asset('lib/waypoints/waypoints.min.js') }}"></script>
            <script src="{{ URL::asset('lib/counterup/counterup.min.js') }}"></script>
            <script src="{{ URL::asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
            <script src="{{ URL::asset('lib/lightbox/js/lightbox.min.js') }}"></script>
            <!-- Template Javascript -->
            <script src="{{ URL::asset('js/main.js') }}"></script>

            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

            <script>
                var TrandingSlider = new Swiper('.tranding-slider', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    loop: true,
                    slidesPerView: 'auto',
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 2.5,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    }
                });

                document.addEventListener("DOMContentLoaded", function() {
                    const sections = document.querySelectorAll("div[id]");
                    const links = document.querySelectorAll(".nav-item.nav-link");

                    const observerOptions = {
                        root: null,
                        rootMargin: "0px",
                        threshold: 0.5
                    };

                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            // Adjusted to match links with the `index.php#section-id` format
                            const link = document.querySelector(
                                `a[href="#${entry.target.id}"], a[href="index.php#${entry.target.id}"]`);
                            if (entry.isIntersecting) {
                                // Remove 'active' class from all links
                                links.forEach(link => link.classList.remove("active"));

                                // Add 'active' class to the matched link
                                if (link) link.classList.add("active");
                            }
                        });
                    }, observerOptions);

                    sections.forEach(section => {
                        observer.observe(section);
                    });
                });
            </script>

        </body>

        </html>
