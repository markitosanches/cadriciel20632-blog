<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use DB;
use Auth;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // if(Auth::check()){
            $posts = BlogPost::all();  // SELECT * FROM Blog_Posts
            return view('blog.index', ['posts' => $posts]);
        // }
        // return redirect(route('login'))->withErrors(trans('auth.failed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $newBlog = BlogPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1
       ]);

        return redirect(route('blog.show', $newBlog->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
        //$blogPost = SELECT * FROM blog_posts WHERE id = $blogPost

        return view('blog.show', ['blogPost' => $blogPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        return view('blog.edit', ['blogPost' => $blogPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect(route('blog.show', $blogPost->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect(route('blog'));
    }

    public function query(){

        //SELECT

        //$blog = BlogPost::all();

        //$blog = BlogPost::select('title')->get();

        //WHERE
        // $blog = BlogPost::select()
        // ->WHERE('user_id','=', 1)
        // ->get();

        //CLE PRIMAIRE
        // $blog = BlogPost::find(1);

        //AND
        // $blog = BlogPost::select()
        // ->WHERE('user_id','=', 1)
        // ->WHERE('id', 1)
        // ->get();

        //OR
        // $blog = BlogPost::select()
        // ->WHERE('user_id','=', 1)
        // ->orWHERE('id', 1)
        // ->get();

        //ORDER BY
        // $blog = BlogPost::select('id')
        // ->ORDERBY('id', 'desc')
        // ->get();

        //INNER JOIN
        // $blog = BlogPost::select()
        // ->JOIN('users', 'blog_posts.user_id', '=', 'users.id')
        // ->get();

        //OUTER JOIN
        // $blog = BlogPost::select()
        // ->leftJOIN('users', 'blog_posts.user_id', '=', 'users.id')
        // ->get();

        //Aggregate
        // $blog = BlogPost::count('*');
        // $blog = BlogPost::max('id');
        // $blog = BlogPost::min('id');
        // $blog = BlogPost::avg('id');

        // $blog = BlogPost::where('user_id', 1)
        // ->count('id');

        // $blog = BlogPost::select(DB::raw('count(*) as blogs, user_id'))
        // ->groupBy('user_id')
        // ->get();


        $blog = new BlogPost;
        $blog = $blog->selectBlog(1);

        return $blog[0];
        
    }
}
