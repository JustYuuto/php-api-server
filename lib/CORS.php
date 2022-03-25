<?php

namespace NetherMC\ApiServer;

/**
 * @author NetherMC
 * @link https://github.com/NetherMCtv/php-api-server/wiki/CORS
 */
class CORS
{

    /**
     * @param array|null $options
     */
    public function __construct(?array $options = [])
    {
        if (gettype($options['enabled']) !== 'boolean') {
            throw new \UnexpectedValueException(
                "\"{$options['enabled']}\" is not a boolean. Expected values: true, false"
            );
        }

        if ($options['enabled']) {
            header('Access-Control-Allow-Origin: *');
        }
    }

}