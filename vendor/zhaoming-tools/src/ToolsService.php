<?php


namespace Zhaoming\tools;


/**
 * desc  工具包
 * Class ToolsService
 * @package Zhaoming\tools
 */
class ToolsService
{

    public function help(){

    }

    public function tools($className){

        $className ="Zhaoming\\tools\lib\\".ucfirst($className)."Tools";
        $class =  new $className;
        if ($class instanceof ToolsInt){
            return  $class;
        } else {
            return false;
        }
    }

}