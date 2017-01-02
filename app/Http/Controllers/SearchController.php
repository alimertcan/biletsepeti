<?php
namespace App\Http\Controllers;
use App\User;
use App\Role;
use App\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
class SearchController extends Controller
{
    public function getsearch()
    {
	
	return view('shop.search');
	
    }
	 public function getsearchres()
    {
	
	return view('shop.searchres');
	

    }
	
	public function postsearch(Request $request){
	$keyword=$request->input('search');
	if(isset($keyword)){
	$products=Product::where('title', 'LIKE', "%$keyword%")->get();
	}
	else{
	$products=Product::all();
	}
	// return redirect()->route('searchres', array('product' => $products));
		

        return view('shop.searchres', ['products' => $products]);
		}
	
	
	
    
   
}