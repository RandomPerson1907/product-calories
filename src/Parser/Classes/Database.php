<?php


namespace Parser\Classes;


use PDO;

class Database
{
    protected $dbHandle;

    /**
     * Entity constructor.
     * @param $dbHost
     * @param $dbName
     * @param $dbUser
     * @param $dbPassword
     * @param string $dbCharset
     */
    public function __construct($dbHost, $dbName, $dbUser, $dbPassword, $dbCharset = "utf-8")
    {
        try {
            $this->dbHandle = new PDO("mysql:host={$dbHost};dbname={$dbName};charset={$dbCharset}", $dbUser, $dbPassword);
        } catch (\Exception $e) {
            $this->dbHandle = false;
        }
    }

    protected function getDbHandle()
    {
        return $this->dbHandle;
    }
}