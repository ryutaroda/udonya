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
        return match ($this->value) {
            self::EXCESS_REFUNDS => '過剰返金です。',
            self::PLEASE_PUT_ZERO => '全額キャンセルののため、0を入れてください。',
            self::CAN_NOT_BE_MODIFIED => '取引を修正できません。',
            self::POINTS_ARE_MISSING => 'ポイント残高が不足しています',
            default => '',
        };
    }
}
