@extends('layout.header')
@section('title')
FirstShare || เกี่ยวกับเรา
@endsection
@section('content')

<style>  
.image-container1 img {
    max-width: 80%;
    max-height: 80%;
    width: auto;
    height: auto;
}
</style>
<div class="container-fluid bg-breadcrumb" id="">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center " style="max-width: 900px;">
        <h4 class="text-white display-4  wow fadeInDown" data-wow-delay="0.1s"><b> ติดต่อสอบถาม </b></h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">หน้าแรก</a></li>
            <li class="breadcrumb-item active text-white">ติดต่อสอบถาม</li>
            </li>
        </ol>
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
                            "หากคุณมีคำถามหรือข้อสงสัยเกี่ยวกับบริการของเรา โปรดอย่าลังเลที่จะติดต่อเรา เราพร้อมที่จะให้คำปรึกษาและตอบทุกข้อสงสัยของคุณ"
                        </h5>
                    </div>
                    <div class="">
                        <div class="d-flex">
                            <a class="btn btn-dark btn-lg-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61572324180195"><i class="fab fa-facebook-f"></i></a>
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
                        <div class="bg-dark btn-lg-square rounded-circle p-2"><i class="fa fa-phone-alt text-white"></i></div>
                        <div class="ms-4">
                            <h4>เบอร์ติดต่อ</h4>
                            <p class="mb-0">0628919793 </p>
                               <p class="mb-0">คุณธัญญาภัสร์ โรจน์รุ่งนิธิคุณ </p>
                               <p class="mb-0">0896577163 </p>
                            <p class="mb-0">คุณโกสินธุ์ ศิริรักษ์ </p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-dark btn-lg-square rounded-circle p-2"><i class="fa fa-envelope-open text-white"></i></div>
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
       

