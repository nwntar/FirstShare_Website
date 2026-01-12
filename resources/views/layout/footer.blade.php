    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">FirstShare</h4>
                                <p class="mb-3 text-white ">
                                    "บริษัทของเราเป็นผู้เชี่ยวชาญในการพัฒนาระบบซอฟต์แวร์ที่ตอบโจทย์ทุกความต้องการของคุณ เรามุ่งมั่นในการสร้างสรรค์โซลูชันที่ช่วยยกระดับประสิทธิภาพการทำงานของธุรกิจและเพิ่มความสะดวกในการดำเนินงาน ด้วยทีมงานมืออาชีพและประสบการณ์ในการพัฒนาระบบที่หลากหลาย เราพร้อมที่จะช่วยให้คุณประสบความสำเร็จในทุกขั้นตอนของการเติบโต"                        </p>

                                </p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4"></h4>
                            <a href="{{ route('welcome') }}" class="text-white"><i class="fas fa-angle-right text-white  me-2"></i> หน้าแรก</a>
                            <a href="/conference_system" class="text-white"><i class="fas fa-angle-right text-white  me-2"></i> บริการ</a>
                            <a href="/about" class="text-white"><i class="fas fa-angle-right text-white  me-2"></i> เกี่ยวกับเรา</a>
                            <a href="/contact" class="text-white"> <i class="fas fa-angle-right text-white  me-2"></i> ติดต่อสอบถาม</a>
                          
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">ติดต่อสอบถาม</h4>
                            <a href="" class="text-white"><i class="fa fa-map-marker-alt me-2"></i> 222 Walailak University, Thai Buri, Tha Sala District, Nakhon Si Thammarat 80160, Thailand</a>
                            <a href="" class="text-white"><i class="fas fa-envelope me-2"></i> 0628919793 or 0896577163</a>
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
                     <a class="border-bottom text-white" href="#"> Designed By FirstShare
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

document.addEventListener("DOMContentLoaded", function () {
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
          const link = document.querySelector(`a[href="#${entry.target.id}"], a[href="index.php#${entry.target.id}"]`);
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