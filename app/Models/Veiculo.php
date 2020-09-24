<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [ 'client_id', 'placa', 'marca', 'modelo', 'cor' ];

    public function cliente()
    {
        return $this->belongsTo(Client::class);// cliente_id
    }
}
