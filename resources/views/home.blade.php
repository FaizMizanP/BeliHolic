@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Selamat Datang!') }}
                    <div class="d-flex flex-wrap">
                        <div class="card m-2" style="width: 18rem;">
                            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTSwD1-34NU9tqxMKInv7CEpO_711qXM7z_tLW2m4rr2SIsUInAorNk0favd0LstVKLEIWQpRBELb-r_qHNGjr6WPhhY4hzAUj2lU-VFmCOTAv4iuEI5P_92EA&usqp=CAE" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTSwD1-34NU9tqxMKInv7CEpO_711qXM7z_tLW2m4rr2SIsUInAorNk0favd0LstVKLEIWQpRBELb-r_qHNGjr6WPhhY4hzAUj2lU-VFmCOTAv4iuEI5P_92EA&usqp=CAE" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTSwD1-34NU9tqxMKInv7CEpO_711qXM7z_tLW2m4rr2SIsUInAorNk0favd0LstVKLEIWQpRBELb-r_qHNGjr6WPhhY4hzAUj2lU-VFmCOTAv4iuEI5P_92EA&usqp=CAE" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTSwD1-34NU9tqxMKInv7CEpO_711qXM7z_tLW2m4rr2SIsUInAorNk0favd0LstVKLEIWQpRBELb-r_qHNGjr6WPhhY4hzAUj2lU-VFmCOTAv4iuEI5P_92EA&usqp=CAE" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection