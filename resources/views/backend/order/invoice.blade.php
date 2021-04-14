@extends('backend.components.layout')
@section('title')
    View Order Invoice
@endsection
@section('content')
    <div class="page-content">
        <div class="card">
            <div class="card-body">
                <div id="invoice">
                    <div class="toolbar hidden-print">
                        <div class="text-right">
                            <a href="{{route('staff.orders.print',$orders->id)}}" target="_blank" class="btn btn-dark"><i class="fa fa-print"></i> Print</a>
                            <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
                        </div>
                        <hr/>
                    </div>
                    <div class="invoice overflow-auto">
                        <div style="min-width: 600px">
                            <header>
                                <div class="row">
                                    <div class="col">
                                        <a href="javascript:;">
                                            <img src="assets/images/logo-icon.png" width="80" alt="" />
                                        </a>
                                    </div>
                                    <div class="col company-details">
                                        <h2 class="name">
                                            <a target="_blank" href="javascript:;">
                                                KOBIR BROTHERS
                                            </a>
                                        </h2>
                                        <div>Pacher Bazar, Gouripur, Mymensingh</div>
                                        <div>01722-879377</div>
                                        <div>kobir@brothers.com</div>
                                    </div>
                                </div>
                            </header>
                            <main>
                                <div class="row contacts">
                                    <div class="col invoice-to">
                                        <div class="text-gray-light">INVOICE TO:</div>
                                        <h2 class="to">{{$orders->shipping->full_name}}</h2>
                                        <div class="address">{{$orders->shipping->address}}</div>
                                        <div class="email">{{$orders->shipping->phone}}</div>
                                    </div>
                                    <div class="col invoice-details">
                                        <h1 class="invoice-id">INVOICE {{$orders->id}}</h1>
                                        <div class="date">Date of Invoice: {{date('d/m/y')}}</div>
                                    </div>
                                </div>
                                <table>
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-left">DESCRIPTION</th>
                                        <th class="text-right">HOUR PRICE</th>
                                        <th class="text-right">HOURS</th>
                                        <th class="text-right">TOTAL</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="no">04</td>
                                        <td class="text-left">
                                            <h3>
                                                <a target="_blank" href="javascript:;">
                                                    Youtube channel
                                                </a>
                                            </h3>
                                            <a target="_blank" href="javascript:;">
                                                Useful videos
                                            </a> to improve your Javascript skills. Subscribe and stay tuned :)</td>
                                        <td class="unit">$0.00</td>
                                        <td class="qty">100</td>
                                        <td class="total">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td class="no">01</td>
                                        <td class="text-left">
                                            <h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
                                        <td class="unit">$40.00</td>
                                        <td class="qty">30</td>
                                        <td class="total">$1,200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="no">02</td>
                                        <td class="text-left">
                                            <h3>Website Development</h3>Developing a Content Management System-based Website</td>
                                        <td class="unit">$40.00</td>
                                        <td class="qty">80</td>
                                        <td class="total">$3,200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="no">03</td>
                                        <td class="text-left">
                                            <h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
                                        <td class="unit">$40.00</td>
                                        <td class="qty">20</td>
                                        <td class="total">$800.00</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL</td>
                                        <td>$5,200.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">TAX 25%</td>
                                        <td>$1,300.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">GRAND TOTAL</td>
                                        <td>$6,500.00</td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <div class="thanks">Thank you!</div>
                                <div class="notices">
                                    <div>NOTICE:</div>
                                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                                </div>
                            </main>
                            <footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
                        </div>
                        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
