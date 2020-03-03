<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate_data=Category::get();
        $data=$this->createTree($cate_data);
        return view('category.index',['cate_data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate_data=Category::get();
        $data=$this->createTree($cate_data);
        return view('category.create',['cate_data'=>$data]);
    }

    function createTree($p_data,$p_id=0,$level=1){
            if(!$p_data){
                return;
            }

            static $cateInfo=[];
            foreach($p_data as $k=>$v){
                if($v->p_id==$p_id){
                    $v->level=$level;
                    $cateInfo[]=$v;
                    $this->createTree($p_data,$v['cate_id'],$v['level']+1);

                }
            }
            return $cateInfo;
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
       $res=Category::insert($data);
       if($res){
          return redirect('/category');
       }
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
        $res=Category::where("cate_id",$id)->first();
        $cate=Category::all();
         // dd($data);
       $cate=$this->createTree($cate);
        return view('category.edit',['res'=>$res,'cate'=>$cate]);
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
        $res=Category::where('cate_id',$id)->update($data);
        if($res!==false){
            return redirect('/category');
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
        $res=Category::destroy($id);
        if($res){
            return redirect('category');
        }
    }
}
