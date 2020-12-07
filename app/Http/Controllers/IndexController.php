<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Product;

class IndexController extends Controller
{

    public function main(){
        return view('welcome');
    }
    public function sermons(){
        return view('sermons');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }

    
    public function search(Request $request){
        $query = $request['query'];

        // get all product that have matched name or description with the search query
        $results = Product::where('name', 'LIKE', "%$query%") 
                -> orWhere('desc', 'LIKE', "%$query%")->distinct()->get();

        return view('search_results',compact('results'));
    }

    public function edit($id){
        return $id;
    }

    public function delete($id){

    }
}
