<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Friend;
use App\Http\Controllers\Controller;

class SendFriendController extends Controller
{
    public function sendFriend(Request $request)
    {
       $this->validate($request,[
        'name' => 'required',
        'friend_name' => 'required',
        'friend_email' => 'required'

       ]);

       $friend = Friend::create([
        'name' => $request->name,
        'friend_name' => $request->friend_name,
        'friend_email' => $request->friend_email,
       ]);

       return response()->json($friend, 201);
    }

    public function getFriends(){

        $friends = Friend::all();
        $var = [
            'id' => 1,
            'name' => 'Fejiro',
        ];
        dump($var);
        $var = json_encode($var);
        dump($var);
        $var = json_decode($var);
        dump($var);

        
        return response()->json($friends, 200);
    }
}