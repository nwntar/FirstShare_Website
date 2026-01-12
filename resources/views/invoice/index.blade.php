@extends('layout.header')
@section('title')
FirstShare || ขอใบเสนอราคา 
@endsection
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="bg-breadcrumb-single"></div>
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"><b> ระบบจัดการการประชุมวิชาการ </b></h4>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="conference_system.php">บริการ</a></li>
                <li class="breadcrumb-item active text-white">ขอใบเสนอราคา</li>
                </li>
            </ol>
        </div>
    </div>
    <div class="container-fluid  py-5">
        <div class="container py-5">

            <h5 class="text-dark text-center display-5 mb-4 ">ขอใบเสนอราคา </h5>
            <form id="registrationForm" action="/calculate-package" target="_blank" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="customer"  required id="customer" placeholder="Your Name">
                            <label for="name">ชื่อลูกค้า</label>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="form-floating">
                            <input type="number" class="form-control"  name="tex" required id="tex" placeholder="tex">
                            <label for="tex">เลขประจำตัวผู้เสียภาษี</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" required  placeholder="Leave a message here" id="address" name="address" style="height: 160px"></textarea>
                            <label for="address">ที่อยู่</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <table class="table table-bordered">
                            <thead class="bg-danger ">
                                <tr>
                                    <th style="vertical-align: middle;" class="text-white"><span style="font-size:16pt">
                                            บริการ</span></th>
                                    <th width="15%" class="text-center text-white"> <span style="font-size:16pt">
                                            ค่าบริการ</span></th>
                                    <th width="15%" class="text-center text-white"> <span style="font-size:16pt">
                                            ต้องการ</span></th>
                                  
                                </tr>
                            </thead>
                            <tbody style="font-size:14pt">
                                <tr class="bg-light">
                                    <td colspan="4" class="sub-child-1 fw-bold">Package 1
                                    เว็บไซต์หลักงานประชุมวิชาการ</td>
                                </tr>
                             
                                <tr>
                                    <td>
                                    - เว็บไซต์หลักงานประชุมวิชาการ</td>
                                    <td class="text-center">25000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_1_1" value="25000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td>
                                    - ระบบลงทะเบียนงานประชุมวิชาการ</td>
                                    <td class="text-center">10000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_1_2" value="10000"  /></td>
                                  
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="4" class="sub-child-1 fw-bold">Package 2
                                    ระบบจัดการบทความ</td>
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="4" class="sub-child-1 fw-bold">  &nbsp; &nbsp;ค่าบริหารจัดการ 
                                    </td>
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 1-30 บทความ   </td>
                                    <td class="text-center">5000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required  value="5000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 31-50 บทความ   </td>
                                    <td class="text-center">10000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required value="10000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 51-75 บทความ   </td>
                                    <td class="text-center">15000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required value="15000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 76-100 บทความ   </td>
                                    <td class="text-center">20000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required value="20000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 101-150 บทความ   </td>
                                    <td class="text-center">25000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required value="25000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 151-200 บทความ   </td>
                                    <td class="text-center">30000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required value="30000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 201-250 บทความ   </td>
                                    <td class="text-center">35000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required value="35000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 251-300 บทความ   </td>
                                    <td class="text-center">40000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required value="40000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- มากกว่า 300 บทความ   </td>
                                    <td class="text-center">45000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_1" required value="45000"  /></td>
                                   
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="4" class="sub-child-1 fw-bold"> &nbsp;&nbsp;ผู้ประเมินบทความ</td>
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- ผู้ประเมิน 1 คน/บทความ </td>
                                    <td class="text-center">1000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_2" value="1000" required /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- ผู้ประเมิน 2 คน/บทความ </td>
                                    <td class="text-center">1500 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_2" value="1500"  required/></td>
                                   
                                </tr>
                               
                                <tr>
                                    <td> &nbsp; &nbsp;- ผู้ประเมิน 3 คน/บทความ </td>
                                    <td class="text-center">2000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_2_2" value="2000" required /></td>
                                   
                                </tr>
                               
                                <tr class="bg-light">
                                    <td colspan="4" class="sub-child-1 fw-bold">Package 3
                                    ระบบจัดการ Proceedings Online (ค่าจัดรูปแบบบทความ 800/บทความ)</td>
                                </tr>
                                <tr class="bg-light">
                                    <td colspan="4" class="sub-child-1 fw-bold">  &nbsp; &nbsp;ค่าบริหารจัดการ 
                                    </td>
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 1-30 บทความ   </td>
                                    <td class="text-center">5000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="5000"   /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 31-50 บทความ   </td>
                                    <td class="text-center">10000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="10000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 51-75 บทความ   </td>
                                    <td class="text-center">15000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="15000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 76-100 บทความ   </td>
                                    <td class="text-center">20000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="20000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 101-150 บทความ   </td>
                                    <td class="text-center">25000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="25000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 151-200 บทความ   </td>
                                    <td class="text-center">30000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="30000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 201-250 บทความ   </td>
                                    <td class="text-center">35000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="35000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- 251-300 บทความ   </td>
                                    <td class="text-center">40000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="40000"  /></td>
                                   
                                </tr>
                                <tr>
                                    <td> &nbsp; &nbsp;- มากกว่า 300 บทความ   </td>
                                    <td class="text-center">45000 บาท</td>
                                    <td class="radio text-center"><input type="radio" name="Package_3_1" value="45000"  /></td>
                                   
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12 col-12">
                                                <button type="button" class="btn btn-primary rounded-pill w-100 py-3" onclick="confirmAndSubmit()">ขอใบเสนอราคา</button>
                                            </div>
                </div>
                <br>
            </form>

        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Include toastr JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
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
    </script>
         @endsection
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
    </script>



</body>

</html>