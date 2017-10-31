<?php
namespace SimpleLogger\Utils;

use SimpleLogger\Configuration;
use SimpleLogger\SimpleLogger;
use Psr\Log\LogLevel;

class Logger extends SimpleLogger
{
    /**
     * SimpleLogger class object.
     *
     * @var object
     */
    private $logger;

    /**
     * Constructor.
     *
     * @param   string $logfile
     * @return  object
     */
    public function __construct($logfile)
    {
        $configuration = new Configuration();
        $configuration
            ->setLogFile($logfile)
            ->setVerbosity(LogLevel::INFO)
            ->setFormat("%t %l %c:%f %p - %m");
        return parent::__construct($configuration);
    }
}
