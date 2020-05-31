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

class InvalidDateException extends InvalidArgumentException
=======
use InvalidArgumentException as BaseInvalidArgumentException;

class InvalidDateException extends BaseInvalidArgumentException implements InvalidArgumentException
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
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
     * @param string          $field
     * @param mixed           $value
     * @param int             $code
     * @param \Exception|null $previous
=======
     * @param string         $field
     * @param mixed          $value
     * @param int            $code
     * @param Exception|null $previous
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
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
