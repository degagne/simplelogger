<?php
namespace SimpleLogger;

use SimpleLogger\Colours;
use Psr\Log\AbstractLogger;

class SimpleLogger extends AbstractLogger
{
    /**
     * Configuration class object.
     *
     * @var object
     */
    private $configuration;

    /**
     * Constructor.
     *
     * @param  object $configuration Configuration class object
     * @return void
     */
    public function __construct(Configuration $configuration = null)
    {
        $this->configuration = ($configuration instanceof Configuration) ? $configuration : new Configuration();
    }

    /**
     * Format log line output.
     *
     * @param  string $level    log level
     * @param  string $message  log message
     * @return void
     */
    final protected function formatter($level, $message, $format)
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

        $timestamp = date('c');
        $class = isset($backtrace[3]['class']) ? $backtrace[3]['class'] : "";
        $file = isset($backtrace[2]['file']) ? $backtrace[2]['file'] : "";
        $function = isset($backtrace[3]['function']) ? $backtrace[3]['function'] : "";
        $line = isset($backtrace[2]['line']) ? $backtrace[2]['line'] : "";
        $pid = getmypid();
        $tag = $this->configuration->getTag();

        $identifier = ['%t', '%c', '%f', '%F', '%l', '%L', '%p', '%m', '%T'];
        $values = [$timestamp, $class, $function, $file, strtoupper($level), $line, $pid, $message, $tag];
        $format = str_replace($identifier, $values, $format);

        return $format;
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, $message, array $context = [])
    {
        $stdout = fopen('php://stdout', 'w');
        if ($this->configuration->getLevel($level) >= $this->configuration->getVerbosity())
        {
            if ($this->configuration->getLevel($level) >= $this->configuration->getConsoleVerbosity())
            {
                $console_format = $this->configuration->getLoggerConsoleFormat();
                $logline = $this->formatter($level, $message, $console_format);
                list($foreground, $background) = $this->configuration->getColours($level);
                fwrite($stdout, Colours::setColour($logline, $foreground, $background) . PHP_EOL);
            }

            if (($logfile = $this->configuration->getLogfile()) !== null)
            {
                if (is_writable($logfile) === false)
                {
                    throw new \RuntimeException("Log file {$logfile} is not writable.");
                }

                $file_format = $this->configuration->getLoggerFileFormat();
                $logline = $this->formatter($level, $message, $file_format);
                $handle = fopen($logfile, "a+");
                fwrite($handle, $logline . PHP_EOL);
                fclose($handle);
            }
        }
    }
}
