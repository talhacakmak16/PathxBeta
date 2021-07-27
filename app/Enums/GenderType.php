<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Male()
 * @method static static Female()
 */
final class GenderType extends Enum
{
    const Male = 'male';
    const Female = 'female';
}
