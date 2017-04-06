<?php

use PHPUnit\Framework\TestCase;
use Jiemoon\ChineseSlug\ChineseTranslate;

class ChineseTranslateTest extends TestCase
{
    private $chinese_translate;

    /**
     * @before
     */
    public function init()
    {
        $this->chinese_translate = new ChineseTranslate(['baidu' => [
            'api_id' => '20170402000044051',
            'api_secret' => '6_7LjXv4nRuvhP4tujJD'
        ]]);
    }


    public function testEnglish()
    {
        $string = 'hello';
        $slug = $this->chinese_translate->translate($string);
        $this->assertEquals($string, $slug);
    }

    public function testChinese()
    {
        $string = '这是一个好标题';
        $slug = $this->chinese_translate->translate($string);
        $this->assertEquals('this is a good title', $slug);
    }
}
