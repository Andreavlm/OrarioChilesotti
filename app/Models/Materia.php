<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model{

    protected $table = 'materie';
    protected $primaryKey = 'idmateria';

    public function lezioni(){
        return $this->hasMany(Lezione::class, 'idmateria', 'idmateria');
    }
       
}
?>