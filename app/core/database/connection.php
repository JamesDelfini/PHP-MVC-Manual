<?php

class Connection{

    public static $static = 0;

    public static function make($config){
        return mysqli_connect(
            $config['host'],
            $config['username'],
            $config['password'],
            $config['name']
        );
    }
}