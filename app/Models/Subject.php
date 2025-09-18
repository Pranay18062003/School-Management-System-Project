<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }

    /**
     * Marks relationship 
     */
    public function timeTables(): HasMany
    {
        return $this->hasMany(TimeTable::class, 'subject_id');
    }
}
