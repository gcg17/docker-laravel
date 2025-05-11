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
        'marca',
        'modelo',
        'matricula',
        'user_id',
    ];
    
    /**
     * Get the user that owns the cita.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
