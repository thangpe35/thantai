<?php

namespace App\Modules\Thantai\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Thantai\Model\thantai;
use Illuminate\Support\Facades\Session;
use App\connect;
use Exception;

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
        $api = new connect();
        {
            
            $input = $request->all();
            $validator = Validator::make($input, [
                'name' => 'required|unique:posts|max:255|alpha',
                'address' => 'required|max:255',
                'telephonenumber' => 'required|max:11',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                die;
            }
        } 
        try {
            $req_param = [
                'fullname' => $request->name,
                'address' => $request->address,
                'phone' => $request->telephonenumber,
                'deliverdate' => date('d/m/Y h:i:s', strtotime($request->date)),
                'branch' => $request->branch,
                'message' => $request->textarea,
                'quantity' => $request->qty_input
            ];
            $response = json_decode($api->apipost("http://118.70.146.150:8096/order/push", json_encode($req_param)));
            if ($response->resultCode != 000) {
                return redirect()->back()->with("error", "Lỗi không đặt được sản phẩm");
                // dd("looix");
            } else {
                return redirect()->back()->with("success", "Đặt hàng thành công");
                // dd("ok");
            }
        } catch (Exception $e) {
            return redirect()->back()->with("warning", "Hệ thống đang bận");
        }
    }

    // public function postVali(Request $request)
    


    // }
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
