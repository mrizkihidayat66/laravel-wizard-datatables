@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex">
            <h5>Orders</h5>
            <a href="{{ route('orders.order') }}" class="btn btn-primary ms-auto" style="--bs-btn-padding-y: .3rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;">Order</a>
        </div>

        <div class="card-body">
            @foreach (['success', 'info', 'warning', 'error'] as $msg)
                <x-alert :type="$msg" class="mx-3" />
            @endforeach

            <div class="table-responsive">
                <table class="table table-sm">
                    {{ $dataTable->table() }}
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
