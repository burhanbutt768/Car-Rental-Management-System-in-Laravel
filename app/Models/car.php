<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'model', 'rent_per_day', 'status', 'image'];
    protected $guarded = [];

    // Relationship: A Car can have one Rental
    public function rental()
    {
        return $this->hasOne(Rental::class);
    }
}
