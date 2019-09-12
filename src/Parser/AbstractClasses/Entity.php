<?php


namespace Parser\AbstractClasses;


use Parser\Classes\Database;

abstract class Entity
{
    protected $id;
    protected $table;
    protected $fillable;
    protected $parameters;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param mixed $table
     * @return Entity
     */
    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    public function save(String $table)
    {
        $this->setTable($table);
        $this->fillParameters();
        $this->insert();
    }

    protected function fillParameters()
    {
        if (isset($this->fillable) && is_array($this->fillable)) {
            foreach ($this->fillable as $fillParameter) {
                if (isset($this->{$fillParameter})) {
                    $this->parameters[$fillParameter] = $this->{$fillParameter};
                }
            }
        }
    }

    protected function insert()
    {
        $sql = "INSERT INTO {$this->table} (" . $this->generateColumnsNames() . ") VALUES (" . $this->generateColumnsBinds() . ")";
        $this->id = Database::runQuery($sql, $this->parameters);
    }

    protected function generateColumnsNames()
    {
        $columnsNames = "";
        foreach ($this->parameters as $key => $value) {
            $columnsNames .= "{$key}, ";
        }

        $columnsNames = substr($columnsNames, 0, strlen($columnsNames) - 2);

        return $columnsNames;
    }

    protected function generateColumnsBinds()
    {
        $columnsBinds = "";
        foreach ($this->parameters as $key => $value) {
            $columnsBinds .= ":{$key}, ";
        }
        $columnsBinds = substr($columnsBinds, 0, strlen($columnsBinds) - 2);

        return $columnsBinds;
    }
}