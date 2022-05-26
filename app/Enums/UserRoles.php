<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

class UserRoles extends Enum
{
    /** @var int 管理者 */
    public const ADMINISTRATOR = 1;
    /** @var int 作業者 */
    public const READER = 2;
}
