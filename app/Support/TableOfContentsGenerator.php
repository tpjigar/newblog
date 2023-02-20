<?php

namespace App\Support;

use Illuminate\Support\Str;

class TableOfContentsGenerator
{
    public static function generate(string $content) : array
    {
        preg_match_all('/(#{1,6}) (.*)/', $content, $headings);

        $tableOfContents = [];

        for ($i = 0; $i < count($headings[0]); ++$i) {
            $title = html_entity_decode(strip_tags(Str::marxdown($headings[2][$i])));

            $tableOfContents[] = [
                'id' => md5(str($title)->slug()),
                'title' => trim($title),
                'level' => strlen($headings[1][$i]),
            ];
        }

        return $tableOfContents;
    }
}
