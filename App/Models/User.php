<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll($param)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id FROM clientes');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
