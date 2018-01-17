<?php
/**
 * Date: 2018/1/14
 * User: lishuo
 */

namespace MyApp\Proxy;


class RecordProxy extends Record
{
    protected $isDirty = false;

    protected $isInitialized = false;

    public function __construct ($data)
    {
        parent::__construct($data);

        // when the record has data, mark it as initialized
        // since Record will hold our business logic, we don't want to
        // implement this behaviour there, but instead in a new proxy class
        // that extends the Record class
        if (null !== $data) {
            $this->isInitialized = true;
            $this->isDirty = true;
        }
    }

    public function __set ($name, $value)
    {
        $this->isDirty = true;
        parent::__set($name, $value);
    }
}