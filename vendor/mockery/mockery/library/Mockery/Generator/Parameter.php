<?php
/**
 * Mockery
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://github.com/padraic/mockery/blob/master/LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to padraic@php.net so we can send you a copy immediately.
 *
 * @category   Mockery
 * @package    Mockery
 * @copyright  Copyright (c) 2010 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/mockery/blob/master/LICENSE New BSD License
 */

namespace Mockery\Generator;

class Parameter
{
    private static $parameterCounter;

    private $rfp;

    public function __construct(\ReflectionParameter $rfp)
    {
        $this->rfp = $rfp;
    }

    public function __call($method, array $args)
    {
        return call_user_func_array(array($this->rfp, $method), $args);
    }

    public function getClass()
    {
        return new DefinedTargetClass($this->rfp->getClass());
    }

    public function getTypeHintAsString()
    {
        if (method_exists($this->rfp, 'getTypehintText')) {
            // Available in HHVM
            $typehint = $this->rfp->getTypehintText();

            // not exhaustive, but will do for now
            if (in_array($typehint, array('int', 'integer', 'float', 'string', 'bool', 'boolean'))) {
                return '';
            }

            return $typehint;
        }

        if ($this->rfp->isArray()) {
            return 'array';
        }

<<<<<<< HEAD
        try {
            if ($this->rfp->getClass()) {
                return $this->rfp->getClass()->getName();
=======
<<<<<<< HEAD
        /*
         * PHP < 5.4.1 has some strange behaviour with a typehint of self and
         * subclass signatures, so we risk the regexp instead
         */
        if ((version_compare(PHP_VERSION, '5.4.1') >= 0)) {
            try {
                if ($this->rfp->getClass()) {
                    return $this->rfp->getClass()->getName();
                }
            } catch (\ReflectionException $re) {
                // noop
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
            }
        } catch (\ReflectionException $re) {
            // noop
        }

        if ($this->rfp->hasType()) {
            return $this->rfp->getType()->getName();
        }

<<<<<<< HEAD
        // can we even get here now?
=======
=======
        try {
            if ($this->rfp->getClass()) {
                return $this->rfp->getClass()->getName();
            }
        } catch (\ReflectionException $re) {
            // noop
        }

        if ($this->rfp->hasType()) {
            return $this->rfp->getType()->getName();
        }

        // can we even get here now?
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
        if (preg_match('/^Parameter #[0-9]+ \[ \<(required|optional)\> (?<typehint>\S+ )?.*\$' . $this->rfp->getName() . ' .*\]$/', $this->rfp->__toString(), $typehintMatch)) {
            if (!empty($typehintMatch['typehint'])) {
                return $typehintMatch['typehint'];
            }
        }

        return '';
    }

    /**
     * Some internal classes have funny looking definitions...
     */
    public function getName()
    {
        $name = $this->rfp->getName();
        if (!$name || $name == '...') {
            $name = 'arg' . static::$parameterCounter++;
        }

        return $name;
    }


    /**
     * Variadics only introduced in 5.6
     */
    public function isVariadic()
    {
        return $this->rfp->isVariadic();
    }
}
