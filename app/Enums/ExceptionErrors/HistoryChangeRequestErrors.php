<?php

namespace App\Enums\ExceptionErrors;

use MyCLabs\Enum\Enum;

class HistoryChangeRequestErrors extends Enum
{
    const EXCESS_REFUNDS = 1;
    const PLEASE_PUT_ZERO = 2;
    const CAN_NOT_BE_MODIFIED = 3;
    const POINTS_ARE_MISSING = 4;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        switch ($this->value) {
            case self::EXCESS_REFUNDS:
                return '過剰返金です。';
            case self::PLEASE_PUT_ZERO:
                return '全額キャンセルののため、0を入れてください。';
            case self::CAN_NOT_BE_MODIFIED:
                return '取引を修正できません。';
            case self::POINTS_ARE_MISSING:
                return 'ポイント残高が不足しています';
            default:
                return '';
        }
    }
}
