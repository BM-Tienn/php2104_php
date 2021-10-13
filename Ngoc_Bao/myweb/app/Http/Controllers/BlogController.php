<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    protected $blogmodel;

    public function __construct(Blog $blog)
    {
        $this->blogmodel = $blog;
    }

   
    public function index()
    {
        $blogs = $this->blogmodel->paginate(config('blog.paginate8'));

        return view('my-directory.blog-ms',[
            'blogs' => $blogs,
        ]);   
    }

    public function show($id=1)
    {
        

            $blog = $this->blogmodel->findOrFail($id);
        
            return view('my-directory.blog-single-ms',[
                'blog' => $blog
            ]);
       
    }
}
