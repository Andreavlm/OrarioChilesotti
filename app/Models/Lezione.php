<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lezione extends Model{
    
    protected $table = 'lezioni';

    
    public function ora()
    {
        return $this->belongsTo(Ora::class, ['idgiorno', 'idora']);
    }

}
?>