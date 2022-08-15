<?php

namespace Laserd\Database;

use App\Interfaces\QueriesInterface;
use Laserd\Database\Database;
use PDOException;

abstract class Model implements QueriesInterface
{
    private static $query_result;
    private static $where;
    /**
     * Clase para registrar datos en la base de datos
     * Recibe como parametro un arreglo indexado con el 
     * nombre de los campos y sus valores
     */
    public static function create(array $data): object
    {
        $class = static::class;
        $model = new $class;

        //Completo todos los atributos del Modelo
        foreach ($data as $key => $value) {
            $model->$key = $value;
        }
        /**
         * Filter Data me sirve para crear de forma dinamica
         * los campos y los valores de las base de datos.
         */

        $filter = new FilterData($data);
        $fields = $filter->filterFields();
        $values = $filter->getValuesInArray();
        $values_encoded = $filter->getValuesEncoded();

        try {
            $conn = Database::makeConnection();
            $query = "INSERT INTO " . $model->table . " " . "(" . $fields . ") VALUES (" . $values_encoded . ")";

            $stmt = $conn->prepare($query);
            $stmt->execute($values);
            $model->id = $conn->lastInsertId();

            return $model;
        } catch (PDOException $e) {
            echo "Error en el metodo Model\create(): " . $e->getMessage();
        }

        return $model;
    }

    public static function all(): array
    {
        try {

            $class = static::class;
            $model = new $class;

            $conn = Database::makeConnection();
            $query = "SELECT * FROM $model->table";
            $stmt = $conn->query($query);

            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\Throwable $th) {
            throw $th->getMessage();
        }

        return array();
    }

    public static function select(string $string = null): void
    {

        $class = static::class;
        $model = new $class;

        $query = "SELECT $string from $model->table";
    }
}
