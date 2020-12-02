<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Resource;

class ResourceController extends Controller
{
    public function index(){
        $resources = Resource::all();
    }

    public function create(){

    }

    public function store(Request $request){
        // one way of storing a new resource using Eloquent Model
        // $res_title = $request->title
        // $res_date = $request->date
        // $res_preacher = $request->preacher
        // Resource::insert(['tile'=>$res_title,'date'=>$res_title,'preacher'=>$res_preacher]);

        
        // Another way is to create a new instance of section model and then save it into the database 
        // $new_resource = new Resource;
        // $new_resource->title = '';
        // $new_resource->date = '';
        // $new_resource->preacher = '';
        // $new_resource->save();

    }
    
    public function update($id){
        //update using eloquent model

        // $resource = Resource::find($id);
        // $resource->title = '';
        // $resource->save();
    }

    public function destroy($id){
        // delete a record using eloquent model
        $resource = Resource::find($id);
        $resource->delete();

        // Another way
        Resource::destroy($id);
    }

}
