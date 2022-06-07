<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelBase extends Model
{
    use SoftDeletes;

    /** @var array  */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /** @var array  */
    protected $guarded = ["id"];
}
