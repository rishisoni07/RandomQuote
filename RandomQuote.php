<?php
/**
 * Created by PhpStorm.
 * User: sotsys-027
 * Date: 12/6/19
 * Time: 11:32 AM
 */

namespace RandomQuote;


class RandomQuote
{
    public function Hello() {

        $var = "hello world";
        return $var;
    }

    public function generate() {
        return $this->Hello();
    }
}