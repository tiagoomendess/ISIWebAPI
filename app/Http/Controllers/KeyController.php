<?php

namespace App\Http\Controllers;

use App\Key;

class KeyController extends Controller
{
    public function index() {

    }

    public function apiShow($id) {

        $key = Key::where('id', $id)->where('deleted', false)->get();

        if( $key->count() != 1)
            return abort(404);

        $key = $key->first();

        return response()->json([
            'id' => $key->id,
            'token' => $key->token,
            'updated_at' => $key->updated_at,
            'created_at' => $key->created_at,
        ]);
    }

    public function apiCheck($token) {

        $key = Key::where('token', $token)->where('deleted', false)->get();

        if ($key->count() != 1) {

            return response()->json([
                'authorized' => false,
            ]);
        }
        else {
            return response()->json([
                'authorized' => true,
            ]);
        }


    }
}
