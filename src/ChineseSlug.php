<?php

namespace Jiemoon\ChineseSlug;

use Illuminate\Support\Str;

class ChineseSlug
{
    protected $chinese_slug;

    public function __construct(ChineseSlugRepository $chinese_slug)
    {
        $this->chinese_slug = $chinese_slug;
    }

    public function generateUniqueSlug($string, $table, $column = "slug", $separator = "-")
    {
        $tmp_slug = $this->generateSlug($string, "-");

        $count = $this->chinese_slug->getCountOfMatchingSlugs($table, $column, $tmp_slug);
        if($count > 0) {
            $tmp_slug = sprintf("%s%s%s", $tmp_slug, $separator, ($count + 1));
        }

        return $tmp_slug;
    }

    public function generateSlug($string, $separator = "-")
    {
        return Str::slug($string, $separator);
    }
}
