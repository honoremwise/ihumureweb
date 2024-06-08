<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Article;

class ArticleController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('register');
    // }
    //
    public function index(){
        return view('admin.new-article');
    }
    public function storeArticle(Request $request){

// return $request->all();
        $messages = [
            'title.required' => 'The title field is required.',
            'contents.required' => 'content field is required.',
            'featured_image.required' => 'The RDB certificate is required.',
            'featured_image.mimes' => 'The RDB certificate must be a file of type: pdf, jpg, jpeg, png.',
            'featured_image.max' => 'The RDB certificate may not be greater than 2048 kilobytes.',
        ];
        // Validate the request data
         $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'contents' => 'required',
            'category' => 'required|string|max:255',
            'featured_image' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ], $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $modified_title = strtolower($request->title);
        $slug = str_replace(' ', '-', $modified_title);
        $file = $request->file('featured_image');
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = '1_' . $request->business_tin_number . '_' . $request->business_telephone . '_' . $request->business_name . '_rdb_certificate.' . $fileExtension;
        $filePath = 'images/' . $fileName;
        $file->move(public_path('images'), $fileName);
        $new_article = new Article();
        $new_article->title = $request->title;
        $new_article->contents = $request->contents;
        $new_article->slug = $slug;
        $new_article->featured_image = $filePath;
        $new_article->category = $request->category;
        // $new_article->writer_id = Auth::user()->id;
        $new_article->published_status = 'pending';
        $new_article->writer_id = 1;
        $new_article->save();

        return back()->with('success', 'Image uploaded successfully.')->with('image', $new_article);
    }
}
