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

namespace Mockery\Loader;

use Mockery\Generator\MockDefinition;
use Mockery\Loader\Loader;

class RequireLoader implements Loader
{
    protected $path;

    public function __construct($path = null)
    {
        $this->path = realpath($path) ?: sys_get_temp_dir();
    }

    public function load(MockDefinition $definition)
    {
        if (class_exists($definition->getClassName(), false)) {
            return;
        }

<<<<<<< HEAD
        $tmpfname = $this->path.DIRECTORY_SEPARATOR."Mockery_".uniqid().".php";
=======
        $tmpfname = $this->path . DIRECTORY_SEPARATOR . "Mockery_" . uniqid() . ".php";
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
        file_put_contents($tmpfname, $definition->getCode());

        require $tmpfname;
    }
}
