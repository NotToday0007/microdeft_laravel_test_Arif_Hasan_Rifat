<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Asset;

class AssetController extends Controller
{
  public function index(){
    return view('asset.index');
  }

  public function create(Request $request)
  {
      $request->validate([
          'name' => 'required|max:255',
          'status' => 'required',
      ]);

      Asset::create($request->all());
      return redirect()->route('posts.index');
  }



public function show(Request $request, $id){

    $post=Asset::find($id);

    return view('asset.show', compact('asset'));
}
}
