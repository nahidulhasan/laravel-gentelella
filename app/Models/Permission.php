<?php
/**
 * Created by PhpStorm.
 * User: pathao
 * Date: 8/28/18
 * Time: 5:01 PM
 */

namespace App\Models;


use Nahid\Permit\Permissions\Permission as PermitPermission;

class Permission extends PermitPermission
{
    use Diffable;

    public static function boot()
    {
        parent::boot();
        static::callDiff();
    }
}
