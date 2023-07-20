<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class NewsController extends Controller
{
    function index()
    {
        $news = News::all();
        return view('news_views.index', compact('news'));
    }
    function allNews()
    {
        $news = News::all();
        return view('news_views.all-news', compact('news'));
    }
    function contact()
    {
        return view('news_views.contact');
    }
    function newsdetailes()
    {
        return view('news_views.newsdetailes');
    }
    function create()
    {
        return view('news_views.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required |string',
            'description' => 'required |string',
            'image' => 'required'
        ]);

        // $name = time() . $request->image;
        // $request->file('image')->move(public_path('image'), $name);
        // $request->file('image')->saveAs('images', $name, 'public');
        $name = rand() . time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $name);
        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $name
        ]);
        return redirect()->route('home.allNews');
    }
    public function show($news)
    {
        $new = News::findorFail($news);
        $com = $new->comments;
       // $com=[];
        // foreach ($comments as $comment) {
        //     if ($comment['news_id'] == $new->id) {
        //         array_push($com, $comment);
        //     }
        // }
        return view('news_views.newsdetailes', compact('new','com'));
    }
    public function edit($news)
    {
        return view('news_views.update', [
            'news' =>  News::findorFail($news)
        ]);
    }
    public function update(Request $request, $news)
    {
        $request->validate([
            'title' => 'required |string',
            'description' => 'required |string',
            'image' => 'required'
        ]);
        $name = rand() . time() . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $name);
        $update = News::findorFail($news);
        $update->title = $request->title;
        $update->description = $request->description;
        $update->image_path = $name;
        $update->save();
        return redirect()->route('home.allNews');
    }
    public function destroy($news)
    {
        $new = News::findorFail($news);
        $new->delete();
        return redirect()->route('home.allNews');
    }
    function comment(Request $request, $id)
    {
        $request->validate([
            'name' => 'required |string',
            'comment' => 'required |string',
        ]);
        Comment::create([
            'name' => $request->name,
            'comment' => $request->comment,
            'news_id'=> $id
        ]);
       return redirect()->route('home.show',$id);
    }

}
