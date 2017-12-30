<?php namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
	
	public function lista()
	{
		$produtos=DB::connection('sqlsrv')->select('select * from dbo.products');
		$html = '<h1> Chamou Lista produtos agora sim X </h1>';
		$html .= '<ul>';

		foreach ($produtos as $produto ) {
			# code...
			$html .= "<li> product code :". $produto->ProductID . ' | Product Name : ' . $produto->ProductName . '</li>';
		}

		$html .= '</ul>';

		return $html;
	}
}