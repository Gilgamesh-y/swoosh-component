<?php

namespace Src\Redis\Connections;

class SwRedisConnection extends Connection
{
    /**
     * Create a new Redis connection.
     *
     * @param  Swoole\Coroutine\Redis  $client
     * @return void
     */
    public function __construct($client)
    {
        $this->client = $client;
    }
}
