<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model{

    protected $table = 'aule';

    protected $primarykey = 'idaula';

    public function usataPer(){
        return $this->belongsToMany(Lezione::class, 'aulelezioni', 'idaula', 'idlezione');
    }
}
?>