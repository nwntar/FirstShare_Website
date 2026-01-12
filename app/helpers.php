<?php

if (!function_exists('convertNumberToThaiText')) {
    function convertNumberToThaiText($number) {
        $txtnum1 = ['ศูนย์', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า', 'สิบ'];
            $txtnum2 = ['', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน'];
        
            if (is_null($number) || !is_numeric($number)) {
                return 'ข้อมูลไม่ถูกต้อง';
            }
        
            $number = str_replace(",", "", $number);
            $number = str_replace(" ", "", $number);
            $number = str_replace("บาท", "", $number);
            $number = explode(".", $number);
        
        
            if (sizeof($number) > 2) {
                return 'ทศนิยมมากเกินไป';
            }
        
            $strlen = strlen($number[0]);
            $convert = '';
            for ($i = 0; $i < $strlen; $i++) {
                $n = substr($number[0], $i, 1);
                if ($n != 0) {
                    if ($i == ($strlen - 1) && $n == 1) {
                        $convert .= 'เอ็ด';
                    } elseif ($i == ($strlen - 2) && $n == 2) {
                        $convert .= 'ยี่';
                    } elseif ($i == ($strlen - 2) && $n == 1) {
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
                        if ($i == ($strlen - 1) && $n == 1) {
                            $convert .= 'เอ็ด';
                        } elseif ($i == ($strlen - 2) && $n == 2) {
                            $convert .= 'ยี่';
                        } elseif ($i == ($strlen - 2) && $n == 1) {
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

