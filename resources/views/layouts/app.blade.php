<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('favicon.png')}}">
    <title>@yield('title', 'Live Shopping')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
    <link rel="stylesheet" media="all" href="{{asset('assets/css/media.css')}}">
    @yield('css')
</head>
<body>
    <div class="main-wrapper">
                @include('layouts.header')
                <div class="main-content">
                    @yield('content')
                    {{--@include('components.quick_modal')--}}

                    <div class="modal fade " id="buy-to-cart" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                    </div>
                    <div class="fixed-cart-bottom checkOutBtn">
                        <span>
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                    <span class="badge bg-secondary" id="cart_item_count">{{ getTotalCart() }}</span>
                    </div>
                    <button class="fixed-scroll-bottom" id="scroll-top" style="display: none;">
                        <span>
                            <i class="fas fa-angle-up"></i>
                        </span>
                    </button>
                    @include('layouts.delivery_section', ['data'=> \Cache::get('delivery_sections')])
                </div>
                @include('layouts.footer')
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/product.js')}}"></script>
    <script src="{{asset('assets/js/cart.js')}}"></script>
    <script src="{{asset('assets/js/toastr.min.js')}}"></script>
    <script>        
        // $(function(){
        //    setTimeout(() => {
        //         $(document).find("div.loading").addClass('d-none');
        //         $(document).find("div.main-content").removeClass('d-none');
        //    }, 1000);
        // });
        const myModal = new bootstrap.Modal(document.getElementById('product-modal'), options)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('js')
</body>
</html>