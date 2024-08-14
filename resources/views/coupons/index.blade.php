@extends('layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">Coupons</h5>

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
