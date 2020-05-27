@extends('layouts.mail')

@section('title', 'Спасибо за регистрацию!')

@section('content')
    <p>Спасибо за регистрацию</p>
    <p>Ваша реферальная сслыка: {{ url('/ref/' . $donor->uuid) }}</p>
@endsection
