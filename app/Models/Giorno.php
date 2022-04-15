<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Giorno extends Model{

    protected $table = 'giorni';

    protected $primarykey = 'idgiorno';

    public function ore(){
        return $this->hasMany(Ora::class, 'idgiorno', 'idgiorno');
    }
}
?>