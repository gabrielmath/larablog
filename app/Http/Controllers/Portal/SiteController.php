<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Gate;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        $posts = $post::all();
//        $posts = $post->where('user_id', auth()->user()->id)->get();
        return view('portal.home.index', compact('posts'));
    }







    /*public function update($id)
    {
        $post = Post::find($id);

//        $this->authorize('updatePost', $post);

        if(Gate::denies('edit_post',$post))
            abort(403, 'Unauthorized');

        return view('update', compact('post'));
    }

    public function rolesPermissions()
    {
        echo auth()->user()->name;

        foreach (auth()->user()->roles as $role)
        {
            echo "<br>Role name: ". $role->name.'<br>';

            echo "<ul>";
            $permissions = $role->permissions;
            foreach ($permissions as $permission)
            {
                echo '<li>'.$permission->name.'</li>';
            }
            echo "</ul> <br>";
        }
    }*/


}
