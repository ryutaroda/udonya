<?php

namespace App\Domain\CommonRepository;

use Closure;

interface DataStoreTransactionInterface
{
    /**
     * @param Closure $function
     */
    public function start(Closure $function);
}
