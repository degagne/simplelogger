<?php
namespace SimpleLogger;

use Psr\Log\LogLevel;
use SimpleLogger\LogLevelMap;

class Configuration extends LogLevelMap
{
    /**
     * Log file name.
     *
     * @var string
     */
    public $logfile = null;

    /**
     * Default log level.
     *
     * @var int
     */
    public $verbosity = null;

    /**
     * Log line format..
     *
     * @var string
     */
    public $format = null;

    /**
     * Sets log file name.
     *
     * @param  string $logfile log file name
     * @return object
     */
    final public function setLogfile($logfile)
    {
        $this->logfile = $logfile;
        return $this;
    }

    /**
     * Sets log level verbosity.
     *
     * @param  int     $verbosity log verbosity
     * @return object
     */
    final public function setVerbosity($verbosity)
    {
        $this->verbosity = $this->getLevel($verbosity);
        return $this;
    }

    /**
     * Sets log line format.
     *
     * @param  int     $format log line format
     * @return object
     */
    final public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets log file name.
     *
     * @return string
     */
    final public function getLogfile()
    {
        return $this->logfile;
    }

    /**
     * Gets log level verbosity.
     *
     * @return string
     */
    final public function getVerbosity()
    {
        if ($this->verbosity === null)
        {
            $this->verbosity = $this->getLevel(LogLevel::DEBUG);
        }
        return $this->verbosity;
    }

    /**
     * Gets log line format.
     *
     * @return string
     */
    final public function getFormat()
    {
        if ($this->format === null)
        {
            $this->format = "%t [%l] {%c:%f:%L} %p - %m";
        }
        return $this->format;
    }

    /**
     * {@inheritdoc}
     */
    final public function getLevel($log_level)
    {
        return self::$LEVEL_MAP[$log_level];
    }

    /**
     * {@inheritdoc}
     */
    final public function getColours($log_level)
    {
        return self::$LEVEL_COLOUR_MAP[$log_level];
    }

}
