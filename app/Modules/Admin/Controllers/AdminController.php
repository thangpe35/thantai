<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Admin\Model\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        return view('Admin::admin');
    }

    public function add_category_product()
    {
        return view('Admin::add_category_product');
    }
    public function all_category_product()
    {
        $admin = Admin::all();
        return view('Admin::all_category_product')->with(compact('admin'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = Admin::all();
        return view('Admin::create_category_product')->with(compact('admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->nameprice = $request->nameprice;

        if ($request['image']) {
            $image = $request['image'];

            $up = $image->getClientOriginalName();
            $ext = $image->getClientOriginalExtension();

            $name = time() . '_' . $up;
            Storage::disk('public')->put($name, File::get($image));

            $admin->img = $name;
        } else {
            $admin->img = 'default.jpg';
        };

        $admin->save();

        return redirect()->back()->with('success', 'Post Insert Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin  = Admin::find($id);
        return view('Admin::create_category_product')->with(compact('admin'));
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
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->nameprice = $request->nameprice;

        if ($request['image']) {
            $image = $request['image'];

            unlink('../public/uploads/'.$request->image);

            $up = $image->getClientOriginalName();
            $ext = $image->getClientOriginalExtension();

            $name = time() . '_' . $up;
            Storage::disk('public')->put($name, File::get($image));

            $admin->img = $name;
        };
        $admin->save();
        return redirect('all_category_product')->with('success', 'Post Insert Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->back()->with('admin');
    }
}
