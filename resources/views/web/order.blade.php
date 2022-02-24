@extends('web.master')
@section('content')

<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <form action="{{ route('orders.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-title">
                        <h2>Checkout</h2>
                    </div>

                    <div class="row">
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" 
                                value="{{ old('name') }}" name="name">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control mb-3" placeholder="Phone" 
                                value="{{ old('phone') }}" name="phone">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" placeholder="Address"   
                                value="{{ old('address') }}" name="address">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="desc" class="form-control w-100" cols="30" rows="10" 
                                placeholder="Leave a comment about your order" ></textarea>
                        </div>

                        <!-- <div class="col-12">
                            <div class="custom-control custom-checkbox d-block mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Create an accout</label>
                            </div>
                            <div class="custom-control custom-checkbox d-block">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">Ship to a different address</label>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="cart-summary">
                    <h5>Cart Total</h5>
                    <ul class="summary-table">
                        <li><span>subtotal:</span> <span> </span></li>
                        <li><span>delivery:</span> <span>Free</span></li>
                        <li><span>total:</span> <span>$140.00</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <button class="btn amado-btn w-100">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection