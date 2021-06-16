<?php


namespace Zhaoming\tools\lib;


use Zhaoming\tools\ToolsInt;

class FileTools implements ToolsInt
{
    function getDir($dir)
    {
        $files = array();
        if ( $handle = opendir($dir) ) {

            while ( ($file = readdir($handle)) !== false )
            {

                if ( $file != ".." && $file != "." ) {
                    if ( is_dir($dir . "/" . $file) ) {
                        $files[$file] = $this->getDir($dir . "/" . $file);
                    }  else {
                        $dirInfo = explode('/',$dir);
                        $dirInfo = array_values(array_filter($dirInfo));

                        unset($dirInfo[0]);
                        unset($dirInfo[1]);

                        $path = $dir.'/'.$file;

                        $hand = fopen($path,"r");
                        $fstat = fstat($hand);

                        $temp['size']   =  $fstat['size'];
                        $temp['name']   =  $file;
                        $temp['ext']    =  substr(strrchr($file, '.'), 1);
                        $temp['path']   =  implode('/',$dirInfo)."/".$file;
                        $temp['md5']    =  md5_file($path);

                        $files[] = $temp;
                    }
                }
            }
            closedir($handle);
            return $files;
        }
    }


    public function init($params)
    {
        return '';
    }

    public function action($func, $params)
    {
        // TODO: Implement action() method.
    }
}