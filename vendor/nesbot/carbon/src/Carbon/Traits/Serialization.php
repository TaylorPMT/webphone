<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Carbon\Traits;

<<<<<<< HEAD
use InvalidArgumentException;
=======
use Carbon\Exceptions\InvalidFormatException;
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a

/**
 * Trait Serialization.
 *
 * Serialization and JSON stuff.
 *
 * Depends on the following properties:
 *
 * @property int $year
 * @property int $month
 * @property int $daysInMonth
 * @property int $quarter
 *
 * Depends on the following methods:
 *
 * @method string|static locale(string $locale = null)
 * @method string        toJSON()
 */
trait Serialization
{
    use ObjectInitialisation;

    /**
     * The custom Carbon JSON serializer.
     *
     * @var callable|null
     */
    protected static $serializer;

    /**
     * List of key to use for dump/serialization.
     *
     * @var string[]
     */
    protected $dumpProperties = ['date', 'timezone_type', 'timezone'];

    /**
     * Locale to dump comes here before serialization.
     *
     * @var string|null
     */
    protected $dumpLocale = null;

    /**
     * Return a serialized string of the instance.
     *
     * @return string
     */
    public function serialize()
    {
        return serialize($this);
    }

    /**
     * Create an instance from a serialized string.
     *
     * @param string $value
     *
<<<<<<< HEAD
     * @throws \InvalidArgumentException
=======
     * @throws InvalidFormatException
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
     *
     * @return static
     */
    public static function fromSerialized($value)
    {
        $instance = @unserialize("$value");

        if (!$instance instanceof static) {
<<<<<<< HEAD
            throw new InvalidArgumentException('Invalid serialized value.');
=======
            throw new InvalidFormatException("Invalid serialized value: $value");
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
        }

        return $instance;
    }

    /**
     * The __set_state handler.
     *
     * @param string|array $dump
     *
     * @return static
     */
    public static function __set_state($dump)
    {
        if (is_string($dump)) {
            return static::parse($dump);
        }

        /** @var \DateTimeInterface $date */
        $date = get_parent_class(static::class) && method_exists(parent::class, '__set_state')
            ? parent::__set_state((array) $dump)
            : (object) $dump;

        return static::instance($date);
    }

    /**
     * Returns the list of properties to dump on serialize() called on.
     *
     * @return array
     */
    public function __sleep()
    {
        $properties = $this->dumpProperties;

        if ($this->localTranslator ?? null) {
            $properties[] = 'dumpLocale';
            $this->dumpLocale = $this->locale ?? null;
        }

        return $properties;
    }

    /**
     * Set locale if specified on unserialize() called.
     */
    public function __wakeup()
    {
        if (get_parent_class() && method_exists(parent::class, '__wakeup')) {
            parent::__wakeup();
        }

        $this->constructedObjectId = spl_object_hash($this);

        if (isset($this->dumpLocale)) {
            $this->locale($this->dumpLocale);
            $this->dumpLocale = null;
        }

        $this->cleanupDumpProperties();
    }

    /**
     * Prepare the object for JSON serialization.
     *
     * @return array|string
     */
    public function jsonSerialize()
    {
        $serializer = $this->localSerializer ?? static::$serializer;
        if ($serializer) {
            return is_string($serializer)
                ? $this->rawFormat($serializer)
                : call_user_func($serializer, $this);
        }

        return $this->toJSON();
    }

    /**
     * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
     *             You should rather transform Carbon object before the serialization.
     *
     * JSON serialize all Carbon instances using the given callback.
     *
     * @param callable $callback
     *
     * @return void
     */
    public static function serializeUsing($callback)
    {
        static::$serializer = $callback;
    }

    /**
     * Cleanup properties attached to the public scope of DateTime when a dump of the date is requested.
     * foreach ($date as $_) {}
     * serializer($date)
     * var_export($date)
     * get_object_vars($date)
     */
    public function cleanupDumpProperties()
    {
        foreach ($this->dumpProperties as $property) {
            if (isset($this->$property)) {
                unset($this->$property);
            }
        }

        return $this;
    }
}
