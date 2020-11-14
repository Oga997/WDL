<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\News;

class NewsController extends Controller
{
    public function index()
    {
    	$news = News::all();
        return view('admin.news')->with('news',$news);
    }

   public function store(Request $request) 
   {
   	$news = new News();

   	$news->title = $request->input('title');
   $news->nop = $request->input('nop');
 $news->description = $request->input('description');
$news->save();
return redirect('/news')->with('status','Your News is Added');


   }

public function edit($id)
    {
    	$news	 = News::findorFail($id);
       return view('admin.News.edit')->with('news',$news);
    }
    
public function update(Request $request,$id)
    {
    	$news	 = News::findorFail($id);
       	$news->title = $request->input('title');
   		$news->nop = $request->input('nop');
 		$news->description = $request->input('description');
 		$news->update();
return redirect('news')->with('status','Your News is Updated');
    }

    public function delete($id)
    {
    	$news	 = News::findorFail($id);
        $news->delete();
	return redirect('news')->with('status','Your data is Deleted');
}

}
