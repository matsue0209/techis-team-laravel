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
        public function index(Request $request)
        {
            $users = User::orderBy('created_at', 'asc')->get();
            return view('users.index', [
                'users' => $users,
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

        public function create(Request $request)
        {
            return view('user/create');
        }


        public function edit($user_id)
        {   

            $user=User::find($user_id);
            // dd($user);
           // return view('users/edit',['users'=> Auth::user() ]);
           return view('users/edit',['users'=> $user ]);
        }

        public function update(Request $request){
        
        $user= User::find($request->id);
        // dd($user);
        // $user->name = $request->input('name');
        // $user->telephone = $request->input('telephone');
        $user->name = $request->name;
        $user->telphone = $request->tel;
        //保存
        $user->save();
        //リダイレクト
        return redirect('/user');
        }

        public function destroy($user_id){
        //  dd($user_id);
         $user=User::find($user_id);   
         $user->delete();
         return redirect('/user');
        }

        
}
