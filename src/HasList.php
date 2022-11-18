<?php

namespace Tonghe\TypiCMS\Tools;


trait HasList
{
    public function list()
    {
        return self::published()->orderBy('position', 'ASC')->get();
    }
}
