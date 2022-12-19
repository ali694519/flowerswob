<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\flower;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Symfony\Component\HttpFoundation\Session\Session;
use Session;
class flowerController extends Controller
{
    //
    public function index(){
        return view('Admincp');
    }

    public function showProduct() {
        $flowers = flower::all();
        return view('index',compact('flowers'));
    }

    public function show($id) {
        $flower = flower::find($id);
        return view('view_flower',compact('flower'));
    }
    public function search(Request $request)
    {
        if ($request->session()->has('User')) {
        $data = flower::where('name', 'like', '%' . $request->input('query') . '%')->get();
        return view('search', compact('data'));
        }else {
           // if you dont hav your session() !!!!
           return redirect('/login');
        }
    }
    public function AddCart(Request $request) {
        if ($request->session()->has('User')) {
            $cart = new cart();
            $cart->user_id = $request->session()->get('User')['id'];
            $cart->flower_id = $request->flowe_id;
            $cart->save();
            return redirect('/');
        } else {
            // if you dont hav your session() !!!!
            return redirect('/login');
        }
    }
    public function AddCartt(Request $request,$id) {
        if ($request->session()->has('User')) {
            $cart = new cart();
            $cart->user_id = $request->session()->get('User')['id'];
            $cart->flower_id = $id;
            $cart->save();
            return redirect('/');
        } else {
            // if you dont hav your session() !!!!
            return redirect('/login');
        }
    }
   static function cartItem(){
        $userId = Session::get('User')['id'];
        return cart::where('user_id', $userId)->count();
    }

    public function cartList() {

        if(!session()->has('User')) {
            return redirect('login');
        }else {
            $userId = Session::get('User')['id'];
            $flowers = DB::table('cart')
            ->join('flowers','cart.flower_id','=','flowers.id')
            ->where('cart.user_id',$userId)
            ->select('flowers.*','cart.id as cart_id')
            ->get();

            return view('cartlist',compact('flowers'));
        }

    }

    public function reoveCart($id) {
        cart::destroy($id);
        return redirect('/');
    }
}
