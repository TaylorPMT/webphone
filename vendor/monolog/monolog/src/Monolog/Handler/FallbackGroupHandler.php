<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Throwable;

class FallbackGroupHandler extends GroupHandler
{
    /**
     * {@inheritdoc}
     */
    public function handle(array $record): bool
    {
        if ($this->processors) {
            $record = $this->processRecord($record);
        }
        foreach ($this->handlers as $handler) {
            try {
                $handler->handle($record);
                break;
            } catch (Throwable $e) {
                // What throwable?
            }
        }
<<<<<<< HEAD
=======

>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
        return false === $this->bubble;
    }

    /**
     * {@inheritdoc}
     */
    public function handleBatch(array $records): void
    {
        if ($this->processors) {
            $processed = [];
            foreach ($records as $record) {
                $processed[] = $this->processRecord($record);
            }
            $records = $processed;
        }

        foreach ($this->handlers as $handler) {
            try {
                $handler->handleBatch($records);
                break;
            } catch (Throwable $e) {
                // What throwable?
            }
        }
    }
}
