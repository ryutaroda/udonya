<?php

namespace App\UseCase\Site\Shop\Index;


class SiteShopIndexInputData
{
    /** @var string */
    private string $searchWord;

    /**
     * @param ?string $searchWord
     */
    public function __construct(?string $searchWord)
    {
        $this->searchWord = $searchWord ?? '';
    }

    /**
     * @return string
     */
    public function getSearchWord(): string
    {
        return $this->searchWord;
    }

}
