<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * Get the user that created the event.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The users that have registered for the event.
     */
    public function registeredUsers()
    {
        return $this->belongsToMany(User::class, 'registrations')
                    ->withPivot('status')
                    ->withTimestamps();
    }
}
