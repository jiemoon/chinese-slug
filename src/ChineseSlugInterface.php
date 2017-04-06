<?php

namespace Jiemoon\ChineseSlug;

interface ChineseSlugInterface
{
    function getCountOfMatchingSlugs($table, $column, $slug);
}
