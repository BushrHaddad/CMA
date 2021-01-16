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
        ->addSelect(DB::raw('testament_num'))  
        ->addSelect(DB::raw('testament')) 
        ->addSelect(DB::raw('book'))
        ->addSelect(DB::raw('book_num'))
        ->addSelect(DB::raw('chapter'))
        ->addSelect(DB::raw('COUNT("verse") as number_verses'))
            ->groupBy('testament','testament_num','book','book_num','chapter') 
            ->orderBy('testament_num', 'asc')
            ->orderBy('book_num', 'asc')
            ->orderBy('chapter', 'asc')
            ->get();

        foreach($entries as $entry)
        {
            // $results[strval($entry->testament)]

            $results[strval($entry->testament)] ['testament_num'] = strval($entry->testament_num);
            $results[strval($entry->testament)] ['book'] [strval($entry->book)] ['book_num'] =  strval($entry->book_num);            
            $results[strval($entry->testament)] ['book'] [strval($entry->book)] [strval($entry->chapter)] = strval($entry->number_verses); 

            // intval()
        }
        // return $results;
        return view('topics',compact('results'));
    }

    // go for specific resource {Hymn, Sermon, Article, and other}
    public function show_resource($id){
        $result = Product::where('id', $id)->first();
        return view ('resource', compact('result'));  
    }

    public function scripture_result( $testament, $book, $chapter){

        // get scriptures associated with this [testament_num, book_num and chapter number] 
        $result1 = DB::table('holy_bible')
        ->addSelect(DB::raw('data_tash'))  
        ->addSelect(DB::raw('sub_tit_val'))  
        ->addSelect(DB::raw('ch_b'))  
        ->where('testament_num', $testament)
        ->where('book_num', $book)
        ->where('chapter', $chapter)->get();
        
        // get all resources that cited these scriptures
        
        // sub query to get all the verses id of these scriptures
        $sub = DB::table('holy_bible')
            ->addSelect(DB::raw('ID'))  
            ->where('testament_num', $testament)
            ->where('book_num', $book)
            ->where('chapter', $chapter)->get();

        $result2 = DB::table('product')
            -> select(['product.id', 'product.name', 'product.desc'])
            -> distinct()
            -> join('attachments', 'attachments.product_id', '=', 'product.id')
            -> whereIn('attachments.note1',function($query) use ($testament, $book, $chapter) {

                $query->select('ID')
                ->from('holy_bible')
                ->where('holy_bible.testament_num',$testament)
                ->where('holy_bible.book_num',$book)
                ->where('holy_bible.chapter',$chapter)
                ;
             
             })
            -> get();
        
        
        $result1 = json_decode($result1, true);
        $result2 = json_decode($result2, true);

        // combine result1 and result2 into res     
        $res['chapter'] = $result1;
        $res['chapter_resources'] = $result2;
        
        // return res
        return view('scripture', compact('res'));
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