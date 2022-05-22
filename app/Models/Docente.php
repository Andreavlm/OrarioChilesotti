<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model{

    protected $table = 'docenti';

    protected $primarykey = 'iddocente';

    public function spiega(){
        return $this->belongsToMany(Lezione::class, 'docentilezioni', 'iddocente', 'idlezione');
    }
}
?>