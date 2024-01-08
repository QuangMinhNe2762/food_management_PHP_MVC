<?php 
class CategoryController extends BaseController{
    private $categoryModel;
    private $productModel;
    //cái title này dùng để thay đổi giá trị cho page-header tìm bên layout là biết
    private $pageHeader='Loại thức ăn';
    //này cũng v
    private $icon='mdi mdi-food';
    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel=new CategoryModel();
        $this->loadModel('ProductModel');
        $this->productModel=new ProductModel();
    }
    public function message_temp_data($message,$result)
    {
        if($result==null)
        {
            $result='';
        }
        if($result)
        {
            $result=$message.' thành công';
        }
        else{
            $result=$message.' thất bại';
        }
        return $result;
    }
    public function index($tempdata=null)
    {
        $listcategory=$this->getallcategory();
        return $this->view('Categories.index',['ListCatogy'=>$listcategory,'tempdata'=>$tempdata,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
    }
    public function getallcategory()
    {
        $categories=$this->categoryModel->getallcategory();
        return $categories;
    }
    public function detailcategory($tempdata=null)
    {
        $id=$_GET['id'];
        $name=$this->categoryModel->findCategoryediting(null,"id={$id}",null,null)['title'];
        $ListProduct=$this->categoryModel->findCategoryId(null,"category_id={$id}",null,null);
        return $this->view('Categories.detailcategory',['tempdata'=>$tempdata,'id'=>$id,'ListProduct'=>$ListProduct,'name'=>$name,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
    }
    public function form_editcategory()
    {
        $id=$_GET['id'];
        $category=$this->categoryModel->findCategoryediting(null,"id={$id}",null,null);
        return $this->view('Categories.form_editcategory',['category'=>$category,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
    }
    public function editcategory()
    {
        if(isset($_POST['submit']))
    {
        $data=$_POST;
        unset($data['submit']);
        $id=$_GET['id'];
        if($data['image_name']=='')
        {
            $category_editing=$this->categoryModel->findCategoryediting(null,"id={$id}",null,null);
            $data['image_name']=$category_editing['image_name'];
        }
        $result=$this->categoryModel->editCategory($id,$data);
        $result=$this->message_temp_data('Sửa',$result);
        return $this->index($result);
    }
}
public function form_addnew()
{
    return $this->view('Categories.form_addnew',['pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
}
public function addnew(){
    if(isset($_POST['submit']))
    {
        $data=$_POST;
        unset($data['submit']);
        $result=$this->categoryModel->addnew($data);
        $result=$this->message_temp_data('Thêm',$result);
        return $this->index($result);
    }
}
public function deletecategory() {
        $id=$_GET['id'];
        $result=$this->categoryModel->deleteCategory($id);
        $result=$this->message_temp_data('Xóa',$result);
        return $this->index($result);
}
public function form_addnew_product()
{
    $id=$_GET['id'];
    return $this->view('Categories.form_addnew_product',['id'=>$id,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
}
public function addnew_product()
{
    if(isset($_POST['submit']))
    {
        $data=[];
        $id=$_GET['id'];
        $data=array_merge($data,['title'=>$_POST['title'],'description'=>$_POST['description'],'price'=>$_POST['price'],'image_name'=>$_POST['image_name'],'category_id'=>$id,'featured'=>$_POST['featured'],'active'=>$_POST['active']]); 
        $result=$this->productModel->addProduct($data);
        $result=$this->message_temp_data('Thêm',$result);
        return $this->detailcategory($result);
    }
}
public function deleteproduct()
{
        $id=$_GET['idproduct'];
        $result=$this->productModel->deleteProduct($id);
        $result=$this->message_temp_data('Xóa',$result);
        return $this->detailcategory($result);
}
public function form_editproduct()
{
    $id=$_GET['idproduct'];
    $idcategory=$_GET['id'];
    $product = $this->productModel->getDetailId(null, "id={$id}", null, null);
    $categories=$this->categoryModel->getAllCategory();
    return $this->view('Categories.form_editproduct', ['idcategory'=>$idcategory,'product' => $product,'categories'=>$categories,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
}
public function editproduct(){
    if(isset($_POST['submit']))
    {
        $data=$_POST;
        unset($data['submit']);
        $id=$_GET['id'];
        $id_pro=$_GET['idproduct'];
        if($data['image_name']=='')
        {
            $product_editing=$this->productModel->getDetailId(null,"id={$id_pro}",null,null);
            $data['image_name']=$product_editing['image_name'];
        }
        $result=$this->productModel->editProduct($id_pro,$data);
        $result=$this->message_temp_data('Sửa',$result);
        return $this->detailcategory($result);
    }
}
}
?>