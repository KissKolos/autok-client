<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Carmodel extends Model
{
    use HasFactory;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'maker_id',
        'name',
    ];
    public $timestamps = false;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<int, string>
     */
    protected function casts(): array
    {
        return [
            'maker_id',
            'name',
        ];
    }

    function maker(){
        return $this->belongsTo(related: Maker::class);
    }
}
