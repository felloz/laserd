<?php

namespace App\Models;



use Laserd\Database\Model as LaserdModel;

//probando eloquent
use Illuminate\Database\Eloquent\Model;

/**
 * En caso de que deseemos probar el Model que estamos desearrollando es solo cambiar
 * el de eloquent por LaserdModel
 */
class User extends Model
{
    protected $id;
    protected $username;
    protected $email;
    protected $user;
    protected $password;
    protected $created_at;
    protected $updated_at;
    protected $table = "users";

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
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  void
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return
     */
    public function setPassword($password): void
    {
        $this->password = $password;
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

    /**
     * Get the value of updated_at
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  void
     */
    public function setUpdated_at($updated_at): void
    {
        $this->updated_at = $updated_at;
    }

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
}
