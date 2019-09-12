<?php


namespace Parser\Classes;


use PDO;

class Database
{
    protected static $dbHandle;

    /**
     * Entity constructor.
     * @param $dbHost
     * @param $dbName
     * @param $dbUser
     * @param $dbPassword
     * @param string $dbCharset
     */
    public static function connect($dbHost, $dbName, $dbUser, $dbPassword, $dbCharset = "utf-8")
    {
        try {
            self::$dbHandle = new PDO("mysql:host={$dbHost};dbname={$dbName};charset={$dbCharset}", $dbUser, $dbPassword);
        } catch (\Exception $e) {
            self::$dbHandle = false;
        }
    }

    public static function getHandle()
    {
        return self::$dbHandle;
    }

    public static function runQuery(string $sql, $parameters)
    {
        $sth = self::$dbHandle->prepare($sql);

        foreach ($parameters as $parameterKey => $parameterValue) {
            $sth->bindParam(":{$parameterKey}", $parameterValue);
        }

        $result = $sth->execute();

        if ($id = self::$dbHandle->lastInsertId()) {
            return (int)self::$dbHandle->lastInsertId();
        } else {
            return $result;
        }
    }
}