<?php

namespace NetherMC\ApiServer;

/**
 * @author NetherMC
 */
class Context
{

    /**
     * @var Request
     */
    public $request;

    /**
     * @var
     */
    public $response;

    /**
     * @var
     */
    public $route;

    /**
     * @var
     */
    public $params;

    public function __construct()
    {
        $this->request = new Request();
    }

}