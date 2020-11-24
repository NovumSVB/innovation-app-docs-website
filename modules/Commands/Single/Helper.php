<?php


namespace InnovationApp\modules\Commands\Single;


class Helper
{
    public static function escape(string $text)
    {
        $text = preg_replace('/([^\\\\]?)</', '$1\\<', $text);

        return self::escapeTrailingBackslash($text);
    }
    public static function escapeTrailingBackslash(string $text): string
    {
        if ('\\' === substr($text, -1)) {
            $len = \strlen($text);
            $text = rtrim($text, '\\');
            $text = str_replace("\0", '', $text);
            $text .= str_repeat("\0", $len - \strlen($text));
        }

        return $text;
    }
}