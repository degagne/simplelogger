<?php
namespace SimpleLogger;

use Psr\Log\LogLevel;

abstract class LogLevelMap
{
    /**
     * Log level mapping.
     *
     * @var array
     */
    public static $LEVEL_MAP = [
        LogLevel::DEBUG     => 0,
        LogLevel::NOTICE    => 1,
        LogLevel::INFO      => 2,
        LogLevel::WARNING   => 3,
        LogLevel::ERROR     => 4,
        LogLevel::CRITICAL  => 5,
        LogLevel::ALERT     => 6,
        LogLevel::EMERGENCY => 7,
    ];

    /**
     * Log level colour mapping.
     *
     * @var array
     */
    public static $LEVEL_COLOUR_MAP = [
        LogLevel::DEBUG     => ['light_blue', null],
        LogLevel::NOTICE    => ['light_blue', null],
        LogLevel::INFO      => ['green', null],
        LogLevel::WARNING   => ['yellow', null],
        LogLevel::ERROR     => ['red', null],
        LogLevel::CRITICAL  => ['light_gray', 'red'],
        LogLevel::ALERT     => ['light_gray', 'red'],
        LogLevel::EMERGENCY => ['light_gray', 'red'],
    ];

    /**
     * Gets numerical log level value.
     *
     * @param  string $log_level Psr\Log\LogLevel
     * @return int
     */
    abstract public function getLevel($log_level);

    /**
     * Gets colour.
     *
     * @param  string $log_level Psr\Log\LogLevel
     * @return array
     */
    abstract public function getColours($log_level);
}
