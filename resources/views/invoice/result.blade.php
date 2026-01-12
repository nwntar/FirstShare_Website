<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ URL::asset('img/logotop.png') }}" type="image/png">
    <title>FirstShare</title>
    <meta name="author" content="">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mitr:400|Pridi:300|Prompt" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href={{ URL::asset('pdf/css/bootstrap.min.css') }} />
    <link rel="stylesheet" type="text/css" href={{ URL::asset('pdf/css/stylesheet.css') }} />
    <link rel="stylesheet" type="text/css" href={{ URL::asset('pdf/css/print.css') }} />
    <?php
    if (!function_exists('convertNumberToThaiText')) {
        function convertNumberToThaiText($number)
        {
            $txtnum1 = ['ศูนย์', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า', 'สิบ'];
            $txtnum2 = ['', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน'];
    
            if (is_null($number) || !is_numeric($number)) {
                return 'ข้อมูลไม่ถูกต้อง';
            }
    
            $number = str_replace(',', '', $number);
            $number = str_replace(' ', '', $number);
            $number = str_replace('บาท', '', $number);
            $number = explode('.', $number);
    
            if (sizeof($number) > 2) {
                return 'ทศนิยมมากเกินไป';
            }
    
            $strlen = strlen($number[0]);
            $convert = '';
            for ($i = 0; $i < $strlen; $i++) {
                $n = substr($number[0], $i, 1);
                if ($n != 0) {
                    if ($i == $strlen - 1 && $n == 1) {
                        $convert .= 'เอ็ด';
                    } elseif ($i == $strlen - 2 && $n == 2) {
                        $convert .= 'ยี่';
                    } elseif ($i == $strlen - 2 && $n == 1) {
                        $convert .= '';
                    } else {
                        $convert .= $txtnum1[$n];
                    }
                    $convert .= $txtnum2[$strlen - $i - 1];
                }
            }
    
            $convert .= 'บาท';
    
            if (!isset($number[1])) {
                $convert .= 'ถ้วน';
            } else {
                $strlen = strlen($number[1]);
                for ($i = 0; $i < $strlen; $i++) {
                    $n = substr($number[1], $i, 1);
                    if ($n != 0) {
                        if ($i == $strlen - 1 && $n == 1) {
                            $convert .= 'เอ็ด';
                        } elseif ($i == $strlen - 2 && $n == 2) {
                            $convert .= 'ยี่';
                        } elseif ($i == $strlen - 2 && $n == 1) {
                            $convert .= '';
                        } else {
                            $convert .= $txtnum1[$n];
                        }
                        $convert .= $txtnum2[$strlen - $i - 1];
                    }
                }
                $convert .= 'สตางค์';
            }
    
            return $convert;
        }
    }
    ?>
    <style>
        /* Styles for printing */
        @media print {
            #printButton {
                display: none;
            }

            /* บังคับให้สีพื้นหลังและสีข้อความถูกนำมาในหน้าเอกสารที่พิมพ์ */
            thead {
                background-color: #d83847 !important;
                color: white !important;
            }

            /* หากมีองค์ประกอบอื่นที่ต้องการปรับแต่ง */
            th,
            td {
                border: 1px solid #000 !important;
            }

            /* บังคับการแสดงสีพื้นหลังและสีข้อความ */
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }

        /* General Styles */
        .rounded-border {
            display: inline-block;
            padding: 10px 20px;
            border: 1px solid #000;
            /* สีของกรอบ */
            border-radius: 15px;
            /* ทำให้มุมโค้งมน */
            background-color: #f9f9f9;
            /* สีพื้นหลัง */
        }

        .rounded-border1 {


            border: 1px solid #000;
            /* สีของกรอบ */

            /* ทำให้มุมโค้งมน */
            background-color: #f9f9f9;
            /* สีพื้นหลัง */
        }

        /* ปรับขนาดกระดาษให้เป็น A4 */

        @page {
            size: A4;
            margin: 20mm;
            /* ปรับขนาด margin ตามที่คุณต้องการ */
        }

        .image-container img {
            max-width: 20%;
            max-height: 20%;
            width: auto;
            height: auto;
        }
    </style>
</head>
@php $counter = 1 @endphp
{{-- @dump($data) --}}

<body>
    <!-- Container -->
    <div class="container-fluid invoice-container">
        <button id="printButton" class="btn btn-outline-danger w-20 py-2"
            onclick="window.print();">พิมพ์หน้านี้</button>

        <div class="image-container text-center">
            <img src="{{ URL::asset('img/logo1.png') }}" alt="Logo">
        </div>
        <div class=" text-center">

        </div>
        <main class="px-4">
            <div class="row align-items-center mb-2">
                <div class="col-sm-12 text-center text-sm-start">

                    <h5 class="mb-1">FirstShare</h5>
                    <p style="font-size: 12px; margin-bottom: 2px;">222 มหาวิทยาลัยวลัยลักษณ์ ตำบล ไทยบุรี อำเภอท่าศาลา
                        นครศรีธรรมราช 80160</p>
                    <p style="font-size: 12px; margin-bottom: 0;">เบอร์ติดต่อ: 0628919793</p>
                    <p style="font-size: 12px; margin-bottom: 0;">เลขประจำตัวผู้เสียภาษี: 099-4-00018994-0</p>

                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-sm table-bordered border-dark" style="font-size: 13px">
                    <tbody>
                        <tr>
                            <td width="">
                                <p class=" mb-0">ชื่อลูกค้า: {{ $data['customer'] }}</p>
                                <p class=" mb-0">เลขประจำตัวผู้เสียภาษี: {{ $data['tex'] }}</p>
                                <p class=" mb-0">ที่อยู่: {{ $data['address'] }}</p>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <table class="table table-sm table-bordered border-dark" style="font-size: 13px">
                    <thead class="text-center" style="background-color: #d83847; color: white;">
                        <tr>
                            <th width="10%" height="30">ลำดับ</th>
                            <th width="70%">รายการ</th>
                            <th width="20%">ราคา</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @if ($data['Package_1_1'] != 0)
                            <tr>
                                <td class="text-center">{{ $counter++ }}</td> <!-- ใช้ตัวแปรนับลำดับ -->
                                <td style="font-weight: bold;">Package 1 เว็บไซต์หลักงานประชุมวิชาการ</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td> <!-- แถวเปล่าสำหรับรายละเอียด -->
                                <td style="font-weight: bold;">- เว็บไซต์หลักงานประชุมวิชาการ</td>
                                <td class="text-center">{{ number_format(25000) }}</td>
                            </tr>
                            @if ($data['Package_1_2'] != 0)
                                <tr>
                                    <td class="text-center"></td> <!-- แถวเปล่าสำหรับรายละเอียด -->
                                    <td style="font-weight: bold;">- ระบบลงทะเบียนงานประชุมวิชาการ</td>
                                    <td class="text-center">{{ number_format(10000) }}</td>
                                </tr>
                            @endif
                        @elseif ($data['Package_1_2'] != 0)
                            <tr>
                                <td class="text-center">{{ $counter++ }}</td> <!-- ใช้ตัวแปรนับลำดับ -->
                                <td style="font-weight: bold;">Service 1 เว็บไซต์หลักงานประชุมวิชาการ</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td> <!-- แถวเปล่าสำหรับรายละเอียด -->
                                <td style="font-weight: bold;">- ระบบลงทะเบียนงานประชุมวิชาการ</td>
                                <td class="text-center">{{ number_format(10000) }}</td>
                            </tr>
                        @endif

                        @if ($data['Package_2_1'] != 0)
                            <tr>
                                <td class="text-center"><?php echo $counter++; ?></td> <!-- ใช้ตัวแปรนับลำดับ -->
                                <td style="font-weight: bold;">Service 2 ระบบ Submission และ ประเมินบทความ</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td> <!-- ใช้ตัวแปรนับลำดับ -->
                                <td style="font-weight: bold;">- {{ $data['Package_2_1'] }}</td>
                                <td class="text-center">{{ number_format($data['Package_2_1_p']) }}</td>
                            </tr>
                            <tr>
                                <td class="text-center"></td> <!-- ใช้ตัวแปรนับลำดับ -->
                                <td style="font-weight: bold;">- {{ $data['Package_2_2'] }}</td>
                                <td class="text-center">{{ number_format($data['Package_1_2_p']) }}</td>
                            </tr>
                        @endif
                        @if ($data['Package_3_1'] != 0)
                            <tr>
                                <td class="text-center"><?php echo $counter++; ?></td> <!-- ใช้ตัวแปรนับลำดับ -->
                                <td style="font-weight: bold;">
                                    Service 3 ระบบการจัดการบทความ และการ Online 800 บาท ต่อ บทความ</td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td> <!-- ใช้ตัวแปรนับลำดับ -->
                                <td style="font-weight: bold;">- {{ $data['Package_3_1'] }}</td>
                                <td class="text-center">{{ number_format($data['Package_3_1_p']) }}</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-8">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered border-dark"
                            style="font-size: 13px; table-layout: auto; width: 100%;">
                            <tbody class="align-middle">
                                <tr style="background-color: rgb(235, 235, 235)">
                                    <th class="text-" style="width: 40%;">จำนวนเงินทั้งสิ้น(ตัวหนังสือ)</th>
                                    <th class="text-" style="width: auto;">
                                        {{ convertNumberToThaiText($data['totalPrice']) }} </th>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-4">
                    <!-- เนื้อหาคอลัมน์ขวา -->
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered border-dark"
                            style="font-size: 13px; table-layout: auto; width: 100%;">
                            <tbody class="align-middle">
                                <tr style="background-color: rgb(235, 235, 235)">
                                    <th class="text-" style="width: auto;">รวมเป็นเงิน (ก่อน Vat)</th>
                                    <th class="text-" style="width: auto;">
                                        {{ number_format($data['totalPrice_Novat']) }}</th>
                                </tr>
                                <tr style="background-color: rgb(235, 235, 235)">
                                    <th class="text-" style="width: auto;">ภาษีมูลค่าเพิ่ม</th>
                                    <th class="text-" style="width: auto;"> {{ number_format($data['vat']) }}</th>
                                </tr>
                                <tr style="background-color: rgb(235, 235, 235)">
                                    <th class="text-" style="width: auto;">จำนวนเงินทั้งสิ้น</th>
                                    <th class="text-" style="width: auto;"> {{ number_format($data['totalPrice']) }}
                                    </th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="table-responsive">
                <table class="table table-sm table-bordered border-dark" style="font-size: 13px">
                    <tbody>
                        <tr>
                            <td width="50%">
                                <p class="text-center  mt-4 mb-0"> <br>
                                    ------------------------------------------</p>
                                <p class="text-center mb-0">ผู้สั่งชื้อ</p>
                                <p class="text-center mb-0">วันที่_ _ _ _ _ _ _ _ _ _ _ _ _ _</p>
                            <td width="50%">
                                <p class="text-center  mt-4 mb-0"> <br>
                                    ------------------------------------------</p>
                                <p class="text-center mb-0">ผู้มีสิทธิ์ลงนาม</p>
                                <p class="text-center mb-0">Date ......... / ......... / .........</p>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="3" class="text-center " style="background-color: rgb(235, 235, 235)">
                                <p style="font-size: 12px; margin-bottom: 1px;">222 มหาวิทยาลัยวลัยลักษณ์ ตำบล ไทยบุรี
                                    อำเภอท่าศาลา จังหวัดนครศรีธรรมราช 80160</p>
                            </th>




                        </tr>
                    </tbody>
                </table>
            </div>
        </main>







        <script>
            //  window.print();
            document.addEventListener("keydown", function(event) {
                if (event.key === "F12" || (event.ctrlKey && event.shiftKey && event.key === "I")) {
                    event.preventDefault(); // ป้องกันการกด F12 และ Ctrl+Shift+I
                }
            });

            document.addEventListener("contextmenu", function(event) {
                event.preventDefault(); // ปิดคลิกขวา
            });
        </script>
    </div>
</body>

</html>
