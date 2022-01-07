<?php

namespace App\Modules\Thantai\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Thantai\Model\thantai;
use Illuminate\Support\Facades\Session;
use App\connect;

class ThantaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api(Request $request)
    {
        
    }
    public function index(Request $request)
    {
        return view('Thantai::index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        echo "<script>console.log('test');</script>";

        

        $input = $request->all();

        var_dump($input);
        //echo "<script>console.log(" + $input + ");</script>";

        var_dump($request->name);

        $username = $request->name;
        $address = $request->address;
        $telephonenumber = $request->telephonenumber;
        $date = $request->date;
        $branch = $request->branch;
        $textarea = $request->textarea;
        $qty_input = $request->qty_input;

        $req_param = "{
            'fullname': '$username',
            'address': '$address',
            'phone': '$telephonenumber',
            'deliverdate': '$date',
            'branch': ' $branch',
            'message':'$textarea',
            'quantity':'$qty_input'
        }";
        echo "$req_param";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://118.70.146.150:8096/order/push',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $req_param,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        echo $response;
        echo '"fullname": "$username"';

        curl_close($curl);
        // echo $response;
        // thantai::store($input);
        
        return redirect()->back()->with('thantai', 'Đặt thành công');

       
    }



    public function postVali(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|unique:posts|max:255|alpha',
            'address' => 'required|max:255',
            'telephonenumber' => 'required|max:11',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
    // public function error_page(){
    //     return view('mommo.404');
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
