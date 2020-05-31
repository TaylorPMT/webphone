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
use InvalidArgumentException as BaseInvalidArgumentException;

class ParseErrorException extends BaseInvalidArgumentException implements InvalidArgumentException
=======
<<<<<<< HEAD
use InvalidArgumentException;

class ParseErrorException extends InvalidArgumentException
=======
use InvalidArgumentException as BaseInvalidArgumentException;

class ParseErrorException extends BaseInvalidArgumentException implements InvalidArgumentException
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
{
    /**
     * Constructor.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @param string          $expected
     * @param string          $actual
     * @param int             $code
     * @param \Exception|null $previous
=======
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
     * @param string         $expected
     * @param string         $actual
     * @param int            $code
     * @param Exception|null $previous
<<<<<<< HEAD
=======
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
     */
    public function __construct($expected, $actual, $help = '', $code = 0, Exception $previous = null)
    {
        $actual = $actual === '' ? 'data is missing' : "get '$actual'";

        parent::__construct(trim("Format expected $expected but $actual\n$help"), $code, $previous);
    }
}
