<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $customer->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $customer->surname }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $customer->email }}</p>
</div>

<!-- Phone Field -->
<div class="col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $customer->phone }}</p>
</div>

<!-- Vip Field -->
<div class="col-sm-12">
    {!! Form::label('vip', 'Vip:') !!}
    <p>{{ $customer->vip }}</p>
</div>

<!-- Comments Field -->
<div class="col-sm-12">
    {!! Form::label('comments', 'Comments:') !!}
    <p>{{ $customer->comments }}</p>
</div>

