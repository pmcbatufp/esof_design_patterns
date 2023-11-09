<?php

class DBConnector {
    private string $host;
    private string $port;
    private $username;
    private $password;
    private static ?DBConnector $instance = null;



    private function __construct(string $host, string $port, string $username, string $password) {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    public static function getInstance(string $host, string $port, string $username, string $password): DBConnector {
        if (!isset(self::$instance)) {
            self::$instance = new DBConnector($host, $port ,$username, $password);
        }
        return self::$instance;
    }

    public function getHost(): string {
        return $this->host;
    }

    public function getPort(): int {
        return $this->port;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function getPassword(): string {
        return $this->password;
    }

    

}