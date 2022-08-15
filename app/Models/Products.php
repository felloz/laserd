<?php

namespace App\Models;

use Laserd\Database\Model;

class Products extends Model
{
    protected $id;

    protected $name;

    protected $created_at;

    protected $table = "products";

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  void
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  void
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  void
     */
    public function setCreated_at($created_at): void
    {
        $this->created_at = $created_at;
    }
}
