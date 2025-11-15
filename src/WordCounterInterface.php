<?php

declare(strict_types=1);

namespace Ubunvova\WordCount;

interface WordCounterInterface
{
    public function getWordCount(string $text): int;
}
