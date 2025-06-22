<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use App\Models\Post;
use App\Models\Country;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Country $country)
    {
        $posts = $country->posts()->with('user', 'likes', 'comments')->get();
        return view('post.index', compact('post', 'country'));
    }

    //test
    public function store(Request $request, $id)
    {

        $request->validate([
            'content' => 'required|max:255',
        ]);

 
        $country = Country::findOrFail($id);


        Post::create([
            'content' => $request->input('content'),
            'country_id' => $country->id, 
            'user_id' => Auth::id(), 
        ]);



        return redirect()->route('countries.detail', $country->id)
            ->with('success', 'Comment succesvol toegevoegd!');
    }


    public function edit(Country $country, Post $post)
    {
        return view('comments.edit', compact('country', 'post'));
    }

    public function update(Request $request, Country $country, Post $post)
    {
        $request->validate([
            'content' => 'required|max:255',
        ]);

        $post->update([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('countries.detail', $country->id)
            ->with('success', 'Comment succesvol bijgewerkt!');
    }
}
