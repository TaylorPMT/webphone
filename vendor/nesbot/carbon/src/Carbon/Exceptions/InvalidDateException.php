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

class InvalidDateException extends BaseInvalidArgumentException implements InvalidArgumentException
=======
<<<<<<< HEAD
use InvalidArgumentException;

class InvalidDateException extends InvalidArgumentException
=======
use InvalidArgumentException as BaseInvalidArgumentException;

class InvalidDateException extends BaseInvalidArgumentException implements InvalidArgumentException
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
{
    /**
     * The invalid field.
     *
     * @var string
     */
    private $field;

    /**
     * The invalid value.
     *
     * @var mixed
     */
    private $value;

    /**
     * Constructor.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @param string          $field
     * @param mixed           $value
     * @param int             $code
     * @param \Exception|null $previous
=======
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
     * @param string         $field
     * @param mixed          $value
     * @param int            $code
     * @param Exception|null $previous
<<<<<<< HEAD
=======
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
     */
    public function __construct($field, $value, $code = 0, Exception $previous = null)
    {
        $this->field = $field;
        $this->value = $value;
        parent::__construct($field.' : '.$value.' is not a valid value.', $code, $previous);
    }

    /**
     * Get the invalid field.
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Get the invalid value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
