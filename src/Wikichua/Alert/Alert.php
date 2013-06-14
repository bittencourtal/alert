<?php namespace Wikichua\Alert;

use View, Config, Session;

class Alert
{
    protected static $assetPath;

    public function __construct()
    {
        if(Config::get('alert::use_default_asset',true))
        {
            self::$assetPath = Config::get('alert::default_asset_path');
        }
    }

    public static function show() 
    {   
        if(Session::has('errors')) {
            $errors = Session::get('errors');
            return self::message('error',$errors->all());
        }
        if(Session::has('warning')) {
            return self::message('warning',Session::get('warning'));
        }
        if(Session::has('info')) {
            return self::message('info',Session::get('info'));
        }
        if(Session::has('success')) {
            return self::message('success',Session::get('success'));
        }
        if(Session::has('error')) {
            return self::message('error',Session::get('error'));
        }
    }

    public static function message($type = 'block',$messages)
    {
        return View::make('alert::alert')->with(compact('type','messages'))->with('assetPath',self::$assetPath);
    }
}