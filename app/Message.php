<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // app/Message.php

/**
 * Fields that are mass assignable
 *
 * @var array
 */
protected $fillable = ['message'];

// app/Message.php

/**
 * A message belong to a user
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function user()
{
  return $this->belongsTo(User::class);
}
}