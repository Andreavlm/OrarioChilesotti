<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model{

    protected $table = 'sedi';
    protected $primaryKey = 'idsede';

    public function lezioni(){
        return $this->hasMany(Lezione::class, 'idsede', 'idsede');
    }
}
?>