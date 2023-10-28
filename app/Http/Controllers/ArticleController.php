<?php
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function Index() {
        $article = Article::all();
        return view("Article.index", ['articles'=>$article]);
    }
    public function Create() { return view("Article.create"); }
    public function Store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        $file = $request->file('thumbnail');
        $file_name = rand(1, 999).'-'.$file->getClientOriginalName();
        $path = 'images';
        $file->move($path, $file_name);
        Article::create([
            'title'   => $title,
            'thumbnail' => $file_name,
            'description' => $description
        ]);
        return redirect('/index');
    }

    public function Update($paramId)
    {
        $article = Article::findOrFail($paramId);
        return view("Article.update", ['article'=>$article]);
    }
    public function UpdateSubmit(Request $id) {
        $_id         = $id->input('id');
        $title       = $id->input('title');
        $description = $id->input('description');

        $file = $id->file('thumbnail');
        $file_name = rand(1, 999).'-'.$file->getClientOriginalName();
        $path = 'images';
        $file->move($path, $file_name);

        $article = Article::find($_id);
        $article->title = $title;
        $article->thumbnail = $file_name;
        $article->description = $description;
        $article -> save();

        return redirect('/index');
    }

    public function Delete($id)
    {
        Article::where('id', $id)->delete();
        return redirect('/index');
    }
}
