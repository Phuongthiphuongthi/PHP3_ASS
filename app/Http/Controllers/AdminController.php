<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    function admin()
    {
        return view('layout.admin.home.admin');
    }

    function logout_ad()
    {
        return view('layout.admin.home.logout');
    }

    function tableloaitin()
    {
        $data = DB::table('loai_tin')->paginate(2);
        return view('layout.admin.home.tableloaitin', compact('data'));
    }

    function tabletin()
    {
        $tin = DB::table('tin')->paginate(5);
        return view('layout.admin.home.tabletin', compact('tin'));
    }


    // loaitin
    function addloaitin()
    {

        return view('layout.admin.home.addloaitin');
    }

    function addLoaiTinPost(Request $request)
    {
        DB::table('loai_tin')->insert([
            "name" => $request->name
        ]);

        return redirect()->route('tableloaitin')->with('message', 'Thêm mới thành công');
    }


    function editloaitin($id)
    {
        $loaiTin = DB::table('loai_tin')->find($id);
        return view('layout.admin.home.editloaitin', compact('loaiTin'));
    }

    function editloaitinpost($id, Request $request)
    {
        $loaiTin = DB::table('loai_tin')
            ->where('id', $id);

        $loaiTin->update([
            "name" => $request->name
        ]);

        return redirect()->route('tableloaitin')->with('message', 'Sửa thành công');
    }



    //tin

    function addtin(Request $request)
    {
        return view('layout.admin.home.addtin');
    }

    function addTinPost(Request $request)
    {
        if ($request->hasFile('img')) { {
                $file = $request->file('img');
                $filename = time() . '.' . $file->getClientOriginalName();
                $file->storeAs('imgs', $filename);

                $data = $request->except('img');
                $data = $request->except('_token');
                $data['img'] = $filename;

                DB::table('tin')->insert($data);
                return redirect()->route('tabletin')->with('message', 'Thêm thành công');
            }
        }
    }


    function edittin($id)
    {
        $tin = DB::table('tin')->where('id', $id)->first();
        return view('layout.admin.home.edittin', compact('tin'));
    }

    function edittinpost($id, Request $request)
    {
        $tin = DB::table('tin')->where('id', $id);

        $listOne = $tin->first();
        // Xử lý hình ảnh
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('imgs/post', $fileName);

            $data = $request->except(['_method', '_token', 'img']);
            $data['img'] = $fileName;
        } else {
            $data = $request->except(['_method', '_token']);
            $data['img'] = $listOne->img;
        }

        $tin->update($data);

        return redirect()->route('tabletin')->with('message', 'Sửa thành công');
    }








    //delete
    function deleteloaitin($id)
    {
        $loaiTin = DB::table('loai_tin')
            ->where('id', $id);

        $loaiTin->delete();
        return redirect()->route('tableloaitin')->with('message', 'Xóa thành công');
    }

    function deletetin($id)
    {
        $tin = DB::table('tin')
            ->where('id', $id);

        $tin->delete();
        return redirect()->route('tabletin')->with('message', 'Xóa thành công');
    }
}
