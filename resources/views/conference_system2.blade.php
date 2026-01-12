@extends('layout.header')
@section('title')
    ระบบจัดการการประชุมวิชาการ
@endsection
@section('content')
    <div class="container-fluid bg-breadcrumb" id="service1">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"><b> ระบบจัดการการประชุมวิชาการ </b>
            </h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">หน้าแรก</a></li>
                <li class="breadcrumb-item active text-white">ระบบจัดการการประชุมวิชาการ</li>
                </li>
            </ol>
        </div>
    </div>
    <div class="container-fluid team ">
        <div class="container py-2">
            <div class="row g-5 ">
                <div class="container-fluid  py-5" id="service1">
                    <div class="container py-5">
                        <div class="row g-4 justify-content-center ">

                            <canvas id="pdf-canvas" style="border: 1px solid #ccc;"></canvas>
                            <div style="text-align: center; margin-bottom: 10px;">
                                <button class="btn btn-primary rounded-pill" id="prev-page"><i
                                        class="fas fa-arrow-alt-circle-left"></i></button>
                                <button class="btn btn-primary rounded-pill" id="next-page"><i
                                        class="fas fa-arrow-alt-circle-right"></i></button>
                                <span> <span id="page-num"></span> / <span id="page-count"></span></span>
                            </div>
                            <hr>
                            <h5 class="text-dark text-center display-5 mb-4 ">ขอใบเสนอราคา Service 2</h5>
                            <form id="registrationForm" action="/calculate-package" target="_blank" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="customer" id="customer"
                                                required placeholder="Your Name">
                                            <label for="name">ชื่อลูกค้า</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="tex" required
                                                id="tex" placeholder="tex">
                                            <label for="tex">เลขประจำตัวผู้เสียภาษี</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="address" required name="address"
                                                style="height: 160px"></textarea>
                                            <label for="address">ที่อยู่</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <table class="table table-bordered">
                                            <thead class="bg-danger ">
                                                <tr>
                                                    <th style="vertical-align: middle;" class="text-white"><span
                                                            style="font-size:16pt">
                                                            บริการ</span></th>
                                                    <th width="15%" class="text-center text-white"> <span
                                                            style="font-size:16pt">
                                                            ค่าบริการ</span></th>
                                                    <th width="15%" class="text-center text-white"> <span
                                                            style="font-size:16pt">
                                                            ต้องการ</span></th>

                                                </tr>
                                            </thead>
                                            <tbody style="font-size:14pt">
                                               
                                               
                                                <tr class="bg-light">
                                                    <td colspan="4" class="sub-child-1 fw-bold">Service 2
                                                        ระบบ Submission และ ประเมินบทความ</td>
                                                </tr>
                                                <tr class="bg-light">
                                                    <td colspan="4" class="sub-child-1 fw-bold"> &nbsp;
                                                        &nbsp;ค่าบริหารจัดการ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- 1-30 บทความ </td>
                                                    <td class="text-center">5000 บาท</td>
                                                    <td class="radio text-center"><input type="radio" required name="Package_2_1"
                                                            value="5000" /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- 31-50 บทความ </td>
                                                    <td class="text-center">10000 บาท</td>
                                                    <td class="radio text-center"><input type="radio" name="Package_2_1"
                                                            value="10000" /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- 51-75 บทความ </td>
                                                    <td class="text-center">15000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_1" value="15000" /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- 76-100 บทความ </td>
                                                    <td class="text-center">20000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_1" value="20000" /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- 101-150 บทความ </td>
                                                    <td class="text-center">25000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_1" value="25000" /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- 151-200 บทความ </td>
                                                    <td class="text-center">30000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_1" value="30000" /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- 201-250 บทความ </td>
                                                    <td class="text-center">35000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_1" value="35000" /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- 251-300 บทความ </td>
                                                    <td class="text-center">40000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_1" value="40000" /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- มากกว่า 300 บทความ </td>
                                                    <td class="text-center">45000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_1" value="45000" /></td>

                                                </tr>
                                                <tr class="bg-light">
                                                    <td colspan="4" class="sub-child-1 fw-bold">
                                                        &nbsp;&nbsp;ผู้ประเมินบทความ</td>
                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- ผู้ประเมิน 1 คน/บทความ </td>
                                                    <td class="text-center">1000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_2" value="1000" required /></td>

                                                </tr>
                                                <tr>
                                                    <td> &nbsp; &nbsp;- ผู้ประเมิน 2 คน/บทความ </td>
                                                    <td class="text-center">1500 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_2" value="1500" /></td>

                                                </tr>

                                                <tr>
                                                    <td> &nbsp; &nbsp;- ผู้ประเมิน 3 คน/บทความ </td>
                                                    <td class="text-center">2000 บาท</td>
                                                    <td class="radio text-center"><input type="radio"
                                                            name="Package_2_2" value="2000" /></td>

                                                </tr>

                                              
                                            </tbody>
                                        </table>
                                    </div>



                                    <div class="col-lg-12 col-12">
                                        <button type="button" class="btn btn-primary rounded-pill w-100 py-3"
                                            onclick="confirmAndSubmit()">ขอใบเสนอราคา</button>
                                    </div>
                                </div>
                                <br>
                            </form>



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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Include toastr JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script>
        const url = "{{ URL::asset('pdf/First-Share.pdf') }}"; // ระบุเส้นทางไฟล์ PDF
        console.log(url);
        const pdfjsLib = window['pdfjs-dist/build/pdf'];

        // ตั้งค่า worker script ให้ชี้ไปยัง CDN หรือไฟล์ในโปรเจกต์
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

        let pdfDoc = null; // เก็บไฟล์ PDF ที่โหลด
        let pageNum = 1; // หน้าปัจจุบัน
        let pageCount = 0; // จำนวนหน้าทั้งหมด
        const canvas = document.getElementById('pdf-canvas');
        const context = canvas.getContext('2d');
        // ฟังก์ชันสำหรับแสดงหน้า PDF
        function renderPage(num) {
            pdfDoc.getPage(num).then(page => {
                const desiredWidth = window.innerWidth * 0.9; // ปรับให้พอดีหน้าจอ (90% ของความกว้าง)
                const viewport = page.getViewport({
                    scale: 1
                });
                const scale = desiredWidth / viewport.width;
                const scaledViewport = page.getViewport({
                    scale
                });

                canvas.width = scaledViewport.width;
                canvas.height = scaledViewport.height;

                page.render({
                    canvasContext: context,
                    viewport: scaledViewport
                });
            });

            // อัปเดตตัวบ่งชี้หน้าปัจจุบัน
            document.getElementById('page-num').textContent = pageNum;
        }

        // โหลดไฟล์ PDF
        pdfjsLib.getDocument(url).promise.then(pdf => {
            pdfDoc = pdf;
            pageCount = pdf.numPages;

            // อัปเดตจำนวนหน้าทั้งหมด
            document.getElementById('page-count').textContent = pageCount;

            // แสดงหน้าแรก
            renderPage(pageNum);
        }).catch(error => {
            console.error('เกิดข้อผิดพลาดในการโหลดไฟล์ PDF:', error);
        });

        // การจัดการปุ่ม
        document.getElementById('prev-page').addEventListener('click', () => {
            if (pageNum <= 1) return;
            pageNum--;
            renderPage(pageNum);
        });

        document.getElementById('next-page').addEventListener('click', () => {
            if (pageNum >= pageCount) return;
            pageNum++;
            renderPage(pageNum);
        });

        function confirmAndSubmit() {
            var form = document.getElementById('registrationForm');

            // ตรวจสอบว่าฟอร์มถูกต้องหรือไม่
            if (form.checkValidity()) {
                Swal.fire({
                    title: 'คุณต้องการบันทึกข้อมูลหรือไม่?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'ใช่',
                    cancelButtonText: 'ไม่',
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            } else {
                toastr.options = {
                    positionClass: 'toast-bottom-right',
                    progressBar: true,
                    preventDuplicates: true,
                    closeButton: true,
                    timeOut: 3000,
                    extendedTimeOut: 1000,
                };
                toastr.warning('กรุณากรอกข้อมูลให้ครบ');
                // หากต้องการให้ focus ไปยังช่องข้อมูลที่ไม่ถูกกรอก
                var invalidFields = form.querySelectorAll(':invalid');
                if (invalidFields.length > 0) {
                    invalidFields[0].focus();
                }
            }
        }

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
    </script>
@endsection
