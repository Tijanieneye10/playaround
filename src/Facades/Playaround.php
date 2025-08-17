<?php

namespace Tijanieneye10\Playaround\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tijanieneye10\Playaround\Playaround
 */
class Playaround extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Tijanieneye10\Playaround\Playaround::class;
    }
}
