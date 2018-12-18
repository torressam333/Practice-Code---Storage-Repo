<?php
//Controllers typically:
//1.Receive request 2.Delegate 3.Return a response

class PagesController
{
    public function home()
    {
        //Load our view
       return view('index');

    }

    public function about()
    {
        $company = 'Pseudo Co.';
        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }


}