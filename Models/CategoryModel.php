<?php 
class CategoryModel extends BaseModel{
    const TABLE='tbl_category';
    public function getAllCategory($column=['*'],$orderby=['column','inOrde'],$limit=0)
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
    //tìm tất cả món ăn theo mã loại món ăn
    public function findCategoryId($column=['*'],$where='where',$orderby=['column','inOrde'],$limit=0)
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
        return $this->findList('tbl_food',$column,$where,$orderby,$limit);
    }
    public function findCategoryediting($column=['*'],$where='where',$orderby=['column','inOrde'],$limit=0){
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
    public function editCategory($id,$data){
        return $this->update(self::TABLE,$data,$id);
    }
    public function addnew($data){
        return $this->add(self::TABLE,$data);
    }
    public function deleteCategory($value){
        return $this->delete(self::TABLE,$value);
    }
}
?>