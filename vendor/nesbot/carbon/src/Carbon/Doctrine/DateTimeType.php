<?php

/**
 * Thanks to https://github.com/flaushi for his suggestion:
 * https://github.com/doctrine/dbal/issues/2873#issuecomment-534956358
 */
namespace Carbon\Doctrine;

use Doctrine\DBAL\Types\VarDateTimeType;

<<<<<<< HEAD
class DateTimeType extends VarDateTimeType implements CarbonDoctrineType
{
    use CarbonTypeConverter;
=======
<<<<<<< HEAD
class DateTimeType extends VarDateTimeType
{
    use CarbonType;
=======
class DateTimeType extends VarDateTimeType implements CarbonDoctrineType
{
    use CarbonTypeConverter;
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
}
