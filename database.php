<?php /*Conectando o DB.
inicialização */

class database
{
    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=8000;dbname=demo;charset=utf8mb4";
        $password = "secret"; // replace 'your_password' with the actual password

        $this->connection = new PDO($dsn, 'homestead', $password);
    }

    public function query ($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}