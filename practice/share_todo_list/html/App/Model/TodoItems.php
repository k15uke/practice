<?php

namespace App\Model;

class TodoItems
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function getTodoItemAll(){
        $sql = '';
        $sql .= 'select ';
        $sql .= 't.id,';
        $sql .= 't.user_id,';
        $sql .= 'u.family_name,';
        $sql .= 'u.first_name,';
        $sql .= 't.item_name,';
        $sql .= 't.registration_date,';
        $sql .= 't.expire_date,';
        $sql .= 't.finished_date ';
        $sql .= 'from todo_items t ';
        $sql .= 'inner join users u on t.user_id=u.id ';
        $sql .= 'where t.is_deleted=0 ';
        $sql .= 'order by t.expire_date asc';

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $ret = $stmt->fetchAll();

        return $ret;
    }

    public function getTodoItemBySearch($search){
        $sql = '';
        $sql .= 'select ';
        $sql .= 't.id,';
        $sql .= 't.user_id,';
        $sql .= 'u.family_name,';
        $sql .= 'u.first_name,';
        $sql .= 't.item_name,';
        $sql .= 't.registration_date,';
        $sql .= 't.expire_date';
        $sql .= 't.finished_date';
        $sql .= 't.registration_date';
        $sql .= 't.expire_date,';
        $sql .= 't.finished_date ';
        $sql .= 'from todo_items t';
        $sql .= 'inner join users u on t.user_id=u.id ';
        $sql .= 'where t.is_deleted=0';
        $sql .= "and (";
        $sql .= "t.item_name like :family_name";
        $sql .= "or u.family_name like :family_name";
        $sql .= "or u.first_name like :first_name";
        $sql .= "or t.registration_date=:registration_date";
        $sql .= "or t.expire_date=:expire_date";
        $sql .= "or t.finished_date=:finished_date";
        $sql .= ")";
        $sql .= 'order by t.expire_date asc';

        $likeWord = "%$search$";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':item_name',$likeWord,\PDO::PARAM_STR);
        $stmt->bindParam(':family_name',$likeWord,\PDO::PARAM_STR);
        $stmt->bindParam(':first_name',$likeWord,\PDO::PARAM_STR);
        $stmt->bindParam(':registration_date',$search,\PDO::PARAM_STR);
        $stmt->bindParam(':expire_date',$search,\PDO::PARAM_STR);
        $stmt->execute();
        $ret = $stmt->fetchAll();

        return $ret;
    }

    public function getTodoItemById($id){
        if(!is_numeric($id)){
            return false;
        }

        if($id<=0){
            return false;
        }

        $sql = '';
        $sql .= 'select ';
        $sql .= 't.id,';
        $sql .= 't.user_id,';
        $sql .= 'u.family_name,';
        $sql .= 'u.first_name,';
        $sql .= 't.item_name,';
        $sql .= 't.registration_date,';
        $sql .= 't.expire_date,';
        $sql .= 't.finished_date ';
        $sql .= 'from todo_items t ';
        $sql .= 'inner join users u on t.user_id=u.id ';
        $sql .= 'where t.id=:id ';
        $sql .= 'and t.is_deleted=0';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $stmt->execute();
        $ret = $stmt->fetch();

        return $ret;
    }

    public function registerTodoItem($data){
        $sql = '';
        $sql .= 'insert into todo_items (';
        $sql .= 'user_id,';
        $sql .= 'item_name,';
        $sql .= 'registration_date,';
        $sql .= 'expire_date,';
        $sql .= 'finished_date';
        $sql .= ') values (';
        $sql .= ':user_id,';
        $sql .= ':item_name,';
        $sql .= ':registration_date,';
        $sql .= ':expire_date,';
        $sql .= ':finished_date';
        $sql .= ')';

        //var_dump($data);
        //exit;
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':user_id',$data['user_id'],\PDO::PARAM_INT);
        $stmt->bindParam(':item_name',$data['item_name'],\PDO::PARAM_STR);
        $stmt->bindParam(':registration_date',$data['registration_date'],\PDO::PARAM_STR);
        $stmt->bindParam(':expire_date',$data['expire_date'],\PDO::PARAM_STR);
        $stmt->bindParam(':finished_date',$data['finished_date'],\PDO::PARAM_STR);
        $ret = $stmt->execute();

        return $ret;
    }

    public function updateTodoItemById($data){
        if(!isset($data['id'])){
            return false;
        }

        if(!is_numeric($data['id'])){
            return false;
        }

        if($data['id'] <= 0){
            return false;
        }

        $sql = '';
        $sql .='update todo_items set ';
        $sql .='user_id=:user_id,';
        $sql .='item_name=:item_name,';
        $sql .='registration_date=:registration_date,';
        $sql .='expire_date=:expire_date,';
        $sql .='finished_date=:finished_date,';
        $sql .='is_deleted=:is_deleted ';
        $sql .='where id=:id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':user_id',$data['user_id'],\PDO::PARAM_INT);
        $stmt->bindParam(':item_name',$data['item_name'],\PDO::PARAM_STR);
        $stmt->bindParam(':registration_date',$data['registration_date'],\PDO::PARAM_STR);
        $stmt->bindParam(':expire_date',$data['expire_date'],\PDO::PARAM_STR);
        $stmt->bindParam(':finished_date',$data['finished_date'],\PDO::PARAM_STR);
        $stmt->bindParam(':is_deleted',$data['is_deleted'],\PDO::PARAM_INT);
        $stmt->bindParam(':id',$data['id'],\PDO::PARAM_INT);
        $ret = $stmt->execute();

        return $ret;
    }

    public function makeTodoItemComplete($id,$date = null){
        if(!is_numeric($id)){
            return false;
        }

        if($id <= 0){
            return false;
        }

        if(is_null($date)){
            $date = date('Y-m-d');
        }

        $sql = '';
        $sql .= 'update todo_items set ';
        $sql .= 'finished_date=:finished_date ';
        $sql .= 'where id=:id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':finished_date',$date,\PDO::PARAM_STR);
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $ret = $stmt->execute();
        
        return $ret;
    }

    public function deleteTodoItemById($id){
        if(!is_numeric($id)){
            return false;
        }

        if($id <= 0){
            return false;
        }

        $sql = '';
        $sql .= 'update todo_items set ';
        $sql .= 'is_deleted=1 ';
        $sql .= 'where id=:id';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $ret = $stmt->execute();
    }
}

