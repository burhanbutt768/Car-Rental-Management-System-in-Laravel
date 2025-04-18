<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'car_id', 'start_date', 'end_date'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
