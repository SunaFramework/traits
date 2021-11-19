<?php declare(strict_types=1);

namespace Suna\Trait;

/**
 * Design Pattern Singleton Trait
 *
 * @version 0.1
 * @author Filipe Voges <filipe.vogesh@gmail.com>
 */
trait Singleton
{
    /**
     * @access protected
     */
    protected static $instance;

    /**
     * @return static
     */
    final public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static;
    }

    /***
     *
     */
    final private function __construct()
    {
        $this->init();
    }

    /**
     *
     */
    protected function init()
    {
    }

    /**
     *
     */
    private function __wakeup()
    {
    }

    /**
     *
     */
    private function __clone()
    {
    }
}