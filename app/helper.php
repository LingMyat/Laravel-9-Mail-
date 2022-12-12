<?php

use App\Models\User;

function user_auth(){
    return User::find(session('user_id'));
}
