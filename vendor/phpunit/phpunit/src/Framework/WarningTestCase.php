<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class WarningTestCase extends TestCase
{
    /**
     * @var bool
     */
    protected $backupGlobals = false;

    /**
     * @var bool
     */
    protected $backupStaticAttributes = false;

    /**
     * @var bool
     */
    protected $runTestInSeparateProcess = false;

    /**
     * @var bool
     */
    protected $useErrorHandler = false;

    /**
     * @var string
     */
    private $message;

    /**
     * @param string $message
     */
    public function __construct($message = '')
    {
        $this->message = $message;
        parent::__construct('Warning');
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Returns a string representation of the test case.
     */
    public function toString(): string
    {
        return 'Warning';
    }

    /**
     * @throws Exception
<<<<<<< HEAD
     *
     * @psalm-return never-return
=======
<<<<<<< HEAD
=======
     *
     * @psalm-return never-return
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
     */
    protected function runTest(): void
    {
        throw new Warning($this->message);
    }
}
