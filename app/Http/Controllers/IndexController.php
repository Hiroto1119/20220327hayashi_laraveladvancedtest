<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // public function index(Request $request)
    // {
    //     return view('index', ['txt' => 'フォームを入力']);
    // }
    // public function post(Request $request)
    // {
    //     $validate_rule = [
    //         'name' => 'required',
    //         'role' => 'required',
    //         'email' => 'required|email',
    //     ];
    //     $this->validate($request, $validate_rule);
    //     return view('thanks', ['txt' => '正しい入力です']);
    // }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }
}
