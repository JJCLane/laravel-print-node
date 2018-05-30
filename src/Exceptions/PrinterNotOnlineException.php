<?php

namespace Infernobass7\PrintNode\Exceptions;

use Exception;

class PrinterNotOnlineException extends Exception
{
    /**
     * Create a new authentication exception.
     *
     * @param string $message
     *
     * @return void
     */
    public function __construct($message = 'Printer is not online.')
    {
        parent::__construct($message);
    }
}
