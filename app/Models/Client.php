<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [ 'user_id', 'nome', 'cpf', 'email', 'telefone'];


    public function user()
    {
        return $this->belongsTo(User::class);// user_id
    }

    public function veiculo()
    {
        return $this->hasMany(Veiculo::class);
    }
}
