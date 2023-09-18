<?php
namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function view($page = 'home'): string
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $data['title'] = ucfirst($page);
        return
            view('templates/header', $data) .
            view('pages/' . $page, $data) .
            view('templates/footer', $data);
    }
}
