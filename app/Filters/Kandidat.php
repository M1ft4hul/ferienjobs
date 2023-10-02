<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Kandidat implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('logged_in') != true || session()->get('level') != 1) {
            return redirect()->to('/logout');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
