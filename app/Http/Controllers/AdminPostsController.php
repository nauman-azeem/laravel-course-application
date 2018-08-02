<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminPostsController extends Controller
{
  public function index()
  {
    return view('admin.posts.index');
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