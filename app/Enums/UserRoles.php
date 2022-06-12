<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

class UserRoles extends Enum
{
    /** @var int 利用者 */
    public const USER = 1;
    /** @var int 利用者 + 店舗登録 */
    public const REGISTER_USER = 2;
    /** @var int 管理者 */
    public const MASTER_USER = 99;
}
