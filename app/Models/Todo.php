<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'is_completed' => 'boolean',        
        ];
    public function scopeComplete($query)
    {
        return $query->where('is_completed', 1);
    }
    public function scopeInComplete($query)
    {
        return $query->where('is_completed', 0);
    }
    public function topics()
 {
 return $this->belongsToMany(Topic::class);
 }

}
