<?php

namespace App\Http\ViewModels\Site\Shop;

use Illuminate\Pagination\LengthAwarePaginator;
use JetBrains\PhpStorm\Pure;

class IndexViewModel
{
    /** @var LengthAwarePaginator  */
    private LengthAwarePaginator $shops;
    /** @var string */
    private string $searchWord;

    /**
     * @param LengthAwarePaginator $shops
     * @param string $searchWord
     */
    public function __construct(LengthAwarePaginator $shops, string $searchWord)
    {
        $this->shops = $shops;
        $this->searchWord = $searchWord;
    }


    /**
     * @return LengthAwarePaginator
     */
    public function getShops(): LengthAwarePaginator
    {
        return $this->shops;
    }

    /**
     * @return string
     */
    public function getSearchWord(): string
    {
        return $this->searchWord;
    }

    /**
     * @return int
     */
    #[Pure] public function getShopTotal(): int
    {
        return $this->shops->total();
    }

}
