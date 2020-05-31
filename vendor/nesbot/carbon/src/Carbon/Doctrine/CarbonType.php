<?php

/**
 * Thanks to https://github.com/flaushi for his suggestion:
 * https://github.com/doctrine/dbal/issues/2873#issuecomment-534956358
 */
namespace Carbon\Doctrine;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Carbon\Carbon;
use Carbon\CarbonInterface;
use DateTimeInterface;
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
use Doctrine\DBAL\Platforms\AbstractPlatform;

class CarbonType extends DateTimeType implements CarbonDoctrineType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'carbon';
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
=======
use Doctrine\DBAL\Platforms\AbstractPlatform;

class CarbonType extends DateTimeType implements CarbonDoctrineType
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'carbon';
    }

    /**
     * {@inheritdoc}
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
     */
    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}
