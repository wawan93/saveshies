@extends('layouts.mail')

@section('title', 'Спасибо за пожертвование!')

@section('content')
    <p>Спасибо за пожертвование</p>
    <p>Сумма: {{ $donation->amount }}</p>
@endsection
