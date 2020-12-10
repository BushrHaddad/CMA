<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Product;

class IndexController extends Controller
{

    public function __construct(){}
    
    public function main(){
        return view('welcome');
    }

    public function jesus(){
        return view ('resource');
    }
    
    // get all sermons and pass them to sermons view
    public function all_sermons(){
        $results = Product::where('s_list_id', '37')->paginate(4);
        return view('sermons',compact('results')); 
    }

    // get all articles and pass them to articles view
    public function all_articles(){
        // get all Articles from Product Table
        $results = Product::where('s_list_id', '33')->paginate(4);
        return view('articles',compact('results'));
    }

    // get all hymns and pass them to hymns view
    public function all_hymns(){
        // get all Hymns from Product Table
        $results = Product::where('s_list_id', '38')->paginate(9);
        return view('hymns',compact('results'));
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
