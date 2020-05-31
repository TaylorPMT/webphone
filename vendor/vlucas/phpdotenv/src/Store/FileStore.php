<?php

namespace Dotenv\Store;

use Dotenv\Exception\InvalidPathException;
use Dotenv\Store\File\Reader;

class FileStore implements StoreInterface
{
    /**
     * The file paths.
     *
     * @var string[]
     */
    protected $filePaths;

    /**
     * Should file loading short circuit?
     *
     * @var bool
     */
    protected $shortCircuit;

    /**
     * Create a new file store instance.
     *
     * @param string[] $filePaths
     * @param bool     $shortCircuit
     *
     * @return void
     */
    public function __construct(array $filePaths, $shortCircuit)
    {
        $this->filePaths = $filePaths;
        $this->shortCircuit = $shortCircuit;
    }

    /**
     * Read the content of the environment file(s).
     *
     * @throws \Dotenv\Exception\InvalidPathException
     *
     * @return string
     */
    public function read()
    {
        if ($this->filePaths === []) {
            throw new InvalidPathException('At least one environment file path must be provided.');
        }

        $contents = Reader::read($this->filePaths, $this->shortCircuit);

<<<<<<< HEAD
        if ($contents) {
=======
        if (count($contents) > 0) {
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
            return implode("\n", $contents);
        }

        throw new InvalidPathException(
            sprintf('Unable to read any of the environment file(s) at [%s].', implode(', ', $this->filePaths))
        );
    }
}
