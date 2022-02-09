<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});

Route::get('hello/:name', 'index/hello');

Route::group('/FakeLocation', function () {

    Route::group('/app', function () {
        Route::any('getAppConfigs', 'getAppConfigs');
    })->prefix('app/');

    Route::group('/goods', function () {
        Route::any('getRenewalGoodsList', 'getRenewalGoodsList');
    })->prefix('goods/');

    Route::group('/user', function () {
        Route::any('login', 'login');
        Route::any('checkPwdExist', 'checkPwdExist');
        Route::any('checkUserExist', 'checkUserExist');
        Route::any('get', 'get');
    })->prefix('user/');

    Route::group('/version', function () {
        Route::any('checkApkUpdate', 'checkApkUpdate');
    })->prefix('version/');
});
