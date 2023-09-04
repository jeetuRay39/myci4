<?php
namespace App\Controllers;
class Querycontroller extends BaseController{
    public function insertRaw(){
        $db=db_connect();
        $insert_query="insert into tbl_users(name, email, phone) values('jeetu','jeetu@gmail.com',9811443322)";
        if($db->simpleQuery($insert_query)){
            echo"success";
        }
        else{
            echo"failed";
        }
    }
    public function select(){
        $db=db_connect();
        $select_query="select * from tbl_users";
        $result['student']=$db->query($select_query)->getResultArray();
        return view('selectview',$result);
        
        
    }
}