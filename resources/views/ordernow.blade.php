  
@extends('master')
@section('content')

<div class="custom-product">
   @if(\Session::has('success'))
<h2 style="color: green; text-align: center;">
{{\Session::get('success')}}
</h2>
@endif
          <div class="col-sm-6">
            <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>${{$total}}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$0 Rupees</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>$100</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>${{$total+100}}</td>
                  </tr>
                </tbody>
              </table>

              <form method="POST" action="/orderplace">
                @csrf
                <div class="form-group">
                  <label class="form-group">Address:</label>
                  <textarea name="address" rows="4" cols="15" placeholder="Enter Address Here" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p><input type="radio"  value="online" name="payment"> <span>Online Payment</span>  </p>
                    <p><input type="radio"  value="emi_payment"  name="payment"> <span>EMI Payment</span>  </p>
                    <p><input type="radio" value="payment_on_delivery"  name="payment"> <span>Payment on Delivery</span>  </p>

                </div>
                <button type="submit" class="btn btn-info">Order Now</button>
              </form>
          </div>
</div>
@endsection