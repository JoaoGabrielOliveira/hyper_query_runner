<?php
namespace Hyper\Record;

use Hyper\Record\Connection\ConnectionManagement;
use Hyper\Useful\Query;

use PDOException;
use Exception;

class QueryRunner extends Query
{
    public function fetch()
    {
        $statement = $this->prepare();
        $statement->execute();
        return $statement->fetch();
    }

    public function fetchAll()
    {
        $statement = $this->prepare();
        $statement->execute();
        return $statement->fetchAll();
    }

    public function execute()
    {
        $statement = $this->prepare();
        $statement->execute();
        return $statement->rowCount();
    }
    
    public function prepare()
    {
        try
        {
            $statement = ConnectionManagement::prepareStatement($this);
            return $statement;
        }
        catch(PDOException $e)
        {
            return "PDO Error: " . $e->getMessage();
        }
        catch(Exception $e)
        {
            return "Error: " . $e->getMessage();
        }
        
    }
}
?>