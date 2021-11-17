<?php

namespace app\models;

use app\engine\App;
use app\engine\Db;
use PhpParser\Node\Expr\Array_;

abstract class RepositoryModel
{
    abstract protected function getTableName();

    abstract protected function getEntityClass();

    public function getLimit($limit1, $limit2)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} ORDER BY id LIMIT :limit1, :limit2";

        return App::call()->db->queryWhere($sql, [
            "limit1" => $limit1,
            "limit2" => $limit2
        ]);
    }

    public function getOneWhere($name, $value)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE {$name} = :value";

        return App::call()->db->queryOneObject($sql, ['value' => $value], $this->getEntityClass());
    }

    public function getWhere($name, $value)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE {$name} = :value";

        return App::call()->db->queryWhere($sql, [
            "value" => $value
        ]);
    }

    public function getCountWhere($field, $props)
    {
        $params = [];
        $valuesName = [];

        foreach ($props as $key => $value) {
            $params[$key] = $value;
            $valuesName[] = "{$key} = :{$key}";
        }

        $valuesName = join(" AND ", $valuesName);

        $tableName = $this->getTableName();

        $sql = "SELECT count(distinct {$field}) AS count FROM {$tableName} WHERE {$valuesName}";

        return App::call()->db->queryOne($sql, $params)['count'];
    }

    //CRUD Active Record
    public function insert(EntityModel $entity)
    {
        $params = [];
        foreach ($entity->props as $key => $value) {
            $params[$key] = $entity->$key;
        }

        $tableName = $this->getTableName();
        $columnsName = join(', ', array_keys($params));
        $valuesName = ":" . join(', :', array_keys($params));

        $sql = "INSERT INTO {$tableName} ({$columnsName}) VALUES ({$valuesName})";

        App::call()->db->execute($sql, $params);
        $entity->id = App::call()->db->lastInsertId();
    }

    public function update(EntityModel $entity)
    {
        $params = [];
        $valuesName = [];
        foreach ($entity->props as $key => $value) {
            if ($value) {
                $params[$key] = $entity->$key;
                $valuesName[] = "{$key} = :{$key}";
            }
        }

        $tableName = $this->getTableName();
        $valuesName = join(", ", $valuesName);

        $sql = "UPDATE {$tableName} SET {$valuesName} WHERE id = {$entity->id}";

        App::call()->db->execute($sql, $params);
    }

    public function save(EntityModel $entity)
    {
        empty($entity->id) ? $this->insert($entity) : $this->update($entity);
    }

    public function delete(EntityModel $entity)
    {
        $id = $entity->id;
        $tableName = $this->getTableName();

        $sql = "DELETE FROM {$tableName} WHERE id = {$id}";

        return App::call()->db->execute($sql);
    }

    public function deleteWhere($props)
    {
        $params = [];
        $valuesName = [];

        foreach ($props as $key => $value) {
            $params[$key] = $value;
            $valuesName[] = "{$key} = :{$key}";
        }

        $valuesName = join(" AND ", $valuesName);

        $tableName = $this->getTableName();

        $sql = "DELETE FROM {$tableName} WHERE {$valuesName}";

        return App::call()->db->execute($sql, $params);
    }

    public function getOne($id)
    {
        $tableName = $this->getTableName();

        $sql = "SELECT * FROM {$tableName} WHERE id = :id";

        return App::call()->db->queryOneObject($sql, ['id' => $id], $this->getEntityClass());
    }

    public function getAll($sql = null)
    {
        $tableName = $this->getTableName();
        $sql = $sql ?? "SELECT * FROM {$tableName}";

        return App::call()->db->queryAll($sql);
    }
}