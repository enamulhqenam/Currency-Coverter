<?php
    class Db
    {
        private $host   = '127.0.0.1';
        private $user   = 'Enam';
        private $pass   = '@ranzhyfx';
        private $db     = 'currency_converter';

        public $connection;

        public function __construct()
        {
            $this->connection = new mysqli (
                $this->host ,
                $this->user,
                $this->pass,
                $this->db
            );
            if($this->connection->errno)
            {
                throw new Exception('Database not connected !');
            }
            // else
            // {
            //     echo "Database Conneted is successfully !";
            // }
        }

        public function close()
        {
            $this->connection->close();
        }

        public function execute($Query)
        {
            try {
                $result = mysqli_query($this->connection,$Query);
                return $result;
    
            } catch (Exception $error) {
                throw new Exception('Error in Executing Query !');
            }
        }
        
        public function fetch_result($Query)
        {
            $result = mysqli_query($this->connection,$Query);
            if(!$result)
            {
                throw new Exception('Error Fetch Result !');
            }
            else{
                while($row =mysqli_fetch_array($result))
                {
                    $data[] = $row;
                }
                return $data;
            }
        }
    }

?>