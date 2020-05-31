<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Carbon\Exceptions;

use Exception;
<<<<<<< HEAD
use InvalidArgumentException;

class NotAPeriodException extends InvalidArgumentException
=======
use InvalidArgumentException as BaseInvalidArgumentException;

class NotAPeriodException extends BaseInvalidArgumentException implements InvalidArgumentException
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
{
    /**
     * Constructor.
     *
<<<<<<< HEAD
     * @param string          $message
     * @param int             $code
     * @param \Exception|null $previous
=======
     * @param string         $message
     * @param int            $code
     * @param Exception|null $previous
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
     */
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
