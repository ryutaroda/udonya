<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
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
    public function prefecture(): BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }

    /**
     * @return HasMany
     */
    public function shop_menus(): HasMany
    {
        return $this->hasMany(ShopMenu::class);
    }
}
