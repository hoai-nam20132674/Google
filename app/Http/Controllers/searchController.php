<?php

namespace App\Http\Controllers;
use App\Http\Requests\searchRequest;

use Illuminate\Http\Request;

class searchController extends Controller
{
	public function index(){
		return View('search');
	}

	public function searchRequest(searchRequest $rq){
		$request =$rq->search_text;
		return redirect('/search&page=1&query={$request}');
		// return View('search',['request'=>$request]);
	}
    
    public function search(searchRequest $request){
    	$rq = $request->search_text;
    	echo $rq;
    	// return View('search',['rq'=>$rq]);

    }
}
