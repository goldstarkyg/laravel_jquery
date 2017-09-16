<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;
use App\Gallery;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_count        = User::count();

        $user = $this->usercount();
        $users_admin = $user['admin'];
        $users_client = $user['client'];
        $users_advisor = $user['advisor'];

        $posts_count        = Post::count();
        $galleries_count    = Gallery::count();

        return response()->json([
            'users_count'       => $users_count,
            'users_admin'       => $users_admin,
            'users_client'      => $users_client,
            'users_advisor'     => $users_advisor,
            'posts_count'       => $posts_count,
            'galleries_count'   => $galleries_count
        ]);
    }

    public function usercount()
    {
        $admin   = User::where('user_type', 'like', 'admin')->get();
        $client  = User::where('user_type', 'like', 'client')->get();
        $advisor = User::where('user_type', 'like', 'advisor')->get();
        $user = array();
        $user['admin']      = count($admin);
        $user['client']     = count($client);
        $user['advisor']    = count($advisor);

        return $user;
    }


}
