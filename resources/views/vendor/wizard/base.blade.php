@extends('layouts.app')

@section('content')
    <div class="card card-primary">
        <form action="{{ $getActionUrl($postAction, [$step->slug()]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-header justify-content-center">
                <h1 class="text-center">{{ $wizardTitle }}</h1>

                <div class="">
                    @include($getViewPath('steps_bar'))
                </div>
            </div>
            <div class="card-body">
                @include($step->view(), compact('step', 'errors'))
            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center">
                    <div class="ms-auto">
                        @if ($stepRepo->hasPrev())
                            <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .3rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;"
                                onclick="this.form.action = '{{ $getActionUrl($postAction, [$step->slug(), '_trigger' => 'back']) }}'; this.form.submit();">
                                @lang('wizard::generic.back')
                            </button>
                        @endif

                        @if ($step->skip())
                            <button type="button" class="btn btn-secondary me-2" style="--bs-btn-padding-y: .3rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;"
                                onclick="this.form.action = '{{ $getActionUrl($postAction, [$step->slug(), '_trigger' => 'skip']) }}'; this.form.submit();">
                                @lang('wizard::generic.skip')
                            </button>
                        @endif

                        @if ($stepRepo->hasNext())
                            <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .3rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;">
                                @lang('wizard::generic.next')
                            </button>
                        @else
                            <button type="submit" class="btn btn-primary" style="--bs-btn-padding-y: .3rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: .75rem;">
                                @lang('wizard::generic.done')
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
