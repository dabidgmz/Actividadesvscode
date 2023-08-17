<?php

class CRUD
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function create($data)
    {
        $connection = $this->db->getConnection();
        $name = $data['name'];
        $email = $data['email'];

        $query = "INSERT INTO usuarios (nombre, email) VALUES (:name, :email)";
        $statement = $connection->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':email', $email);

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Resto de métodos...
    
    public function read()
{
    $connection = $this->db->getConnection();

    $query = "SELECT * FROM usuarios";
    $statement = $connection->query($query);

    if ($statement) {
        if ($statement->rowCount() > 0) {
            $users = array();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $users[] = $row;
            }
            return $users;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


public function update($id, $data)
{
    $connection = $this->db->getConnection();
    $name = $data['name'];
    $email = $data['email'];

    $query = "UPDATE usuarios SET nombre=:name, email=:email WHERE id=:id";
    $statement = $connection->prepare($query);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':id', $id);

    if ($statement->execute()) {
        return true;
    } else {
        return false;
    }
}


    public function delete($id)
    {
        $connection = $this->db->getConnection();

        $query = "DELETE FROM usuarios WHERE id=$id";

        if ($connection->query($query) === true) {
            return true;
        } else {
            return false;
        }
    }

}
