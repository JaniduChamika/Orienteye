<?php

class Database
{
      public static $dbms;
      public static function connect()
      {
            if(!isset($dbms)){
                  Database::$dbms = new mysqli("localhost", "root", "you password", "uzeb", "3306");

            }
         
      }
      public static function iud($q){
            Database::connect();
            Database::$dbms->query($q);
      }
      public static function search($q)
      {
            Database::connect();
            $resultset = Database::$dbms->query($q);
            return $resultset;
      }
}
