<?php
namespace Orange;


class Monarchy{
    public function getAllMonarchy(){
        return (new Db())->select("monarchy", '*');
    }

    public function getMonarchyById($id){
        return (new Db())->select('monarchy',
            '*'
        ,[
            'id' => $id,
            'status' => 5,
            'LIMIT' => 1
        ]);
    }
}