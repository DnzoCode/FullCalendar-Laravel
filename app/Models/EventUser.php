<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventUser extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'event_id'
    ];

    public function UsuarioId(){
        return $this->belongsTo(User::class);
    }
    public function EventoId(){
        return $this->belongsTo(Event::class);
    }
}
