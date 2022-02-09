<?php

declare(strict_types=1);

namespace app\controller;

class Version
{
    public function checkApkUpdate()
    {
        return json([
            "code" => 2002,
            "message" => "??????",
            "returnTime" => getTimestamp(),
            "success" => false
        ]);
    }
}
