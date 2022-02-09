<?php

declare(strict_types=1);

namespace app\controller;

class Goods
{
    public function getRenewalGoodsList()
    {
        return json([
            "body" => [[
                "createTime" => 0,
                "id" => "0011",
                "isAvailable" => 1,
                "locale" => "CN",
                "name" => "never wanna let you go",
                "price" => 0,
                "priceUnit" => "￥",
                "updateTime" => 0,
                "value" => 30,
                "weight" => 4
            ]],
            "code" => 200,
            "returnTime" => getTimestamp(),
            "success" => true
        ]);
    }
}
