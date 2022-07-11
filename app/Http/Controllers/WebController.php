<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WebController extends Controller
{
    public function about()
    {
        return view('web.about.index',[
            'title' => 'About',
            'page_title' => 'About APOB',
            'breadcrumbs_item' => 'About',
        ]);
    }

    public function produk()
    {
        $katalog = Catalog::all();
        // $title = Catalog::get('name');
        // $link_wa = urlencode('Hallo Admin APOB,
        // saya ingin menanykan tentang produk ' . '*' . $title . '*');
        // dd($link_wa);
        return view('web.produk.index',[
            'katalog' => $katalog,
            'title' => 'Produk',
            'page_title' => 'Produk APOB',
            'breadcrumbs_item' => 'Produk',
        ]);
    }

    public function gallery()
    {
        return view('web.gallery.index',[
            'title' => 'Gallery',
            'page_title' => 'Gallery APOB',
            'breadcrumbs_item' => 'Gallery',
        ]);
    }
    public function contacts()
    {
        return view('web.contacts.index',[
            'title' => 'Contact',
            'page_title' => 'Contact APOB',
            'breadcrumbs_item' => 'Contact',
        ]);
    }

    public function allPosts()
    {
        $post = Post::with('category')->get();
        return view('web.artikel.allpost',[
            'title' => 'Artikel',
            'post' => $post,
            'page_title' => 'Artikel APOB',
            'breadcrumbs_item' => 'Artikel',
        ]);
    }

    public function post($id)
    {
        $post = Post::findOrFail($id);
        $articles = Post::with('category')->get()->where('id', '=', $post->id);
        $title = $post->title;
        // dd($title);
        return view('web.artikel.onePost',compact('articles'),[
            'title' => $title,
            'page_title' => $title,
            'breadcrumbs_item' => 'Artikel',
        ]);
    }

    public function artikelPreview()
    {
        $artikelPreview = Post::latest()->limit(3)->get();
        // $createdAt = Carbon::parse($artikelPreview->created_at);
        return view('web.index', compact('artikelPreview'), ['title' => 'Asosiasi Petani Organik Boyolali']);
    }
}
