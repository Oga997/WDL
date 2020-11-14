<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Books;

class BooksController extends Controller
{
public function bookindex()
    {
    	$books = Books::all();
        return view('admin.books')->with('books',$books);
    }

   public function bookstore(Request $request) 
   {
$filenameWithExt = $request->file('bk_pd')->getClientOriginalName();
$filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
$extension =  $request->file('bk_pd')->getClientOriginalExtension();
$fileNameToStore =$filename.'.'.$extension;
$path = $request->file('bk_pd')->storeAs('pdf',$fileNameToStore);

   	$books = new Books();
   	$books->bk_nm = $request->input('bk_nm');
   $books->bk_catg = $request->input('bk_catg');
 $books->bk_aut = $request->input('bk_aut');
 $books->bk_pd = $fileNameToStore;
$books->save();
return redirect('/books')->with('status','Your  Book is Added');
   }



public function bookedit($id)
    {
    	$books	 = Books::findorFail($id);
       return view('admin.Books.edit')->with('books',$books);
    }


public function bookupdate(Request $request,$id)
    {
    	$books	 = Books::findorFail($id);
       	$books->bk_nm = $request->input('bk_nm');
   		$books->bk_catg = $request->input('bk_catg');
 		$books->bk_aut = $request->input('bk_aut');
 		$books->bk_pd = $request->input('bk_pd');
 		$books->update();
return redirect('books')->with('status','Your  Book is Updated');
    }

    public function bookdelete($id)
    {
    	$books	 = Books::findorFail($id);
        $books->delete();
	return redirect('books')->with('status','Your data is Deleted');
}


}
