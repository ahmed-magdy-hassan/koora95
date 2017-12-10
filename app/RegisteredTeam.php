<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisteredTeam extends BaseModel
{

    public function seasons()
    {
    	return $this->belongsTo(Season::class);
    }

    public function registeredPlayers(){
    	return $this->hasMany(RegisteredPlayer::class);
    }
}
