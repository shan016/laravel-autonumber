<?php

namespace Shan016\AutoNumber;

use Shan016\AutoNumber\Observers\AutoNumberObserver;

trait AutoNumberTrait
{
    /**
     * Boot the soft deleting trait for a model.
     *
     * @return void
     */
    public static function bootAutoNumberTrait()
    {
        static::observe(AutoNumberObserver::class);
    }

    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    abstract public function getAutoNumberOptions();
}
