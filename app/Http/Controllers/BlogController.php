<?php

namespace App\Http\Controllers;

use App\Models\{Blog, BlogComment, ServiceCategory};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.blog.index', [
            'blogs' => Blog::where('blogStatus', 'on')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create', [
            'serviceCategories' => ServiceCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog_id = Blog::insertGetId([
            'blogTitle' => $request->blogTitle,
            'blogDescription' => $request->blogDescription,
            'blogMetaTitle' => $request->blogMetaTitle,
            'blogMetaDescription' => $request->blogMetaDescription,
            'blogTag' => $request->blogTag,
            'serviceCategory' => $request->serviceCategory,
            'blogThumbnail' => $request->blogThumbnail,
            'blogStatus' => $request->blogStatus,
            'blogComment' => $request->blogComment,
            'created_at' => now()
        ]);

        if ($request->hasFile('blogThumbnail')) {
            $destination = 'public/blog_thumbnail';
            $photo = 'blogThumbnail-'.$request->portfolio_title.'-'.Carbon::now()->format('Y').rand(1,999).".".$request->file('blogThumbnail')->getClientOriginalExtension();

            $path = $request->file('blogThumbnail')->storeAs($destination, $photo);

            Blog::find($blog_id)->update([
                'blogThumbnail' => $photo,
            ]);
        }

        return redirect('dashboard/blog')->with('insert_status', 'Blog Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        return view('backend.blog.edit', [
            'serviceCategories' => ServiceCategory::all(),
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        Blog::find($blog->id)->update([
            'blogTitle' => $request->blogTitle,
            'blogDescription' => $request->blogDescription,
            'blogMetaTitle' => $request->blogMetaTitle,
            'blogMetaDescription' => $request->blogMetaDescription,
            'blogTag' => $request->blogTag,
            'serviceCategory' => $request->serviceCategory,
            'blogThumbnail' => $request->blogThumbnail,
            'blogStatus' => $request->blogStatus,
            'blogComment' => $request->blogComment,
            'created_at' => now()
        ]);

        if ($request->hasFile('blogThumbnail')) {
            $destination = 'public/blog_thumbnail';
            $photo = 'blogThumbnail-'.$request->portfolio_title.'-'.Carbon::now()->format('Y').rand(1,999).".".$request->file('blogThumbnail')->getClientOriginalExtension();

            $path = $request->file('blogThumbnail')->storeAs($destination, $photo);

            Blog::find($blog->id)->update([
                'blogThumbnail' => $photo,
            ]);
        }

        return back()->with('updateStatus', 'Blog Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        $imageName = $blog->blogThumbnail;
        $imagePath = public_path('storage/blog_thumbnail/' . $imageName);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        Blog::find($blog->id)->delete();

        return back()->with('delete_status', 'Blog Deleted');
    }

    public function blog_comments(){
        return view('backend.blog.blogComment', [
            'blogComments' => BlogComment::all()
        ]);
    }

    public function blog_comments_delete($id){
        BlogComment::find($id)->delete();
        return back()->with('delete_comment', 'Comment Deleted');
    }
}
