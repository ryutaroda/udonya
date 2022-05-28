<?php

namespace App\Domain\Application\Site\Top;

use App\UseCase\Site\Top\Top\SiteTopTopInputData;
use App\UseCase\Site\Top\Top\SiteTopTopOutputData;
use App\UseCase\Site\Top\Top\SiteTopTopUseCaseInterface;

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
