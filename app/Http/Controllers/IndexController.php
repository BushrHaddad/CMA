<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Product;
use DB;

class IndexController extends Controller
{

    public function __construct(){}
    
    public function main(){
        return view('welcome');
    }

    public function jesus(){
        return view ('know_jesus');
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

    // get all topics 
    public function all_topics(){

        $entries = DB::table('holy_bible')
        ->addSelect(DB::raw('testament'))    
        ->addSelect(DB::raw('book'))
        ->addSelect(DB::raw('chapter'))
        ->addSelect(DB::raw('COUNT("verse") as number_verses'))
            ->groupBy('testament','book','chapter') 
            ->orderBy('testament_nu', 'asc')
            ->orderBy('book_no', 'asc')
            ->orderBy('chapter', 'asc')
            ->get();

        foreach($entries as $entry)
        {
            $results[strval($entry->testament)][strval($entry->book)][intval(strval($entry->chapter))] = strval($entry->number_verses); 
        }

      
        // echo json_encode(array($results));
        // return $results;      
        return view('topics',compact('results'));

    }

    // go for specific resource {Hymn, Sermon, Article, and other}
    public function show_resource($id){
        $result = Product::where('id', $id)->first();
        return view ('resource', compact('result'));  
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
                -> orWhere('desc', 'LIKE', "%$query%")->distinct()->paginate(10);
        return view('search_results',compact('results'));
    }

    public function edit($id){
        return $id;
    }

    public function delete($id){

    }
}
