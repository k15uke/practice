<?php

namespace App\Model;

class Users
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUserAll()
    {
        $sql = '';
        $sql .= 'select ';
        $sql .= 'id,';
        $sql .= 'user,';
        $sql .= 'pass,';
        $sql .= 'family_name,';
        $sql .= 'first_name,';
        $sql .= 'is_admin ';
        $sql .= 'from users ';
        $sql .= 'where is_deleted=0 ';
        $sql .= 'order by id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
    public function getUser($user, $password)
    {
        if (empty($user)) {
            return array();
        }

        $sql = '';
        $sql .= 'select ';
        $sql .= 'id,';
        $sql .= 'user,';
        $sql .= 'pass,';
        $sql .= 'family_name,';
        $sql .= 'first_name,';
        $sql .= 'is_admin ';
        $sql .= 'from users ';
        $sql .= 'where is_deleted=0 ';
        $sql .= 'and user=:user';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':user', $user, \PDO::PARAM_STR);
        $stmt->execute();

        $rec = $stmt->fetch();

        if (!$rec) {
            return array();
        }

        if (!password_verify($password, $rec['pass'])) {
            return array();
        }

        unset($rec['pass']);
        return $rec;
    }

    public function isExistsUser($id)
    {
        if (!is_numeric($id)) {
            return false;
        }

        if ($id <= 0) {
            return false;
        }

        $sql = '';
        $sql .= 'select count(id) as num from users where is_deleted=0';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $ret = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($ret['num'] == 0) {
            return false;
        }
        return true;
    }
}
