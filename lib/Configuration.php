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
     * Default tag
     *
     * @var string
     */
    public $tag = null;

    /**
     * Default log level.
     *
     * @var int
     */
    public $verbosity = null;
    
    /**
     * Default log level (console).
     *
     * @var int
     */
    public $console_verbosity = null;

    /**
     * Console log line format.
     *
     * @var string
     */
    public $console_format = null;

    /**
     * File log line format.
     *
     * @var string
     */
    public $file_format = null;

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
     * Sets log line tag.
     *
     * @param  string $tag tag
     * @return object
     */
    final public function setTag($tag)
    {
        $this->tag = $tag;
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
     * Sets log level verbosity.
     *
     * @param  int     $verbosity log verbosity
     * @return object
     */
    final public function setConsoleVerbosity($verbosity)
    {
        $this->console_verbosity = $this->getLevel($verbosity);
        return $this;
    }

    /**
     * Sets console log line format.
     *
     * @param  int     $format log line format
     * @return object
     */
    final public function setLoggerConsoleFormat($format)
    {
        $this->console_format = $format;
        return $this;
    }

    /**
     * Sets file log line format.
     *
     * @param  int     $format log line format
     * @return object
     */
    final public function setLoggerFileFormat($format)
    {
        $this->file_format = $format;
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
     * Gets tag
     *
     * @return string
     */
    final public function getTag()
    {
        if ($this->tag === null)
        {
            $this->tag = 'NA';
        }
        return $this->tag;
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
     * Gets log level verbosity.
     *
     * @return string
     */
    final public function getConsoleVerbosity()
    {
        if ($this->console_verbosity === null)
        {
            $this->console_verbosity = $this->getLevel(LogLevel::DEBUG);
        }
        return $this->console_verbosity;
    }

    /**
     * Gets log line format.
     *
     * @return string
     */
    final public function getLoggerConsoleFormat()
    {
        if ($this->console_format === null)
        {
            $this->console_format = "%t %l %c:%f - %m";
        }
        return $this->console_format;
    }

    /**
     * Gets log line format.
     *
     * @return string
     */
    final public function getLoggerFileFormat()
    {
        if ($this->file_format === null)
        {
            $this->file_format = "%t [%l] {%c:%f:%L} %p - %m";
        }
        return $this->file_format;
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
