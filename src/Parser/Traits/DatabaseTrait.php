<?php


namespace Parser\Traits;


trait DatabaseTrait
{
    /**
     * @var static Database $dbHandle
     */
    private static $dbHandle;

    /**
     * @return static
     */
    public static function getDbHandle()
    {
        return self::$dbHandle;
    }

    /**
     * @param static $dbHandle
     */
    public static function setDbHandle($dbHandle)
    {
        self::$dbHandle = $dbHandle;
    }
}