<?php

namespace App\UseCase\Site\TopController\Top;


class SiteTopTopInputData
{
    /** @var int */
    private $pointHistoryId;
    /** @var int */
    private $amount;
    /** @var string */
    private $operator;
    /** @var string */
    private $memo;

    /**
     * @param int $pointHistoryId
     * @param int $amount
     * @param ?string $operator
     * @param ?string $memo
     */
    public function __construct(int $pointHistoryId, int $amount, ?string $operator, ?string $memo)
    {
        $this->pointHistoryId = $pointHistoryId;
        $this->amount = $amount;
        $this->operator = $operator ?? "";
        $this->memo = $memo ?? "";
    }

    /**
     * @return int
     */
    public function getPointHistoryId(): int
    {
        return $this->pointHistoryId;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }
}
