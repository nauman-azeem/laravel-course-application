<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPostsController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('admin.posts.index', compact('posts'));
  }

  public function create()
  {
    return view('admin.posts.create');
  }

  public function store(Request $request)
  {
    //
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    return view('admin.posts.edit');
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}