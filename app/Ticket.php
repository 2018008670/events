<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  protected $fillable = [
      'user_id', 'events_id', 'ticket_id', 'title', 'priority', 'message', 'status'
  ];

  public function events()
  {
      return $this->belongsTo(Events::class);
  }

  public function comments()
  {
      return $this->hasMany(Comment::class);
  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
