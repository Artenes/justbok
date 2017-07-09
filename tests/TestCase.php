<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

/**
 * Base TestCase class.
 *
 * @package Tests
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Returns the given path appended with api/{current-api-version}
     *
     * @param string $path
     * @param null $version
     * @return string
     */
    protected function url($path = '', $version = null)
    {

        $currentVersion = $version ?? config('app.version');

        return "api/$currentVersion/" . $path;

    }

}
