<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
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

    public function index() 
    {
        $artikel = Post::with('category')->get();
        // $category_name = $artikel->category_id->name;
        // dd($artikel);
        return view ('admin.artikel.index')->with([
            'artikel'=> $artikel,
            // 'category_name'=>$category_name,
            'title' => 'Detail Artikel',
            'title_breadcrumb' => 'Artikel',
            'breadcrumb' => 'Artikel'
        ]);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->image;
        $namafile = $nm->getClientOriginalName();

        $post = new Post();
        $post->title = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->kutipan = $request->kutipan;
        $post->konten = $request->konten;
        $post->category_id = $request->category_id;
        $post->image = $namafile;
        $nm->move(public_path().'/storage', $namafile);
        $post->save();
        return redirect('admin/artikel')->with('success','Article added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = Post::findOrFail($id);
        $categories = Category::all();
        return view ('admin.artikel.edit',['items' => $items, 'categories' => $categories,
        // 'category_name'=>$category_name,
        'title' => 'Edit Artikel',
        'title_breadcrumb' => 'Artikel',
        'breadcrumb' => 'Artikel']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $user = auth()->user()->name;
        $data = Post::findOrFail($id);
        $image = $request->file('image');
        if (isset($image))
        {
            $new_name = $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $new_name);
            $data->update(array(
                'title' => $request->title,
                'slug' =>  \Str::slug($request->title),
                'kutipan' => $request->kutipan,
                'konten' => $request->konten,
                'image' => $new_name,
            ));
        }
        $form_data = array(
            'title' => $request->title,
            'slug' =>  \Str::slug($request->title),
            'kutipan' => $request->kutipan,
            'konten' => $request->konten,
        );
        $data->update($form_data);
        
        return redirect('admin/artikel')->with('success','Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Post::findOrFail($id);
        $category->delete();
        
        return redirect()->back()->with('success', 'Data Deleted Successfully');
    }
}
