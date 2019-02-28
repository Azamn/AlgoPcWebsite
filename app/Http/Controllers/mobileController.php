<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event_participants;
use App\User;


class mobileController extends Controller
{
    //

    public function Insert(Request $request){
        $user = new User;
        $eventparticipant = new event_participants;
        
    }
}
