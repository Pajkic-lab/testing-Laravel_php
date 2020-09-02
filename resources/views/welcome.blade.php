    @extends('layouts.layaout') 

    @section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
            <img src="/img/pizza-house.png" alt="txt" >
                <div class="title m-b-md">
                    Pizza-Shop
                </div>
                <p class='mssg'>{{ session('mssg') }}</p>
                <a href="/pizzas/create">Order a piza</a>
            </div>
        </div>
    @endsection
