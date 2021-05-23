<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Service;
// use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class ServiceCartController extends Controller
{
    public function servicecart($id){

        // // $user_info = User::all();
        // return view('frontend.layouts.servicecart');
        $service=Service::find($id);

        Cart::add([
            'id' => $id,
            'name' => $service->service_name,
            'qty' => 1,
            'price' => $service->service_price,
            'weight' => 0
        ]);

return redirect()->back();
    }

    public function viewcart()
    {
        $cartData=Cart::content();
        return view('frontend.layouts.servicecart',compact('cartData'));
    }

    public function delete($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function alldelete(){
        Cart::destroy();
        return redirect()->back();
    }
}
