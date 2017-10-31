<?php
namespace SimpleLogger;

class Colours
{
    /**
     * Foreground colours.
     *
     * @var array
     */
    private static $FOREGROUND = [
        'black'         => '0;30',
        'dark_gray'     => '1;30',
        'red'           => '0;31',
        'light_red'     => '1;31',
        'green'         => '0;32',
        'light_green'   => '1;32',
        'yellow'        => '0;33',
        'light_yellow'  => '1;33',
        'blue'          => '0;34',
        'light_blue'    => '1;34',
        'purple'        => '0;35',
        'light_purple'  => '1:35',
        'cyan'          => '0:36',
        'light_cyan'    => '1;36',
        'light_gray'    => '0;37',
        'white'         => '1;37',
    ];

    /**
     * Background colours.
     *
     * @var array
     */
    private static $BACKGROUND = [
        'black'         => '40',
        'red'           => '41',
        'green'         => '42',
        'yellow'        => '43',
        'blue'          => '44',
        'magenta'       => '45',
        'cyan'          => '46',
        'light_gray'    => '47',
    ];

    /**
     * Colourize string.
     *
     * @param  string $string     string to colourize
     * @param  string $foreground foreground colour
     * @param  string $background background colour
     * @return string
     */
    final public function setColour($string, $foreground = null, $background = null)
    {
        $foreground = isset(self::$FOREGROUND[$foreground]) ? "\033[" . self::$FOREGROUND[$foreground] . "m" : "";
        $background = isset(self::$BACKGROUND[$background]) ? "\033[" . self::$BACKGROUND[$background] . "m" : "";
        $lineending = "\033[0m";
        return "{$foreground}{$background}{$string}{$lineending}";
    }
}
