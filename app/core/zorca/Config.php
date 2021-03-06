<?php
namespace Zorca;

class Config {
    static function load($configParam) {
        if ($configParam === 'app') $configFilePath = DATA . 'config.json'; else $configFilePath = DATA . $configParam . '.json';
        // Если файл конфига не существует, то отдаем пустой массив
        if (file_exists($configFilePath)) $config = json_decode(file_get_contents($configFilePath), true); else $config = [];
        return $config;
    }
}