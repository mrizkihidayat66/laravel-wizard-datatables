@php
    $dtProduct          = $step->getProductDT();
    $dtCoupon           = $step->getCouponDT();
    $customer_detail    = $step->find('customer')->data();
@endphp

<div class="row">
    @foreach (['success', 'info', 'warning', 'error'] as $msg)
        <x-alert :type="$msg" class="mx-3" />
    @endforeach

    <div class="col-7">
        <div class="row">
            <div class="col-12">
                <div class="section-title">Products</div>

                <div class="table-responsive">
                    <table class="table table-sm">
                        {{ $dtProduct->html()->table() }}
                    </table>
                </div>
            </div>

            <div class="col-12">
                <div class="section-title">Coupons</div>

                <div class="table-responsive">
                    <table class="table table-sm">
                        {{ $dtCoupon->html()->table() }}
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-5">
        <div class="section-title">Cart</div>
    </div>
</div>

@push('scripts')
    {{ $dtProduct->html()->scripts() }}
    {{ $dtCoupon->html()->scripts() }}
@endpush
