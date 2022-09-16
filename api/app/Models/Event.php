<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'application_start_date',
    'due_date',
    'begin_date',
    'end_date',
    'price',
    'status',
    'visible',
    'max_reservation_count'
  ];

  public function reserves()
  {
    return $this->hasMany(Reserve::class, 'event_id');
  }
}
