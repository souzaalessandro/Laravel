<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Request;


class ProdutoController extends Controller
{
	
	public function lista()
	{
		$produtos=DB::connection('sqlsrv')->select('select * from dbo.products');


		return view('produto.listagem')->with('produtos',$produtos);
	}

	public function mostra()
    {
        $id = Request::route('id','0');
        $produto=DB::connection('sqlsrv')->select('select produto.QuantityPerUnit, 
                                                          produto.ProductName, 
                                                          categoria.CategoryName, 
                                                          categoria.Description 
                                                     from dbo.products produto, 
                                                          dbo.Categories categoria 
                                                    where produto.CategoryID = categoria.CategoryID 
                                                      and productID= ? 
                                                      order by 3 ',[$id]);

        if (empty($produto))
            return "Esse produto não existe";

        return view('produto.detalhes')->with('p',$produto[0]);
    }

    public function novo()
    {
        return view('produto.novoproduto');
    }

    public function adiciona()
    {
        $name =Request::input('productName');
        $unitPrice = Request::input('unitPrice');
        $unitInStock = Request::input('unitInStock');

        return implode(',',array($name,$unitPrice,$unitInStock));

    }
}