<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Admin::get();
        return view('admin/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except('_token');
         // 判断有误文件上传
       if($request->hasFile('admin_head')){
         $data['admin_head']=$this->upload('admin_head');
       }
       $data['password']=md5($data['password']);
       $res=Admin::insert($data);
       // dd($data);die;
       if($res){
         return redirect('admin/');
       }

    }
    /**
     * 文件上传
     */
 function upload($filename){
        // 判断上传过程是否有误
        if(request()->file($filename)->isValid()){
        // 接收值
        $photo=request()->file($filename);
        // 上传
        $store_result=$photo->store('uploads');
        return $store_result;
    }
    exit('为获取到上传文件或上传过程出');

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
            $data=Admin::find($id);
            return view('admin/edit',['data'=>$data]);
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
        $data=$request->except('_token');
         if($request->hasFile('admin_head')){
         $data['admin_head']=$this->upload('admin_head');
       }
       $res=Admin::where('admin_id',$id)->update($data);
        if($res){
         return redirect('admin/');
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
        $res=Admin::destroy($id);
        if($res){
         return redirect('admin/');
       }
    }
}
