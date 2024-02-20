<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $table;
    protected $fillable = [
        'name',
        'thumb',
    ];

    public function projects() {
        return $this->belongsToMany(Project::class)->withTimestamps();
}
}
