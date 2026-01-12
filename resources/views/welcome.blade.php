@extends('layout.header')
@section('title')
    FirstShare
@endsection
@section('content')
    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel" id="home-link">
        <div class=" mx-auto">
            <div class="">
                <img src={{ URL::asset('img/web1.png') }} class="img-fluid w-100" alt="Image">
            </div>
            {{-- <div class="carousel-caption">
                    <div class="carousel-caption-inner text-center p-3">
                        <h1 class="display-1 text-capitalize text-white mb-4">FirstShare</h1>
                        <p class="mb-5 fs-5">
                            "บริษัทของเราเป็นผู้เชี่ยวชาญในการพัฒนาระบบซอฟต์แวร์ที่ตอบโจทย์ทุกความต้องการของคุณ เรามุ่งมั่นในการสร้างสรรค์โซลูชันที่ช่วยยกระดับประสิทธิภาพการทำงานของธุรกิจและเพิ่มความสะดวกในการดำเนินงาน ด้วยทีมงานมืออาชีพและประสบการณ์ในการพัฒนาระบบที่หลากหลาย เราพร้อมที่จะช่วยให้คุณประสบความสำเร็จในทุกขั้นตอนของการเติบโต"                        </p>
                        <!-- <a class="btn btn-primary rounded-pill py-3 px-5 mb-4 me-4" href="#">Apply Now</a>
                        <a class="btn btn-dark rounded-pill py-3 px-5 mb-4" href="#">Read More</a> -->
                    </div>
                </div> --}}
        </div>
    </div>


    <div class="container-fluid   py-5" id="contact">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-item">
                        <div class="pb-5">
                            <h5 class="text-dark"><b>FirstShare: Contemporary Conference Platform </b> </h5>
                            <h4 class="display-4 mb-4 text-dark">ระบบการจัดการการประชุมวิชาการแบบครบวงจร</h4>
                            <p class="mb-4">
                                Conference Platform
                                เป็นนวัตกรรมเชิงระบบที่มุ่งเน้นให้บริการแบบครบวงจรสำหรับการจัดประชุมวิชาการ
                                โดยรวมทุกกระบวนการสำคัญไว้ในแพลตฟอร์มเดียว ตั้งแต่การจัดทำเว็บไซต์ การลงทะเบียนออนไลน์
                                การส่งและประเมินบทความ การแก้ไขบทความ ไปจนถึงการเผยแพร่บทความในรูปแบบออนไลน์
                                ระบบมีความโดดเด่นด้วยระบบที่ใช้งานง่าย เทคโนโลยีที่ทันสมัย และการสนับสนุนทางเทคนิคตลอด 24
                                ชั่วโมง พร้อมปรับแต่งบริการให้สอดคล้องกับความต้องการเฉพาะของลูกค้า เพื่อช่วยลดความซับซ้อน
                                เพิ่มความสะดวกสบาย และยกระดับคุณภาพการจัดการประชุมวิชาการในทุกระดับ
                            </p>
                            <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="/conference_system">Read All
                                <i class="fas fa-arrow-right ms-2"></i></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="service-img">
                        <img src="img/service-1.png" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Project Start -->
    <div class="container-fluid project">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="text-dark"><b>FirstShare: Activity </b> </h1>
            </div>
            <div class="project-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                 <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-img">
                        <img src="img/projects-44.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <p class="text-dark fs-5 mb-3">FirstShare</p>
                            <a href="https://www.facebook.com/share/1B3jmJd7XU/"
                                class="h4">📣 ทีม FirstShare เข้าร่วมอบรม “Grow Your Business: ยกระดับผู้ประกอบการสู่สากล” 🚀🌍</a>
                            <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5"
                                    href="https://www.facebook.com/share/1B3jmJd7XU/">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-img">
                        <img src="img/projects-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <p class="text-dark fs-5 mb-3">WEDA Incubator</p>
                            <a href="https://www.facebook.com/photo/?fbid=122173411646342208&set=pcb.122173415342342208"
                                class="h4"> 4 ทีมสุดแกร่งคว้าตั๋ว Fast Track สู่ WEDA Incubator พร้อมทุนพัฒนาธุรกิจ
                                50,000 บาท</a>
                            <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5"
                                    href="https://www.facebook.com/photo/?fbid=122173411646342208&set=pcb.122173415342342208">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-img">
                        <img src="img/projects-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <p class="text-dark fs-5 mb-3">WALAILAK INVESTOR DAY 2025</p>
                            <a href="https://www.facebook.com/photo/?fbid=1079658580847401&set=pcb.1079658620847397"
                                class="h4"> รับโล่ WEDA MEMBER</a>
                            <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5"
                                    href="https://www.facebook.com/photo/?fbid=1079658580847401&set=pcb.1079658620847397">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-item h-100 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="project-img">
                        <img src="img/projects-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                    <div class="project-content bg-light rounded p-4">
                        <div class="project-content-inner">
                            <p class="text-dark fs-5 mb-3">FirstShare</p>
                            <a href="https://www.facebook.com/walailak.sciencepark/posts/pfbid0UREq4KmwnC9Y526WbhEAMnA1rzQ5JhJ63eaWeigN8QVynQoy2pzRSUb3LcLjrciNl"
                                class="h4"> กลั่นกรองผู้ประกอบการ UBI เข้าบ่มเพาะผู้ประกอบการภาคใต้ตอนบน</a>
                            <div class="pt-4">
                                <a class="btn btn-light rounded-pill py-3 px-5"
                                    href="https://www.facebook.com/walailak.sciencepark/posts/pfbid0UREq4KmwnC9Y526WbhEAMnA1rzQ5JhJ63eaWeigN8QVynQoy2pzRSUb3LcLjrciNl">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
    <!-- Project End -->



    <div class="container-fluid testimonial bg-light py-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="h-100 rounded">
                        <h4 class="text-dark"><b>FirstShare</b> </h4>
                        <h1 class="display-4 mb-4">ผู้ใช้บริการของเรา</h1>
                        <p class="mb-4">เรามีบริการจัดการประชุมวิชาการออนไลน์ครบวงจร ตั้งแต่การลงทะเบียน
                            การส่งบทความ การประเมิน และการเผยแพร่บทความออนไลน์ ด้วยระบบที่ใช้งานง่ายและมีการสนับสนุนตลอด 24
                            ชั่วโมง
                            เราพร้อมปรับแต่งให้ตรงตามความต้องการของลูกค้าเพื่อเพิ่มความสะดวกและยกระดับการจัดการประชุมให้มีประสิทธิภาพสูงสุด.
                        </p>
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="/customer">Customer All <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                        <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                <p class="mt-4">
                                    การให้บริการในการจัดการบทความและการออนไลน์บทความในงานประชุมครั้งนี้ได้รับคำชมอย่างมากจากผู้เข้าร่วมประชุม
                                    ทีมงานมีการจัดเตรียมงานอย่างมืออาชีพทั้งในส่วนของการรับและตรวจสอบบทความ
                                    การจัดเตรียมระบบออนไลน์ที่สะดวกและรวดเร็ว
                                </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="my-auto text-end">
                                    <h5>ที่ประชุมข้าราชการ พนักงาน และลูกจ้างมหาวิทยาลัยแห่งประเทศไทย</h5>
                                    <p class="mb-0">Customer</p>
                                </div>
                                <div class="bg-white rounded-circle ms-3">
                                    <img src="img/pkmt.jpg" class="rounded-circle p-2"
                                        style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                                <p class="mt-4">
                                    การจัดการระบบรับส่งบทความในงานประชุมนี้ดำเนินการได้อย่างราบรื่นและมีประสิทธิภาพ
                                    ทีมงานมีการตรวจสอบและยืนยันการส่งบทความอย่างรวดเร็ว
                                    ช่วยให้การจัดการข้อมูลมีความถูกต้องและทันเวลา
                                    ผู้เข้าร่วมสามารถส่งและเข้าถึงบทความได้อย่างสะดวกและปลอดภัย </p>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="my-auto text-end">
                                    <h5>การประชุมวิชาการพฤกษศาสตร์พื้นบ้านแห่งประเทศไทย ครั้งที่ 3</h5>
                                    <p class="mb-0">Customer</p>
                                </div>
                                <div class="bg-white rounded-circle ms-3">
                                    <img src="img/customer.png" class="rounded-circle p-2"
                                        style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>















    <div class="container-fluid   py-5" id="contact">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-item">
                        <div class="pb-5">

                            <h3 class="display-4 mb-4 text-dark">ติดต่อสอบถาม</h3>
                            <h5 class="mb-0">
                                "หากคุณมีคำถามหรือข้อสงสัยเกี่ยวกับบริการของเรา โปรดอย่าลังเลที่จะติดต่อเรา
                                เราพร้อมที่จะให้คำปรึกษาและตอบทุกข้อสงสัยของคุณ"
                            </h5>
                        </div>
                        <div class="">
                            <div class="d-flex">
                                <a class="btn btn-dark btn-lg-square rounded-circle me-2"
                                    href="https://www.facebook.com/profile.php?id=61572324180195"><i
                                        class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <h5 class="text-dark"><b>FirstShare: Contemporary Conference Platform</b> </h5>
                    <hr>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-dark btn-lg-square rounded-circle p-4"><i class="fa fa-home text-white"></i></div>
                        <div class="ms-4">
                            <h4>ที่อยู่</h4>
                            <p class="mb-0">222 มหาวิทยาลัยวลัยลักษณ์ ตำบล ไทยบุรี อำเภอท่าศาลา นครศรีธรรมราช 80160</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-dark btn-lg-square rounded-circle p-2"><i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-4">
                            <h4>เบอร์ติดต่อ</h4>
                            <p class="mb-0">0628919793 </p>
                               <p class="mb-0">คุณธัญญาภัสร์ โรจน์รุ่งนิธิคุณ </p>
                               <p class="mb-0">0896577163 </p>
                            <p class="mb-0">คุณโกสินธุ์ ศิริรักษ์ </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-dark btn-lg-square rounded-circle p-2"><i
                                class="fa fa-envelope-open text-white"></i></div>
                        <div class="ms-4">
                            <h4>อีเมล</h4>
                            <p class="mb-0">firstshare2025@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
