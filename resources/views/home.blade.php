@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Treni in Partenza Oggi</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($trains as $train)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">{{ $train->train_code }}</h5>
                    <span class="badge bg-light text-dark">{{ $train->company }}</span>
                </div>
                <div class="card-body">
                    <p class="card-text mb-2"><strong>Partenza:</strong> {{ $train->start_station }} ({{ $train->departure_timedate }})</p>
                    <p class="card-text mb-2"><strong>Arrivo:</strong> {{ $train->finish_station }} ({{ $train->arrival_timedate }})</p>
                    <p class="card-text mb-2"><strong>Carrozze:</strong> {{ $train->wagons_number }}</p>
                    <p class="card-text mb-0">
                        <strong>Stato:</strong>
                        @if ($train->time_off)
                            <span class="badge bg-danger">Cancellato</span>
                        @else
                            <span class="badge bg-success">In Orario</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection