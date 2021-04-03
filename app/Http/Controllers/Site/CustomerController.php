<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Customer;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('customer', [
            'except' => [
                'login',
                'register',
                'logout'
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function login_form(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required",
        ]);
        $customer = Customer::where('email', $request->email)->first();
        if ($customer) {
            if (password_verify($request->password, $customer->password)) {
                Session::put('customer_id', $customer->id);
                Session::put('customer_name', $customer->name);
                return redirect('/');
            } else {
                $this->login_error();
            };
        } else {
            $this->login_error();
            return redirect()->back();
        }
    }

    private function login_error()
    {
        Session()->flash('login_error', 'Email or password is error.');
    }

    public function login()
    {
        if (Session::get('customer_id')) {
            return redirect('/');
        }
        return view('frontend.customer.login');
    }

    public function reg_form(Request $request)
    {
        $request->validate([
            'first_name' => "required|min:2|max:30",
            'last_name' => "required|min:2|max:30",
            'email' => "required|unique:customers,email",
            'phone' => "required|min:11|max:11",
            'password' => "required",
        ]);

        $customer = Customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
        $data = [
            'name' => $customer->fist_name . ' ' . $customer->last_name,
            'email' => $customer->email,
        ];

        /*        Mail::to($customer->email)->send(new WelcomeMail($data));
                Mail::to($customer->email)->send(new TestMail());*/

        return redirect()->back();
    }

    public function register()
    {

        return view('frontend.customer.register');
    }


    public function logout()
    {
        Session::forget('customer_id');
        return redirect()->route('customer.login');
    }
}
