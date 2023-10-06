<?

namespace App\Controllers;
use App\Models\ProductModel;
use App\Controllers\BaseController;

class ProductController extends BaseController {
    public function __construct(){
        $this->product = new ProductModel();
    }
    public function insertProduct(){
        $data = [
            'nama_product' => 'Smartphone',
            'description' => 'Merupakan Smartphone Merk Samsung'
        ];

        $this->product->insertProduct($data);
    }
    public function readProduct(){
        $products = $this->product->findAll();
        $data = [
            'product' => $products
        ];
        return view('product', $data);
    }
}