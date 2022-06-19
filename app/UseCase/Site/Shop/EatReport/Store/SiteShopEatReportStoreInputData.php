<?php

namespace App\UseCase\Site\Shop\EatReport\Store;


class SiteShopEatReportStoreInputData
{
    /** @var int */
    private int $shopId;
    /** @var string */
    private string $visitDate;
    /** @var string */
    private string $contents;
    /** @var string */
    private string $path;

    /**
     * @param int $shopId
     * @param string $visitDate
     * @param string $contents
     * @param ?string $path
     */
    public function __construct(int $shopId, string $visitDate, string $contents, ?string $path)
    {
        $this->shopId = $shopId;
        $this->visitDate = $visitDate;
        $this->contents = $contents;
        $this->path = $path ?? '';
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }

    /**
     * @return string
     */
    public function getVisitDate(): string
    {
        return $this->visitDate;
    }

    /**
     * @return string
     */
    public function getContents(): string
    {
        return $this->contents;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }


}
