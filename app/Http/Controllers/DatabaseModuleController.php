<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DatabaseModuleController extends Controller
{
    public function index(): View
    {
        $allUsers = User::all();

        $activeUsers = DB::table('users')
            ->where('active', 1)
            ->orderBy('name', 'asc')
            ->get();

        $orderedUsers = DB::table('users')
            ->orderBy('name', 'asc')
            ->limit(10)
            ->get();

        $userWithPosts = User::query()->with('posts')->first();

        $totalPosts = Post::count();

        return view('database.module', compact(
            'allUsers',
            'activeUsers',
            'orderedUsers',
            'userWithPosts',
            'totalPosts'
        ));
    }
}
