<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'name', 'band', 'price', 'description', 'playlength', 'image'];
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false)
        {
            $query->where('title','like','%'.$filters['search'].'%')
            ->orWhere('name','like','%'.$filters['search'].'%')
            ->orWhere('band','like','%'.$filters['search'].'%')
            ->orWhere('category','like','%'.$filters['search'].'%');

            if($filters['sort'] ?? false) {
                $sort = explode("-", $filters['sort']);
                $query->orderBy($sort[0],$sort[1]);
            }
        }
        else {
            return $query->whereRaw('1 = 0');
        }
        
    }
}
