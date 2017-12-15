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
        $this->configuration = ($configuration instanceof Configuration)
            ? $configuration
            : new Configuration();
    }

    /**
     * Format log line output.
     *
     * @param  string $level    log level
     * @param  string $message  log message
     * @param  array  $context  log line context
     * @return void
     */
    final protected function formatter($level, $message, array $context, $format)
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);

        $timestamp = date('c');
        $class = isset($backtrace[3]['class']) ? $backtrace[3]['class'] : "";
        $file = isset($backtrace[2]['file']) ? $backtrace[2]['file'] : "";
        $function = isset($backtrace[3]['function']) ? $backtrace[3]['function'] : "";
        $line = isset($backtrace[2]['line']) ? $backtrace[2]['line'] : "";
        $pid = getmypid();

        $identifier = ['%t', '%c', '%f', '%F', '%l', '%L', '%p', '%m'];
        $values = [$timestamp, $class, $function, $file, strtoupper($level), $line, $pid, $message];
        $format = str_replace($identifier, $values, $format);

        return $format;
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, $message, array $context = [])
    {
        if ($this->configuration->getLevel($level) >= $this->configuration->getVerbosity())
        {
            if ($this->configuration->getLevel($level) >= $this->configuration->getConsoleVerbosity())
            {
                $console_format = $this->configuration->getLoggerConsoleFormat();
                $logline = $this->formatter($level, $message, $context, $console_format);
                list($foreground, $background) = $this->configuration->getColours($level);
                fwrite(STDOUT, Colours::setColour($logline, $foreground, $background) . PHP_EOL);
            }

            $logfile = $this->configuration->getLogfile();
            if ($logfile !== null)
            {
                if (is_writable($logfile) === false)
                {
                    throw new \RuntimeException("Log file {$logfile} is not writable.");
                }

                $file_format = $this->configuration->getLoggerFileFormat();
                $logline = $this->formatter($level, $message, $context, $file_format);
                $handle = fopen($logfile, "a+");
                fwrite($handle, $logline . PHP_EOL);
                fclose($handle);
            }
        }
    }
}
