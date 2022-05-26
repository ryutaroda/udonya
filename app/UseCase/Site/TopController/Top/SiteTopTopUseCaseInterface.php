<?php

namespace App\UseCase\Site\TopController\Top;

interface SiteTopTopUseCaseInterface
{
    /**
     * @param SiteTopTopInputData $input
     * @return SiteTopTopOutputData
     */
    public function invoke(SiteTopTopInputData $input): SiteTopTopOutputData;
}
