<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\advertisements;
use App\Category;
use DB;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('pages.adminHome')->with('ad',advertisements::all());
    }
    public function user(){
        return view('admin.users')->with('user',User::all());
    }
    public function adver(){
        return view('admin.adds')->with('ad',advertisements::all());
    }
    public function category(){
        return view('admin.category')->with('cat',Category::all());
    }
    public function destroy($id){
        $u=User::find($id);
        $u->delete();
        return redirect('users')->with('success','User has been removed!');
    }
    public function deletead($id){
        $a=advertisements::find($id);
        $a->delete();
        return redirect('advertisement')->with('success','Advertisement has been removed!');
    }
    public function create(){
        $l= DB::table('categories')->latest()->first();
        if($l==null){
            $n=1;
        }else{
            $m=$l->id;
            $n=++$m;
        }
        return view('admin.create-cat')->with('id',$n);

    }
    public function createCat(Request $request){
        $this->validate($request, [
            'name' =>'required',
        ]);
        $category=new Category;
        $category->id=$request->input('id');
        $category->name=$request->input('name');
        $category->save();
        return redirect('category')->with('success', 'New Category has been created!');

    }
    public function deletecat($id){
        $c=Category::find($id);
        $c->delete();
        return redirect('category')->with('success','Category has been deleted!');
    }
    public function notify($id){
            $a=advertisements::find($id);
            $a->flag=1;
            $a->save();
            return redirect('notification')->with('success','Advertisement has been accepted!');
    }
    public function check($id){
        $a=advertisements::find($id);
        return view('admin.preview')->with('add',$a);
    }
    public function back(){
        return redirect('notification');
    }

}
