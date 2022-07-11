<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Middlewares\RoleMiddleware;
use Spatie\Permission\Models\Role as ModelsRole;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index')->with([
            'title' => 'Dashboard',
            'breadcrumb' => 'Home',
            'title_breadcrumb' => 'Home'
        ]);
    }
}
