@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: {{ $total }}TL</h4>
            <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                {{ Session::get('error') }}
            </div>
            <form action="{{ url('checkout2')}}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" name="address" required>
                        </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="bank-bilgiler">Banka Hesap Bilgileri </label>
                            <p>Unvan:Ali Mertcan Tekin <br>
							Banka Adı:Akbank <br>HesapNo:0099425
						Şube Kodu:0645 - MASLAK<br>
						Iban:TR160004600645888000099425 <br><strong>Parayı Lutfen 2 iş günü içerisinde yatırın.</strong></p>
                        </div>
                    </div>
                   
                </div>
                {{ csrf_field() }}
				<button type="submit" class="btn btn-success ">Buy now</button>
            </form>
        </div>
    </div>
@endsection

