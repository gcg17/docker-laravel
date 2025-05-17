<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cita extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'user_id',
        'marca',
        'modelo',
        'matricula',
        'fecha',
        'hora',
        'duracion_estimada'
    ];
    
    /**
     * Get the user that owns the cita.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
