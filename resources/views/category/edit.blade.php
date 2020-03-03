<center>
    <form action="{{url('category/update/'.$res->cate_id)}}" method='post'>
    @csrf
    <h2>修改分类</h2>
        <table border=1>
            <tr>
                <td>分类名称</td>
                <td>
                    <input type='text' name='cate_name' value="{{$res->cate_name}}">
                </td>
            </tr>
           <tr>
               <td>所属父级分类</td>
               <td>
               <select name="p_id">
               <option value="0">请选择</option>
               @foreach($cate as $v)
               <option value='{{$v->cate_id}}' @if($v->p_id==$res->p_id) selected @endif>{!! str_repeat('&nbsp;&nbsp;',$v['level']*3) !!}{{$v->cate_name}}
               </option>
               @endforeach
               </select>
               </td>
           </tr>
            <tr>
                <td>
                    <input type='submit' value='修改'>
                </td>
            </tr>
        </table>
    </form>
</center>