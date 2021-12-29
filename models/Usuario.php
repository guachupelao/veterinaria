<?php
namespace models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['clave','activo','funcionario_id'];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }

    public function registros()
    {
        return $this->hasMany(Registro::class);
    }

   
}
