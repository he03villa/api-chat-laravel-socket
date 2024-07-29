<?php

namespace App\Http\Controllers;

use App\Events\chatEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    function saveMessage(Request $request) {
        event(new chatEvent($request->message));
        return response()->json([
            'message' => 'Mensaje enviado correctamente'
        ]);
    }
}
