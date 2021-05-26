<?php


namespace Orange;


class Member{
    public function getMembersListByMonarchy($monarchy){
        return (new Db())->select('members',
            '*'
            ,[
                'monarchy' => $monarchy,
                'status' => 5
            ]);
    }
}