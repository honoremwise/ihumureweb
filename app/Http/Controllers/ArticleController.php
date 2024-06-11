<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Article;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home','getArticle');
    }
    public function index(){
    $articles = Article::orderBy('created_at', 'desc')->get();
    return view('admin.articles', compact('articles'));
    }
    public function home(){
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('index', compact('articles'));
    }
    public function getArticle($slug){
        $article = Article::where('slug', $slug)->first();
        $articles = Article::where('category', $article->category)->get();
        return view('single_page', compact('article','articles'));
    }
    public function storeArticle(Request $request){
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
        $fileName = Auth::user()->id . '_'. $slug . $fileExtension;
        $filePath = 'images/' . $fileName;
        $file->move(public_path('images'), $fileName);
        $new_article = new Article();
        $new_article->title = $request->title;
        $new_article->contents = $request->contents;
        $new_article->slug = $slug;
        $new_article->featured_image = $filePath;
        $new_article->category = $request->category;
        $new_article->published_status = 'pending';
        $new_article->writer_id = 1;
        $new_article->save();
        // return "hihi";
        return redirect('/articles');
    }
}
