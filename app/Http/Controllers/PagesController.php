<?php
/*
 *用于定义所有页面的逻辑
 */
namespace App\Http\Controllers;

class PagesController extends Controller {
	public function root() {
		return view('pages.root');
	}
}
