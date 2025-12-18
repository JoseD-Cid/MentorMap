<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{

    protected $table = 'students';

    public function user() {
        return $this->belhaongsTo(User::class, 'user_id');
    }
}



