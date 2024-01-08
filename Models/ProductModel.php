<?php 
class ProductModel extends BaseModel{
    const TABLE ='tbl_food';
    public function getAllProduct($column=['*'],$orderby=['column','inOrde'],$limit=0)
    {
        if($column==null)
        {
            $column=['*'];
        }
        if($orderby==null)
        {
            $orderby=['column'=>'inOrde'];
        }
        if($limit==null)
        {
            $limit = 0;
        }
        return $this->getAll(self::TABLE,$column,$orderby,$limit);
    }
    public function deleteProduct($value)
    {
        return $this->delete(self::TABLE,$value);
    }
    public function getDetailId($column=['*'],$where='where',$orderby=['column','inOrde'],$limit=0)
    {
        if($column==null)
        {
            $column=['*'];
        }
        $where='where '.$where.' ';
        if($where=='where')
        {
            $where='';
        }
        if($orderby==null)
        {
            $orderby=['column','inOrde'];
        }
        if($limit==null)
        {
            $limit = 0;
        }
        return $this->find(self::TABLE,$column,$where,$orderby,$limit);
    }
    public function editProduct($id,$data){
        return $this->update(self::TABLE,$data,$id);
    }
    public function addProduct($data)
    {
        return $this->add(self::TABLE,$data);
    }
}
?>