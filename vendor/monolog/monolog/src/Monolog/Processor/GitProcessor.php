<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Processor;

use Monolog\Logger;

/**
 * Injects Git branch and Git commit SHA in all records
 *
 * @author Nick Otter
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class GitProcessor implements ProcessorInterface
{
    private $level;
    private static $cache;

    /**
     * @param string|int $level The minimum logging level at which this Processor will be triggered
     */
    public function __construct($level = Logger::DEBUG)
    {
        $this->level = Logger::toMonologLevel($level);
    }

    public function __invoke(array $record): array
    {
        // return if the level is not high enough
        if ($record['level'] < $this->level) {
            return $record;
        }

        $record['extra']['git'] = self::getGitInfo();

        return $record;
    }

    private static function getGitInfo(): array
    {
        if (self::$cache) {
            return self::$cache;
        }

        $branches = `git branch -v --no-abbrev`;
<<<<<<< HEAD
        if ($branches && preg_match('{^\* (.+?)\s+([a-f0-9]{40})(?:\s|$)}m', $branches, $matches)) {
=======
<<<<<<< HEAD
        if (preg_match('{^\* (.+?)\s+([a-f0-9]{40})(?:\s|$)}m', $branches, $matches)) {
=======
        if ($branches && preg_match('{^\* (.+?)\s+([a-f0-9]{40})(?:\s|$)}m', $branches, $matches)) {
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
            return self::$cache = [
                'branch' => $matches[1],
                'commit' => $matches[2],
            ];
        }

        return self::$cache = [];
    }
}
