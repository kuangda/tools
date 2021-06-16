<?php

namespace Zhaoming\tools;

/**
 * Interface ToolsInt
 */
interface ToolsInt {
    /**
     * Notes: 初始化类
     * User: 葛兆明
     * Date:2021/6/15
     * Time:4:06 下午
     * @param $params
     * @return mixed
     */
    public function init($params);

    /**
     * Notes: 初始化动作
     * User: 葛兆明
     * Date:2021/6/15
     * Time:4:06 下午
     * @param $func
     * @param $params
     * @return mixed
     */
    public function action($func,$params);
}
