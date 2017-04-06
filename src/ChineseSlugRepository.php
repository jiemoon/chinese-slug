<?php

namespace Jiemoon\ChineseSlug;

use Illuminate\Support\Facades\DB;

class ChineseSlugRepository implements ChineseSlugInterface
{
    public function getCountOfMatchingSlugs($table, $column, $slug)
    {
        return DB::table($table)->where($column, 'LIKE', $slug.'%')->count();
    }
}
