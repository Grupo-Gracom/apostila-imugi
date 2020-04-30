<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'cargo_id';
    protected $table = "cargos";
    protected $fillable = [
        'cargo_id',
        'cargo_nome',
        'cargo_menus',
        'cargo_status'
    ];

    public function usuario(){
        return $this->belongsTo("App\User", "cargo_id", "cargo_id");
    }
}
