<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Theme;
class DashboardController extends Controller
{
    public function dashboard(){
        $theme = Theme::uses('default')->layout('default')->setTitle('PapersLLC');
        return $theme->scope('table')->render();
    }
}
