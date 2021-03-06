<?php

namespace Carbon\Traits;

<<<<<<< HEAD
use Carbon\Exceptions\InvalidCastException;
use DateTimeInterface;
=======
<<<<<<< HEAD
use DateTimeInterface;
use InvalidArgumentException;
=======
use Carbon\Exceptions\InvalidCastException;
use DateTimeInterface;
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d

/**
 * Trait Cast.
 *
 * Utils to cast into an other class.
 */
trait Cast
{
    /**
     * Cast the current instance into the given class.
     *
     * @param string $className The $className::instance() method will be called to cast the current object.
     *
     * @return DateTimeInterface
     */
    public function cast(string $className)
    {
        if (!method_exists($className, 'instance')) {
            if (is_a($className, DateTimeInterface::class, true)) {
                return new $className($this->rawFormat('Y-m-d H:i:s.u'), $this->getTimezone());
            }

<<<<<<< HEAD
            throw new InvalidCastException("$className has not the instance() method needed to cast the date.");
=======
<<<<<<< HEAD
            throw new InvalidArgumentException("$className has not the instance() method needed to cast the date.");
=======
            throw new InvalidCastException("$className has not the instance() method needed to cast the date.");
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
        }

        return $className::instance($this);
    }
}
