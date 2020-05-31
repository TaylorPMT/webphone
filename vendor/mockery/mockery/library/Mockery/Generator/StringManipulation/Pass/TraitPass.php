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

namespace Mockery\Generator\StringManipulation\Pass;

use Mockery\Generator\MockConfiguration;

class TraitPass implements Pass
{
    public function apply($code, MockConfiguration $config)
    {
        $traits = $config->getTargetTraits();

        if (empty($traits)) {
            return $code;
        }

        $useStatements = array_map(function ($trait) {
<<<<<<< HEAD
            return "use \\\\" . ltrim($trait->getName(), "\\") . ";";
=======
<<<<<<< HEAD
            return "use \\\\".ltrim($trait->getName(), "\\").";";
=======
            return "use \\\\" . ltrim($trait->getName(), "\\") . ";";
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
        }, $traits);

        $code = preg_replace(
            '/^{$/m',
<<<<<<< HEAD
            "{\n    " . implode("\n    ", $useStatements) . "\n",
=======
<<<<<<< HEAD
            "{\n    ".implode("\n    ", $useStatements)."\n",
=======
            "{\n    " . implode("\n    ", $useStatements) . "\n",
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
            $code
        );

        return $code;
    }
}
