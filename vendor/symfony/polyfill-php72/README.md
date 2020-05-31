Symfony Polyfill / Php72
========================

This component provides functions added to PHP 7.2 core:

- [`spl_object_id`](https://php.net/spl_object_id)
- [`stream_isatty`](https://php.net/stream_isatty)

On Windows only:

- [`sapi_windows_vt100_support`](https://php.net/sapi_windows_vt100_support)

Moved to core since 7.2 (was in the optional XML extension earlier):

- [`utf8_encode`](https://php.net/utf8_encode)
- [`utf8_decode`](https://php.net/utf8_decode)

<<<<<<< HEAD
Also, it provides constants added to PHP 7.2:
=======
<<<<<<< HEAD
Also, it provides a constant added to PHP 7.2:
=======
Also, it provides constants added to PHP 7.2:
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
>>>>>>> 9699cae06a00ea46819366b49ff86b34206b891d
- [`PHP_FLOAT_*`](https://php.net/reserved.constants#constant.php-float-dig)
- [`PHP_OS_FAMILY`](https://php.net/reserved.constants#constant.php-os-family)

More information can be found in the
[main Polyfill README](https://github.com/symfony/polyfill/blob/master/README.md).

License
=======

This library is released under the [MIT license](LICENSE).
