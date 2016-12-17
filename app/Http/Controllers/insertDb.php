<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use DB;
use Weboap\Visitor\Visitor;


class insertDb extends Controller
{
    public function show(Request $request){
        $this->validate($request,[
           'name'=>'required',
           'phone'=>'required',
        ]);
        $name=$request->name;
        $phone=$request->phone;
        //insert
      //  DB::update('insert into tbl_test(name, phone) values (?,?)', array($name, $phone));
        DB::table('tbl_test')->insert(
            ['name' => $name, 'phone' => $phone]
        );
        return redirect('showlist');
      //  $posts = DB::table('tbl_test')->get();
       // $c = DB::table('tbl_test')->count();
      //  return view("lists",["posts"=>$posts],["c"=>$c]);
        //update

//        DB::table('tbl_test')
//            ->where('id', 1)
//            ->update(['name' => $name]);
//        return view('list');
        //
        //delete
       // DB::table('tbl_test')->where('id', '>', 1)->delete();

        //
    }
    public function showList(){

        $posts = DB::table('tbl_test')->get();
        $c = DB::table('tbl_test')->count();
        $u=Visitor::log();

       // return $u;
         //return view("lists",["posts"=>$posts],["c"=>$c]);
    }



}
