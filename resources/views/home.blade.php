@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('add-barang') }}">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                            <input id="nama_barang" name="nama_barang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Masukkan Nama Barang</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kategori</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Kategori Barang</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Harga Barang</label>
                            <input id="harga_satuan" name="harga_satuan" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Masukkan Harga Barang</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                            <input id="stock" name="stock" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Masukkan Jumlah Barang</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Berat Barang</label>
                            <input id="berat" name="berat" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Masukkan Berat Barang</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Kondisi Barang</label>
                            <select id="kondisi_barang" name="kondisi_barang" class="form-select" aria-label="Default select example">
                                <option selected>Pilih Kondisi Barang</option>
                                <option value="baru">Baru</option>
                                <option value="bekas">Bekas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Deskripsi Barang</label>
                            <div class="form-floating">
                                <textarea id="deskripsi_barang" name="deskripsi_barang" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Masukkan Deskripsi Barang</label>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        {{ __('Dashboard') }}

                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Input Barang
                        </button>
                    </div>

                </div>

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
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="/detail-products" class="btn btn-primary">Go somewhere</a>
                                    <a href="" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTSwD1-34NU9tqxMKInv7CEpO_711qXM7z_tLW2m4rr2SIsUInAorNk0favd0LstVKLEIWQpRBELb-r_qHNGjr6WPhhY4hzAUj2lU-VFmCOTAv4iuEI5P_92EA&usqp=CAE" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="/detail-products" class="btn btn-primary">Go somewhere</a>
                                    <a href="" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTSwD1-34NU9tqxMKInv7CEpO_711qXM7z_tLW2m4rr2SIsUInAorNk0favd0LstVKLEIWQpRBELb-r_qHNGjr6WPhhY4hzAUj2lU-VFmCOTAv4iuEI5P_92EA&usqp=CAE" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="/detail-products" class="btn btn-primary">Go somewhere</a>
                                    <a href="" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card m-2" style="width: 18rem;">
                            <img class="card-img-top" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTSwD1-34NU9tqxMKInv7CEpO_711qXM7z_tLW2m4rr2SIsUInAorNk0favd0LstVKLEIWQpRBELb-r_qHNGjr6WPhhY4hzAUj2lU-VFmCOTAv4iuEI5P_92EA&usqp=CAE" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="/detail-products" class="btn btn-primary">Go somewhere</a>
                                    <a href="" class="btn btn-outline-primary"><i class="fa-solid fa-cart-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection