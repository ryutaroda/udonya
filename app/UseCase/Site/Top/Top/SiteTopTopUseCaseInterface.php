<?php

namespace App\UseCase\Site\Top\Top;

interface SiteTopTopUseCaseInterface
{
    /**
     * @param SiteTopTopInputData $input
     * @return SiteTopTopOutputData
     */
    public function invoke(SiteTopTopInputData $input): SiteTopTopOutputData;
}
