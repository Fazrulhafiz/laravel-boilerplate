@extends('layouts.welcome')

@extends('finance.layouts.finance')

@section('content')
    {!! Form::open(['route' => 'finance.cash-voucher.update']) !!}

      <!--  General -->
      <div class="form-group">
        <h2 class="heading">Petty Cash Voucher :: {!! $voucherdetail[0]->voucher_no !!}</h2>
        {!! Form::hidden('voucher_no', $voucherdetail[0]->voucher_no) !!}
        <div class="controls">
          {!! Form::text('pay_to', $voucherdetail[0]->pay_to, ['class' => 'floatLabel']) !!}
          {!! Form::label('pay_to', 'Pay to', ['class' => 'active']) !!}
        </div>
        <div class="controls">
          {!! Form::text('payment_for', $voucherdetail[0]->payment_for, ['class' => 'floatLabel']) !!}
          {!! Form::label('payment_for', 'Payment for', ['class' => 'active']) !!}
        </div>
          <div class="grid">
            <div class="col-2-3">
              <div class="controls">
               {!! Form::text('ringgit', $voucherdetail[0]->ringgit, ['class' => 'floatLabel']) !!}
               {!! Form::label('ringgit', 'Ringgit', ['class' => 'active']) !!}
              </div>
            </div>
            <div class="col-1-3">
              <div class="controls">
                {!! Form::number('rm', $voucherdetail[0]->rm, ['class' => 'floatLabel']) !!}
                {!! Form::label('rm', 'MYR', ['class' => 'active']) !!}
              </div>
            </div>
          </div>
      </div>
      <!--  Details -->
      <div class="form-group">
        <h2 class="heading">Details</h2>
          <div class="grid">
        <div class="col-1-2 col-1-2-sm">
        <div class="controls">
          <i class="fa fa-sort"></i>
          {!! Form::select('cost_centre', $cost_centre, $voucherdetail[0]->cost_centre, ['class' => 'floatLabel']) !!}
          {!! Form::label('cost_centre', 'Cost centre', ['class' => 'active']) !!}
         </div>
        </div>

        <div class="col-1-2 col-1-2-sm">
        <div class="controls">
          <i class="fa fa-sort"></i>
          {!! Form::select('gl_code', $gl_code, $voucherdetail[0]->gl_code, ['class' => 'floatLabel']) !!}
          {!! Form::label('gl_code', 'GL code', ['class' => 'active']) !!}
         </div>
        </div>

         </div>
          <div class="grid">
                {!! Form::submit('Submit', ['class' => 'col-1-4']) !!}
                <a class="col-1-4" href="{{ url('/finance') }}">Cancel</a>
          </div>
      </div> <!-- /.form-group -->

    {!! Form::close() !!}
@endsection
