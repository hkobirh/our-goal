<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderInfo;
use App\Models\Payment;
use App\Models\Shipping;
use Cart;
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
                'login_form',
                'register',
                'reg_form',
                'logout',
                'checkout',
                'shipping',
                'review_payments',
                'new_order'
            ]
        ]);
    }

    public function shipping(Request $request)
    {
        $request->validate(
            [
                "first_name" => "required|min:2|max:20",
                "last_name" => 'required|min:2|max:20',
                "address" => "required|min:2",
                "phone" => "required|min:11|max:11"
            ]);
        $shipping = Shipping::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "address" => $request->address,
            "phone" => $request->phone
        ]);
        session()->put('shipping_id', $shipping->id);
        return redirect()->route('review.payments');
    }

    public function review_payments()
    {
        if (Session::get('shipping_id')) {
            return view('frontend.checkout.review-payments');
        } else {
            return redirect()->back();
        }
    }
// ===========================New order function start here================================================================>
    public function new_order(Request $request)
    {
        $request->validate([
            'payment_type' => 'required'
        ]);
        $order = Order::create([
            'customer_id' => session('customer_id'),
            'shipping_id' => session('shipping_id'),
            'total' => Cart::getSubtotal()
        ]);

        foreach (Cart::getContent() as $item) {
            OrderInfo::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'product_name' => $item->name,
                'product_price' => $item->price,
                'product_qty' => $item->quantity
            ]);
        }

        Payment::create([
            'order_id' => $order->id,
            'payment_type' => $request->payment_type
        ]);

        Cart::clear();
        session()->flash('order_id',$order->id);
        session()->flash('order_success', 'Order is success.');
        return redirect()->route('order.success');
    }
// ===========================New order function end here================================================================>


    public function order_success()
    {
        if(session('order_id'))
        return view('frontend.checkout.order-success');
        return redirect('/');
    }


    public function checkout()
    {
        if (Session::get('customer_id')) {
            if (Cart::isEmpty()) {
                return redirect('/');
            } else {
                return view('frontend.checkout.index');
            }
        } else {
            return redirect()->route('customer.login');
        }
    }


    public function login_form()
    {
        if (Session::get('customer_id')) return redirect('customer.dashboard');
        return view('frontend.customer.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.customer.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
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

                if (Cart::isEmpty()) {
                    return redirect()->route('customer.dashboard');
                } else {
                    return redirect()->route('checkout');
                }

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

    public function register(Request $request)
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

        Session::put('customer_id', $customer->id);
        Session::put('customer_name', $customer->name);

        if (Cart::isEmpty()) {
            return redirect()->route('customer.dashboard');
        } else {
            return redirect()->route('checkout');
        }
    }

    public function reg_form()
    {

        return view('frontend.customer.register');
    }


    public function logout()
    {
        Session::forget('customer_id');
        return redirect()->route('customer.login');
    }
}
