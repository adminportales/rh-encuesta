<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;
    public $table='answers';
    protected $fillable=[
        'question_id',
        'answer',
        'uuid',
        'company'
    ];

    public function question()
    {
        return $this->belongsTo(Questions::class);
    }
}
