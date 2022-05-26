<?php

namespace App\Domain\Application\Site\TopController;

use App\UseCase\Site\TopController\Top\SiteTopTopInputData;
use App\UseCase\Site\TopController\Top\SiteTopTopOutputData;
use App\UseCase\Site\TopController\Top\SiteTopTopUseCaseInterface;

class SiteTopTopInteractor implements SiteTopTopUseCaseInterface
{
    /**
     * @inheritDoc
     */
    public function invoke(SiteTopTopInputData $input): SiteTopTopOutputData
    {

        return new SiteTopTopOutputData();
    }
}
