<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res=Brand::all();
        return view('/brand.index',['res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("brand.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except("_token");
        //上传文件 
        if($request->hasFile('brand_logo')){
            $data['brand_logo']=$this->upload("brand_logo");
    }
        $res=Brand::insert($data);
        return redirect("/brand");

    }
    public function upload($filename){
        //判断上传文件是否出现错误
        if(request()->file('brand_logo')->isValid()){
            //接受值
                $photo=request()->file('brand_logo');
            //上传
                $store_result=$photo->store('brand_logo');
                return $store_result;
        }
         exit("为获取到上传文件或者上传过程出错");
    }

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
       $res=Brand::where("brand_id",$id)->first();
       return view("/brand.edit",['res'=>$res]); 
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
         $data=$request->except("_token");
        //上传文件 
        if ($request->hasFile('brand_logo')) {
            $data['brand_logo']=$this->upload("brand_logo");
    }
        $res=Brand::where("brand_id",$id)->update($data);
        if($res!==false){
            return redirect('/brand');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res=Brand::where("brand_id",$id)->delete();
        if($res){
            return redirect("/brand");
        }
    }
}
