<?php
/**
 * 如花拼团开源系统 -- 永久免费
 * =========================================================
 * 官方网址：http://www.phps.shop
 * 作者：光爵【API + 后台】 、 小草【小程序 + WAP】
 * QQ 交流群：728615087
 * Version：1.0.0
 */
namespace app\api\model;



class Admins extends BaseModel
{
    protected $updateTime=false;

    public function getStateAttr($v)
    {
        return $v==1 ? true : false;
    }

}