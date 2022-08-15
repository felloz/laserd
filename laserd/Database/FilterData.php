<?php

namespace Laserd\Database;

class FilterData
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function filterFields()
    {
        $f = array(); // create blank arrays
        foreach ($this->data as $key => $value) {
            $f[] = $key; // push values to the array
        }
        $fields = implode(",", $f);

        return $fields;
    }

    public function filterValues()
    {
        $v = array(); // create blank arrays
        foreach ($this->data as $key => $value) {
            $v[] = $value; // push values to the array
        }
        $values = implode(",", $v);

        return $values;
    }
    /**
     * Regresa los valores en formato array 
     */
    public function getValuesInArray(): array
    {
        $v = array(); // create blank arrays
        foreach ($this->data as $key => $value) {
            $v[] = $value; // push values to the array
        }
        $values = implode(",", $v);

        return $v;
    }
    /**
     * Retorna los signos de interrogacion acorde  a la cantidad de 
     * campos a registrar
     */
    public function getValuesEncoded(): string
    {
        $ve = array();
        foreach ($this->data as $value) {

            $ve[] = "?";
        }

        return implode(",", $ve);
    }

    /**
     * Get the value of data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  void
     */
    public function setData($data): void
    {
        $this->data = $data;
    }
}
