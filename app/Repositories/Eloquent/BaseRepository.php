<?php

/**
 * Created by PhpStorm.
 * User: xuan
 * Date: 9/21/15
 * Time: 6:30 PM.
 */
namespace PHPHub\Repositories\Eloquent;

use PHPHub\Repositories\Eloquent\Traits\AutoWithTrait;
use PHPHub\Repositories\Eloquent\Traits\WithOnlyTrait;
use Prettus\Repository\Eloquent\BaseRepository as Repository;

abstract class BaseRepository extends Repository
{
    use WithOnlyTrait, AutoWithTrait;
}
