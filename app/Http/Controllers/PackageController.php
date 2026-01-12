<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    // 
    public function calculatePackage(Request $request)
    {
        // Debug: ดูค่าที่ส่งมาทั้งหมด
        //    dd($request->input('Package_2_1'),);
        //  $nn = $request->input('Package_1_1', 0);

        $totalPrice = 0;
$price_Package_3_manager = 0; 
        // Package 1
        if ($request->has('Package_1_1')) {
            $totalPrice += $request->input('Package_1_1');
        }
        if ($request->has('Package_1_2')) {
            $totalPrice += $request->input('Package_1_2');
        }

        // Package 2
        if ($request->has('Package_2_2')) {
            $Package_2_2 = '';
            if ($request->input('Package_2_2') == '1000') {
                $Package_2_2 = 'ผู้ประเมิน 1 คน 1000 บาท/บทความ';
            } elseif ($request->input('Package_2_2') == '1500') {
                $Package_2_2 = 'ผู้ประเมิน 2 คน 1500 บาท/บทความ';
            } elseif ($request->input('Package_2_2') == '2000') {
                $Package_2_2 = 'ผู้ประเมิน 3 คน 2000 บาท/บทความ';
            }
        }

        if ($request->has('Package_2_1')) {
            $price_Package_2_manager = 0;

            if ($request->input('Package_2_1') == '5000') {
                $Package_2_1 = 'ค่าบริหารจัดการ 1 - 30 บทความ ';
                $Package_2_1_p = 30 * $request->input('Package_2_2');
                $price_Package_2_manager = 30 * $request->input('Package_2_2') + 5000;
            } elseif ($request->input('Package_2_1') == '10000') {
                $Package_2_1 = 'ค่าบริหารจัดการ 31 - 50 บทความ ';
                $Package_2_1_p = 50 * $request->input('Package_2_2');

                $price_Package_2_manager = 50 * $request->input('Package_2_2') + 10000;
            } elseif ($request->input('Package_2_1') == '15000') {
                $Package_2_1 = 'ค่าบริหารจัดการ 51 - 75  บทความ ';
                $Package_2_1_p = 75 * $request->input('Package_2_2');

                $price_Package_2_manager = 75 * $request->input('Package_2_2') + 15000;
            } elseif ($request->input('Package_2_1') == '20000') {
                $Package_2_1 = 'ค่าบริหารจัดการ 76 - 100 บทความ ';
                $Package_2_1_p = 100 * $request->input('Package_2_2');

                $price_Package_2_manager = 100 * $request->input('Package_2_2') + 20000;
            } elseif ($request->input('Package_2_1') == '25000') {
                $Package_2_1 = 'ค่าบริหารจัดการ 101 - 150  บทความ ';
                $Package_2_1_p = 150 * $request->input('Package_2_2');

                $price_Package_2_manager = 150 * $request->input('Package_2_2') + 25000;
            } elseif ($request->input('Package_2_1') == '30000') {
                $Package_2_1 = 'ค่าบริหารจัดการ 151 - 200 บทความ ';
                $Package_2_1_p = 200 * $request->input('Package_2_2');

                $price_Package_2_manager = 200 * $request->input('Package_2_2') + 30000;
            } elseif ($request->input('Package_2_1') == '35000') {
                $Package_2_1 = 'ค่าบริหารจัดการ 201 - 250  บทความ ';
                $Package_2_1_p = 250 * $request->input('Package_2_2');

                $price_Package_2_manager = 250 * $request->input('Package_2_2') + 35000;
            } elseif ($request->input('Package_2_1') == '40000') {
                $Package_2_1 = 'ค่าบริหารจัดการ 251 - 300  บทความ ';
                $Package_2_1_p = 300 * $request->input('Package_2_2');

                $price_Package_2_manager = 300 * $request->input('Package_2_2') + 40000;
            } elseif ($request->input('Package_2_1') == '45000') {
                $Package_2_1 = 'ค่าบริหารจัดการ มากกว่า 300 บทความ ';
                $Package_2_1_p = 350 * $request->input('Package_2_2');

                $price_Package_2_manager = 350 * $request->input('Package_2_2') + 45000;
            }

            $totalPrice += $price_Package_2_manager;
        }

        // Package 3
        if ($request->has('Package_3_1')) {
            $price_Package_3_manager = 0;
            $Package_3 =  $request->input('Package_3_1');
            $price_Package_3_manager = $Package_3 * 800;
            $Package_3_1 = 'จำนวน ' . $Package_3.' บทความ ';



            $totalPrice += $price_Package_3_manager;
        }

        // Calculate VAT
        $vat = $totalPrice * 0.07;
        $totalPrice_Novat = $totalPrice - $vat;

        $data = [
            'customer' => $request->input('customer'),
            'tex' => $request->input('tex'),
            'address' => $request->input('address'),
            'Package_1_1' => $request->input('Package_1_1', 0),
            'Package_1_2' => $request->input('Package_1_2', 0),

            'Package_2_1' =>  $Package_2_1 ?? 0,
            'Package_2_1_p' => $request->input('Package_2_1', 0),

            'Package_2_2' =>  $Package_2_2 ?? 0,
            'Package_1_2_p' => $Package_2_1_p ?? 0,


            'Package_3_1' => $Package_3_1 ?? 0,
            'Package_3_1_p' => $price_Package_3_manager,
            'Package_3_1_m' => $Package_3_1_m ?? 0,
            'Package_a' => $Package_a ?? 0,
            'Package_html' => $Package_html ?? 0,
            'vat' => $vat,
            'totalPrice_Novat' => $totalPrice_Novat,
            'totalPrice' => $totalPrice,
        ];



        return view('invoice.result', ['data' => $data]);
        //return view('invoice.result', $data);
    }
}
