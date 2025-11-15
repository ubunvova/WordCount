<?php

declare(strict_types=1);

namespace Ubunvova\WordCount;

final readonly class WordCounter implements WordCounterInterface
{
    public function getWordCount(string $text): int
    {
        preg_match_all('/\p{L}+/u', $text, $matches);
        return count($matches[0]);
    }
}
