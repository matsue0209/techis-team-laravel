<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
     /**
        * タスク一覧
        *
        * @param Request $request
        * @return Response
        */
        public function index()
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('users.index', [
                'user' => $users,
            ]);
        }

        //  Quitaで書かれていた一覧画面の書き方
        // public function index()
        // {
                // usersテーブルからname,telephone,emailを$usersに格納
                // $users = DB::table('users')
                // ->select('id','name','telephone','email')
                // ->get();
        // viewを返す(compactでviewに$usersを渡す)
        // return view('user/index',compact('users'));
        // }

        public function create()
        {
            return view('users/create');
        }
}
