<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // $data = DB::table('users')
        //     ->select('users.id','users.name','users.email')
        //     ->where('email', 'like', '%@gmail.com')
        //     ->get();

        // dd($data);

        // $array = [2, 4, 6, 7, 2];

        // $output = [];

        // foreach ($array as $key => $value) {
        //     if (!in_array($value,$output)) {
        //         $output[] = $value;
        //     }
        //     else {
        //         dd('Duplicate found:' . $value);
        //     }
        // }

        // dd($output);


        // $inputArray = ['Delhi', 'Capital', 'Of', 'India'];

        
        // $outputArray = array_map( function ($value) {
        //     return lcfirst($value);
        // },$inputArray);

        // dd($outputArray);

        // $newArray = [];

        // foreach($inputArray as $key => $value) {
        //     $newArray[] = lcfirst($value);
        // }

        // dd($newArray);


        // $input = [2, 9, 4, 6, 8, 88, 63, 93, 3, 7, 5, 2, 3, 6, 88, 43, 63, 8, 7, 9];

        // $output = [];

        // foreach ($input as $key => $value) {
        //     if ($value > 10) {
        //         $isOdd = $value % 2 == 0 ? false : true;
        //     } else {
        //         $isOdd = false;
        //     }

        //     if (!in_array($value, $output) && $isOdd == false) {  
        //         $output[] = $value;
        //     }
        // }

        // // dump($output);

        // for ($i = 0; $i < count($output);  $i++) {
        //     for ($j = 0; $j < count($output); $j++) {
        //         if ($output[$i] > $output[$j]) {
        //             $temp = $output[$i];
        //             $output[$i] = $output[$j];
        //             $output[$j] = $temp;
        //         }
        //     }
        // }

        // dd($output);
        
        
        // $array = [1, 1, 1, 2, 2, 2, 2, 3, 3, 4];
    // $output = [];

    // // Count the number of occurrences
    // foreach ($array as $value) {
    //     if (!isset($output[$value])) {
    //         $output[$value] = 1;
    //     } else {
    //         $output[$value]++;
    //     }
    // }

    // // Reverse the array
    // for ($i = count($array) - 1; $i >= 0; $i--) {
    //     $output[] = $array[$i];
    // }

    // dd($output);

        return view('welcome');
    }
}
