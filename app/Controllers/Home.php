<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Universal section 
    public function index()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('theme/nav_block')
            . view('theme/bottom_block');
    }
    public function create_account()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('theme/create_account')
            . view('theme/bottom_block');
    }
    public function login()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('theme/login_block')
            . view('theme/bottom_block');
    }
    public function forgot_pass()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('theme/forgot_pass')
            . view('theme/bottom_block');
    }
    // Universal section 

    // Admin section 
    public function profile()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('admin/profile_page')
            . view('theme/bottom_block');
    }
    public function profile_edit()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('admin/profile_edit')
            . view('theme/bottom_block');
    }
    // Admin section 

    // Stock section 
    public function stock()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('stock/stock_page')
            . view('theme/bottom_block');
    }
    public function add_stock()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('stock/add_stock')
            . view('theme/bottom_block');
    }
    // Stock section 

    // POS section 
    public function pos()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('pos/pos_page')
            . view('theme/bottom_block');
    }
    public function bill_add()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('pos/pos_page')
            . view('theme/bottom_block');
    }
    // POS section 

    // Account section 
    public function account()
    {
        return view('theme/top_block')
            . view('theme/head_block')
            . view('account/account_page')
            . view('theme/bottom_block');
    }
    // Account section 
}
