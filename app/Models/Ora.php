<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ora extends Model{

    protected $table = 'ore';

    protected $primarykey = 'idoragiorno';

    public function lezioni(){
        return $this->hasMany(Lezione::class, 'idoragiorno', 'idoragiorno');
    }

    public function giorno(){
        return $this->belongsTo(Giorno::class, 'idgiorno', 'idgiorno');
    }
}
?>