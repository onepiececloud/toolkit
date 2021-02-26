<?php

/**
 * 常见断言
 * assertTrue
 * assertFalse
 * assertCount
 * assertEmpty
 * assertEquals
 * assertLessThan
 * assertNull
 */
abstract class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * 浏览器友好的变量输出
     * @access public
     * @param  mixed         $var 变量
     * @param  string        $label 标签 默认为空
     * @return void|string
     */
    protected function p($var, $label = null)
    {
        $label = (null === $label) ? '' : rtrim($label) . ':';

        ob_start();
        var_dump($var);

        $output = ob_get_clean();
        $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

        if (PHP_SAPI == 'cli') {
            $output = PHP_EOL . $label . $output . PHP_EOL;
        } else {
            if (!extension_loaded('xdebug')) {
                $output = htmlspecialchars($output, ENT_SUBSTITUTE);
            }
            $output = '<pre>' . $label . $output . '</pre>';
        }
        echo $output;
        die;
    }

    /**
     * 浏览器友好的变量输出
     * @access public
     * @param  mixed         $var 变量
     * @param  string        $label 标签 默认为空
     * @return void|string
     */
    protected function dump($var, $label = null)
    {
        $label = (null === $label) ? '' : rtrim($label) . ':';

        ob_start();
        var_dump($var);

        $output = ob_get_clean();
        $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);

        if (PHP_SAPI == 'cli') {
            $output = PHP_EOL . $label . $output . PHP_EOL;
        } else {
            if (!extension_loaded('xdebug')) {
                $output = htmlspecialchars($output, ENT_SUBSTITUTE);
            }
            $output = '<pre>' . $label . $output . '</pre>';
        }
        echo $output;
    }

}
