<?php

namespace App\Core\Database;
use PDO;

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\PDOException $e) {
            throw new \Exception('Something went wrong');
        }
    }

    public function find($table, $id) {
        $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE id={$id}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function find_by($table, $parameter) {
        $sql = sprintf('SELECT * FROM %s WHERE %s=(%s)',
            $table,
            implode(', ', array_keys($parameter)),
            ':' . implode(', :', array_keys($parameter))
        );
        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameter);
            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (\PDOException $e) {
            throw new \Exception('Something went wrong');
        }
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
