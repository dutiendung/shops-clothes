<?php
class Product extends UserController
{

    private $productmodel;
    function __construct()
    {
        $this->productmodel = new ProductModel;
    }
    public function home($limit = LIMIT, $offset = 0)
    {
        // Gọi model chuẩn bị dữ liệu
        $data = $this->productmodel->home($limit, $offset);
        //Đổ dữ liệu vào view
        $this->loadView('master2', 'product/home', $data);
    }

    public function productByCat($catAlias, $limit = 10, $offset = 0)
    {
        // Gọi model chuẩn bị dữ liệu
        $data = $this->productmodel->productByCat($catAlias, $limit, $offset);
        //Đổ dữ liệu vào view
        $this->loadView('master1', 'product/productbycat', $data);
    }

    public function productDetail($productAlias)
    {
        $data=$this->productmodel->productDetail($productAlias, );
        $this->loadView('master1', 'product/productdetail',$data );
    }
    public function productSearch($limit=LIMIT,$offset=0){
        //Xác định $searchkey
        if(isset($_POST['searchKey'])) $searchKey=$_POST['searchKey'];
        else
        $searchKey='';
        // Gọi model chuẩn bị dữ liệu
        $data=$this->productmodel->productSearch($searchKey,$limit,$offset);
        //Đổ dữ liệu vào view
        $this->loadView('master2','product/productsearch',$data);
       }
    public function productByBrand($brandAlias, $limit = LIMIT, $offset = 0)
    {
        $data=$this->productmodel->productByBrand($brandAlias,$limit,$offset);
        $this->loadView('master1', 'product/productbybrand', $data);
    }
}
