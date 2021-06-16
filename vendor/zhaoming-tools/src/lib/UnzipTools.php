<?php


namespace Zhaoming\tools\lib;


use Zhaoming\tools\ToolsInt;

class UnzipTools implements ToolsInt
{

    private $ext =[
        'zip',
        'rar',
        '7z',
    ];

    public function unPackage($dir)
    {

        if ($handle = opendir($dir)) {
            while (($file = readdir($handle)) !== false) {
                if ($file != ".." && $file != ".") {
                    if (is_dir($dir . "/" . $file)) {
                        $this->unPackage($dir . "/" . $file);
                    } else {
                        $path = $dir . '/' . $file;
                        $ext = substr(strrchr($file, '.'), 1);

                       if (in_array($ext,$this->ext)){
                            switch ($ext) {
                                case "zip":
                                    $command = "upzip ".$path ." ".$dir;
                                    shell_exec($command);
                                    break;
                                case "rar":

                                    $command = "unrar x ".$path." ".$dir;
                                    shell_exec($command);
                                    break;
                                case "7z":
                                    $command = "7z e ".$path." ".$dir;
                                    shell_exec($command);
                                    break;
                            }

                            unlink($path);
                       }
                    }
                }
            }
            closedir($handle);
        }
    }

    public function init($params)
    {
        // TODO: Implement init() method.
    }

    public function action($func, $params)
    {
        // TODO: Implement action() method.
    }
}