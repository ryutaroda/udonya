<?php

namespace App\UseCase\Site\Shop\Index;

use App\Enum\HistoryChangeRequestErrors;
use Exception;
use Throwable;

class SiteShopIndexException extends Exception
{
    /** @var HistoryChangeRequestErrors */
    private $error;

    /** @var int */
    private $errorCode;

    /**
     * @param int $errorCode
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(int $errorCode, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->error = new HistoryChangeRequestErrors($errorCode);
        $this->errorCode = $errorCode;
        parent::__construct((new HistoryChangeRequestErrors($errorCode))->getMessage(), $code, $previous);
    }

    /**
     * @return HistoryChangeRequestErrors
     */
    public function getError(): HistoryChangeRequestErrors
    {
        return $this->error;
    }

    /**
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->errorCode;
    }
}
