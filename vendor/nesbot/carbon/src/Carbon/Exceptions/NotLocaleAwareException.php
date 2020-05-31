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

class NotLocaleAwareException extends InvalidArgumentException
=======
use InvalidArgumentException as BaseInvalidArgumentException;

class NotLocaleAwareException extends BaseInvalidArgumentException implements InvalidArgumentException
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
{
    /**
     * Constructor.
     *
<<<<<<< HEAD
     * @param mixed           $object
     * @param int             $code
     * @param \Exception|null $previous
=======
     * @param mixed          $object
     * @param int            $code
     * @param Exception|null $previous
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
     */
    public function __construct($object, $code = 0, Exception $previous = null)
    {
        $dump = is_object($object) ? get_class($object) : gettype($object);

        parent::__construct("$dump does neither implements Symfony\Contracts\Translation\LocaleAwareInterface nor getLocale() method.", $code, $previous);
    }
}
