<?php

namespace laravel_project\Http\Controllers;
use Illuminate\Http\Request;
use laravel_project\Articles;

class ArticlesController extends Controller
{   public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    public function index(Request $request)
    {
        //$activeArticle = Articles::published()->get();
        //$inactiveArticle = Articles::draft()->get();
        $userId = $request->user();
        //dd($userId->id);
        if ($userId ===  null ) {
            $articles = Articles::all();
        }else {
            $articles = Articles::where('user_id',$userId->id)->get();
            //dd($articles);
            //dd(Articles::where('user_id',$userId->id)->first());
            //dd( Articles::where('user_id',$userId)->first());
            //dd('hi');
        }
        //return view('articles/index', compact('activeArticles', 'inactiveArticles'));
        return view('articles/index', compact('articles'));
    }
    public function create(){
        $articles = Articles::all();
        return view('articles/create', compact($articles));
    }
    public function store()
    {
        $data = request()->validate([
            'title'=>'required|min:3',
            'content'=>'required',
            'publish' =>'required',
            'slug'=>'required'
        ]);

        $article = Articles::create($data);
        // $article = new Articles();
        // $article->title = request('title');
        // $article->content = request('content');
        // $article->publish = request('publish');
        // $article->save();

        return redirect('articles');
    }
    public function show($slug){
        $article = Articles::where('slug', (int)$slug)->firstorFail();
        //dd($article);
        //$article = $article[0];
        // dd($article[0]);
        return view('articles/show', compact('article'));
    }
    public function edit(Articles $article){
        //using model route binding here
        return view('articles/edit', compact('article'));
    }

    public function update(Articles $article){
        //dd($article);
        //dd($article->id);
        $data = request()->validate([
            'title'=>'required|min:3',
            'content'=>'required',
            'publish' =>'required',
        ]);

        $article->update($data);
        //dd($article->slug);
        return redirect('articles/' .$article->slug);
    }

    public function destroy(Articles $article)
    {
        $article->delete();
        return redirect('articles');
    }
}
