<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ora extends Model{
    protected $table = 'ore';

    public function lezioni()
    {
        return $this->hasMany(Lezione::class, ['idgiorno', 'idora']);
    }
}
?>