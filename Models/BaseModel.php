<?php
class BaseModel extends Database{
protected $BaseM_connect;
    public function __construct()
    {
        $this->BaseM_connect=$this->connect();
    }

    private function _query($sql)
    {
        return mysqli_query($this->BaseM_connect,$sql);
    }

    public function getAll($table,$column,$orderby,$limit)
    {
        $convert_column= implode(',',$column);
        $sql="select {$convert_column} from {$table} ";
        if($orderby[0]!='column'&&$orderby[1]!='inOrde')
        {
            $convert_orderby=implode(' ',$orderby);
            $sql.="order by {$convert_orderby} ";
        }
        if($limit!=0)
        {
            $sql.="limit {$limit}";
        }
        $result_query=$this->_query($sql);
        $data=[];
        while($row=mysqli_fetch_assoc($result_query))
        {
            array_push($data,$row);
        }
        return $data;
    }

    public function find($table,$column,$where,$orderby,$limit)
    {
        $convert_column= implode(',',$column);
        $sql="select {$convert_column} from {$table} ";
        if(strlen($where)>6)
        {
        $sql.=$where;
        }
        if($orderby[0]!='column'&&$orderby[1]!='inOrde')
        {
            $convert_orderby=implode(' ',$orderby);
            $sql.="order by {$convert_orderby} ";
        }
        if($limit!=0)
        {
            $sql.="limit {$limit}";
        }
        $result_query=$this->_query($sql);
        $row = mysqli_fetch_assoc($result_query);
        return $row;
    }
    public function findList($table,$column,$where,$orderby,$limit)
    {
        $convert_column= implode(',',$column);
        $sql="select {$convert_column} from {$table} ";
        if(strlen($where)>6)
        {
        $sql.=$where;
        }
        if($orderby[0]!='column'&&$orderby[1]!='inOrde')
        {
            $convert_orderby=implode(' ',$orderby);
            $sql.="order by {$convert_orderby} ";
        }
        if($limit!=0)
        {
            $sql.="limit {$limit}";
        }
        $result_query=$this->_query($sql);
        $data=[];
        while($row=mysqli_fetch_assoc($result_query))
        {
            array_push($data,$row);
        }
        return $data;
    }
    public function add($table,$data)
    {
        if(!isset($data['id']))
        {
            $data = array_merge(['id' => $data['id']], $data);
        }
        $convert_value= array_map(function($value){return "'".$value."'";},array_values($data));
        $convert_value=implode(',',$convert_value);
        $sql="INSERT INTO {$table} VALUES ({$convert_value})";
        $result=$this->_query($sql);
        return $result;
    }

    public function delete($table,$value)
    {
        $sql="delete from {$table} where id = {$value}";
        $result=$this->_query($sql);
        return $result;
    }
    public function update($table,$data,$id)
    {
        $convert_data=[];
        foreach($data as $key=>$val)
        {
            array_push($convert_data,"{$key}='{$val}'");
        }
        $string_Convert_data=implode(',',$convert_data);
        $sql="update {$table} set {$string_Convert_data} where Id={$id}";
        $result=$this->_query($sql);
        return $result;
    }
}