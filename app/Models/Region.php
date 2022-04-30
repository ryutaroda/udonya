<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Region extends Model
{
    use HasFactory;

    /**
     * @return hasOne
     */
    public function prefecture(): hasOne
    {
        return $this->hasOne(Prefecture::class);
    }
}
