<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/19
 * Time: 17:04
 */

namespace designPatterns\structural\bridge;


class ConcreteImplementorB implements ImplementorInterface
{
    public function operationImp()
    {
        return self::class;
    }
}