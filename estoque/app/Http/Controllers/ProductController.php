<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProductController extends Controller
{
	public function list_products()
	{
		$products = DB::select('select * from produtos');
		return view('product.product_list')->with('products', $products);
	}

	public function product_details()
	{
		$id = Request::route('id');
		$product = DB::select('select * from produtos where id = ?', [$id]);

		if(empty($product))
		{
			return 'Produto não encontrado';
		}

		return view('product.product_details')->with('product', $product[0]);
	}

	public function new()
	{
		return view('product.new');
	}

	public function add_product()
	{
		$name = Request::input('name');
		$value = Request::input('value');
		$quantity = Request::input('quantity');
		$description = Request::input('description');

		$new_product = array(
			Request::input('name'),
			Request::input('value'),
			Request::input('quantity'),
			Request::input('description')
		);

		DB::insert('insert into produtos (nome, valor, quantidade, descricao) values (?,?,?,?)', $new_product);

		//return view('product.added')->with('product', $name);
		return redirect('/products')->withInput();
	}
}
