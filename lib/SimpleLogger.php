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
    final protected function formatter($level, $message, array $context)
    {
        $timestamp = date('c');
        $class = end(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS))['class'];
        $file = end(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS))['file'];
        $function = end(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS))['function'];
        $line = end(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS))['line'];
        $pid = getmypid();

        $identifier = ['%t', '%c', '%f', '%F', '%l', '%L', '%p', '%m'];
        $values = [$timestamp, $class, $function, $file, strtoupper($level), $line, $pid, $message];
        $format = str_replace($identifier, $values, $this->configuration->getFormat());

        return $format;
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, $message, array $context = [])
    {
        if ($this->configuration->getLevel($level) >= $this->configuration->getVerbosity())
        {
            $logline = $this->formatter($level, $message, $context);
            list($foreground, $background) = $this->configuration->getColours($level);
            fwrite(STDOUT, Colours::setColour($logline, $foreground, $background) . PHP_EOL);

            $logfile = $this->configuration->getLogfile();
            if ($logfile !== null)
            {
                $handle = fopen($logfile, "a+");
                fwrite($handle, $logline . PHP_EOL);
                fclose($handle);
            }
        }
    }
}
