<?php

namespace app\Models;

use PDO;
/**
 * Post Model
 * PHP version 5.6
 */
class Post extends \Core\Model
{
    /**
     * Get all the posrs as an associative array
     * @return array
     */
    public static function getAll()
    {
        // $host = 'localhost';
        // $dbname = 'framework';
        // $username = 'root';
        // $password ='secret';

        try {
            // $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username , $password);
            $db = static::getDB();
            $stmt = $db->query('SELECT id, title, content FROM posts  ORDER BY created_at');

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $results;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
}
