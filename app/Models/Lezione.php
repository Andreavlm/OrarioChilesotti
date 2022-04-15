<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lezione extends Model{
    
    protected $table = 'lezioni';

    protected $primarykey = 'idlezione';

    public function materia(){
        return $this->belongsTo(Materia::class, 'idmateria', 'idmateria');
    }

    public function sede(){
        return $this->belongsTo(Sede::class, 'idsede', 'idsede');
    }

    public function ora(){
        return $this->belongsTo(Ora::class, 'idoragiorno', 'idoragiorno');
    }

    public function ascoltataDa(){
        return $this->belongsToMany(Classe::class, 'classilezioni', 'idlezione', 'idclasse');
    }

    public function spiegataDa(){
        return $this->belongsToMany(Docente::class, 'docentilezioni', 'idlezione', 'iddocente');
    }

    public function svoltaIn(){
        return $this->belongsToMany(Aula::class, 'aulelezioni', 'idlezione', 'idaula');
    }
}
?>