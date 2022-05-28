<?php

namespace App\UseCase\Site\Shop\Index;

use Illuminate\Pagination\LengthAwarePaginator;

class SiteShopIndexOutputData
{
    /** @var LengthAwarePaginator */
    private $shops;
    /** @var string */
    private $searchWord;

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
}
