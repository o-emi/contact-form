<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view ('index');
    }

        // public function confirm()

        // formタグから送られてきた値を取り出すためRequestクラスを利用
        // public function confirm(Request $request)

// FormRequest の呼び出しのバリデーション設定
        public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        // return $contact;

        // viewファイルを呼び出す処理
        // return view ('confirm');

        // view ファイル側で連想配列のキーを指定することで、そのキーに対応した値を表示する
        // return view('confirm', ['contact' => $contact]);
        // 上記をcompact関数と使うと
        return view('confirm', compact('contact'));
    }

        // public function store(Request $request)
        // FormRequest の呼び出しのバリデーション設定
        public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return  view('thanks');
    }
}

