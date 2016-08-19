<?php
/**
 * Created by PhpStorm.
 * User: anowak
 * Date: 19.08.16
 * Time: 08:31
 */

namespace Installer;


class Installer
{
    const CSS_DIR = "web/css";

    static public function postInstall($commandEvent) {
        Installer::createDirectory(Installer::CSS_DIR);
        copy("vendor/twbs/bootstrap/dist/css/bootstrap.css","web/css/bootstrap.css");
    }

    private static function createDirectory(string $dir)
    {
        if (!Installer::dirExists($dir)) {
            mkdir($dir);
        }
    }

    private static function dirExists(string $dir) {
        return file_exists($dir);
    }
}