<?php

/**
 * Database
 * 
 * A connection to the database
 */
class Database 
{

    /**
     * Hostname
     * @var string
     */
    protected $db_host;

    /**
     * Username
     * @var string
     */
    protected $db_user;

    /**
     * Password
     * @var string
     */
    protected $db_pass;

    /**
     * Database name
     * @var string
     */
    protected $db_name;

    /**
     * Constructor
     * 
     * @param string $host Hostname
     * @param string $user Username
     * @param string $password Password
     * @param string $name Database name
     * 
     * @return void
     */
    public function __construct($host, $user, $password, $name) {

        $this->db_host = $host;
        $this->db_user = $user;
        $this->db_pass = $password;
        $this->db_name = $name;
    }

    /**
     * Get the database connection
     * 
     * @return PDO object Connection to the database server
     */
    public function getConn() 
    {
        

        $dsn = 'mysql:host=' . $this->db_host . ';port=3307;dbname=' . $this->db_name . ';charset=utf8';

        try {
            $db = new PDO($dsn, $this->db_user, $this->db_pass);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
            
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit;
        }

    }
}


