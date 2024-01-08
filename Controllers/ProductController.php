<?php
class ProductController extends BaseController{
    private $productModel;
    private $categoryModel;
    //cái title này dùng để thay đổi giá trị cho page-header tìm bên layout là biết
    private $pageHeader='Trang chủ';
    //này cũng v
    private $icon='mdi mdi-home';
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel=new ProductModel();
        $this->loadModel('CategoryModel');
        $this->categoryModel=new CategoryModel();
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
        $products=$this->productModel->getAllProduct();
        return $this->view('Products.index',['ListProduct'=>$products,'tempdata'=>$tempdata,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
    }
    public function deleteproduct()
    {
        $id=$_GET['id'];
        $result=$this->productModel->deleteProduct($id);
        $result=$this->message_temp_data('Xóa',$result);
        return $this->index($result);
    }
    public function detailproduct()
    {
        $id=$_GET['id'];
        $product=$this->productModel->getDetailId(null,"id={$id}",null,null);
        return $this->view('Products.detailproduct',['product'=>$product,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
    }
    public function form_editproduct()
{
    $id = $_GET['id'];
    $product = $this->productModel->getDetailId(null, "id={$id}", null, null);
    $categories=$this->categoryModel->getAllCategory();
    return $this->view('Products.form_editproduct', ['product' => $product,'categories'=>$categories,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
}
public function editproduct()
{
    if(isset($_POST['submit']))
    {
        $data=$_POST;
        unset($data['submit']);
        $id=$_GET['id'];
        if($data['image_name']=='')
        {
            $product_editing=$this->productModel->getDetailId(null,"id={$id}",null,null);
            $data['image_name']=$product_editing['image_name'];
        }
        $result=$this->productModel->editProduct($id,$data);
        $result=$this->message_temp_data('Sửa',$result);
        return $this->index($result);
    }
}
public function form_addnew()
{
    $categories=$this->categoryModel->getAllCategory();
    return $this->view('Products.form_addnew',['categories'=>$categories,'pageHeader'=>$this->pageHeader,'icon'=>$this->icon]);
}
public function addnew()
{
    if(isset($_POST['submit']))
    {
        $data=$_POST;
        unset($data['submit']);
        $result=$this->productModel->addProduct($data);
        $result=$this->message_temp_data('Thêm',$result);
        return $this->index($result);
    }
}
}