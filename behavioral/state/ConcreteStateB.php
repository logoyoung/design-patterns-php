<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 12:00
 */

namespace designPatterns\behavioral\state;


class ConcreteStateB implements InterfaceState
{
    public function handle()
    {
        return 'HandleOfStateB';
    }
}