<?php

declare(strict_types=1);

namespace app\controller;

class App
{

    public function getAppConfigs()
    {
        return json([
            "body" => [
                "createTime" => 0,
                "disabledFuncs" => [],
                "disabledInfos" => [],
                "flavor" => "CN",
                "isAllowRun" => 1,
                "isAvailable" => 1,
                "language" => "*;",
                "notice" => "",
                "updateTime" => 0
            ],
            "code" => 200,
            "returnTime" => getTimestamp(),
            "success" => true
        ]);
    }
}
