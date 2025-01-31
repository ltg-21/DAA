@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Catatan Hidrasi</h2>
    <form action="{{ url('/hydration') }}" method="POST">
        @csrf
        <input type="number" name="amount" placeholder="Masukkan jumlah air (ml)" required>
        <button type="submit">Simpan</button>
    </form>

    <h3>Riwayat Konsumsi Air</h3>
    <ul>
        @foreach ($logs as $log)
            <li>{{ $log->date }} - {{ $log->amount }} ml</li>
        @endforeach
    </ul>
</div>
@endsection
