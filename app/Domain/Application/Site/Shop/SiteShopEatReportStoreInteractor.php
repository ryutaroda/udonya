<?php

namespace App\Domain\Application\Site\Shop;

use App\Domain\CommonRepository\DataStoreTransactionInterface;
use App\Models\EatReport;
use App\UseCase\Site\Shop\EatReport\Store\SiteShopEatReportStoreInputData;
use App\UseCase\Site\Shop\EatReport\Store\SiteShopEatReportStoreOutputData;
use App\UseCase\Site\Shop\EatReport\Store\SiteShopEatReportStoreUseCaseInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SiteShopEatReportStoreInteractor implements SiteShopEatReportStoreUseCaseInterface
{
    /** @var DataStoreTransactionInterface */
    private DataStoreTransactionInterface $transaction;

    /**
     * @param DataStoreTransactionInterface $transaction
     */
    public function __construct(DataStoreTransactionInterface $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @inheritDoc
     */
    public function invoke(SiteShopEatReportStoreInputData $input): SiteShopEatReportStoreOutputData
    {
        return $this->transaction->start(function () use ($input) {

            $eatReport = new EatReport();
            $eatReport->user_id = Auth::id();
            $eatReport->visit_date = $input->getVisitDate();
            $eatReport->path = $this->getRegisterImageUploadPath($input->getPath());
            $eatReport->contents = $input->getContents();
            $eatReport->shop_id = $input->getShopId();
            $eatReport->save();

            return new SiteShopEatReportStoreOutputData(
                $input->getShopId()
            );

        });
    }


    /**
     * @param string $imagePath
     * @return string
     */
    private function getRegisterImageUploadPath(string $imagePath): string
    {
        if ($imagePath) {
            return Storage::disk('public')->putFile('eat_report', $imagePath, 'public');
        }
        return '';
    }
}
