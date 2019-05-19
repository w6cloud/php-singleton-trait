<?php

namespace W6\Singleton;

trait SingletonTrait {

    protected static $instance = null;

    final private function __construct() {
        static::init();
    }

    final public static function instance() {
        return isset(static::$instance) ? static::$instance : static::$instance = new static;
    }

    final public static function clean() {
		return static::$instance = new static;
	}
	
    protected static function init() {}
	
    final private function __wakeup() {}
	
    final private function __clone() {} 

}