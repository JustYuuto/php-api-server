<?php

namespace NetherMC\ApiServer;

/**
 * @author NetherMC
 */
class Request
{

    /**
     * @return string the current host, with the port
     */
    public function getHost(): string
    {
        return $_SERVER['HTTP_HOST'];
    }

    /**
     * @return string the method used the load the page
     */
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return int the server port
     */
    public function getPort(): int
    {
        return (int) $_SERVER['SERVER_PORT'];
    }

    /**
     * @return string|null the page referrer. "null" if there's no referrer
     */
    public function getReferrer(): ?string
    {
        return $_SERVER['HTTP_REFERER'];
    }

}