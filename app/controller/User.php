<?php

declare(strict_types=1);

namespace app\controller;

use app\common\Des;

class User
{
    private $DES_SECRET_KEY = 'Lerist.T';
    private $proindate = '2524579200000';
    private $regtime = '1577808000000';
    private $loginName = "jwjjgs.cn";

    public function login()
    {
        $uid  = 'jwjjgs' . substr(md5((string)time()), 0, 30);
        $token  = 'T' . $uid;
        $userId   = 'U' . $uid;
        $s  = "1#{$this->proindate}#{$this->proindate}#{$token}";
        $key  = (new Des())->encrypt($s, $this->DES_SECRET_KEY);
        return json([

            "body" => [
                "regtime" => $this->regtime,
                "proindate" => $this->proindate,
                "createTime" => $this->regtime,
                "loginType" => "phone",
                "loginName" => $this->loginName,
                "updateTime" => 0,
                "type" => 1,
                "userId" => $userId,
                "key" => $key,
                "token" => $token
            ],
            "code" => 200,
            "returnTime" => getTimestamp(),
            "success" => true
        ]);
    }

    public function checkPwdExist()
    {
        return json([

            "body" => true,
            "code" => 200,
            "returnTime" => getTimestamp(),
            "success" => true
        ]);
    }

    public function checkUserExist()
    {
        return json([

            "body" => true,
            "code" => 200,
            "returnTime" => getTimestamp(),
            "success" => true
        ]);
    }

    public function get()
    {
        $t = getTimestamp() + 400000000;
        $token = input('param.token');
        $s  = "1#{$this->proindate}#{$t}#{$token}";
        $key  = (new Des())->encrypt($s, $this->DES_SECRET_KEY);
        return json([

            "body" => [
                "regtime" => $this->regtime,
                "proindate" => $this->proindate,
                "createTime" => $this->regtime,
                "loginType" => "phone",
                "loginName" => $this->loginName,
                "updateTime" => 0,
                "type" => 1,
                "key" => $key,
                "token" => $token
            ],
            "code" => 200,
            "returnTime" => getTimestamp(),
            "success" => true
        ]);
    }
}
