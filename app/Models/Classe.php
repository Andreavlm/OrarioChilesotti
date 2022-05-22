<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model{

    protected $table = 'classi';

    protected $primarykey = 'idclasse';

    public function usataPer(){
        return $this->belongsToMany(Lezione::class, 'classilezioni', 'idclasse', 'idlezione');
    }
}
?>