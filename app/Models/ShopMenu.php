<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopMenu extends Model
{
    use HasFactory, SoftDeletes;

    /** @var array  */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /** @var array  */
    protected $guarded = ["id"];

    /**
     * @return BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Shop::class);
    }

}