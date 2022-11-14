@extends('layouts.app')

@section('content')
<div class="container">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Checkout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mb-2">Nama Product</h4>
                        <p>Rp. XXX. XXX</p>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat Penerima</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jasa Pengiriman</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Ekspedisi</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tipe Pengiriman</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Ekspedisi</option>
                                <option value="1">Regular</option>
                                <option value="2">Same Day</option>
                            </select>
                        </div>
                        <hr>
                        <h5><b>Total</b></h5>
                        <p><b>Rp. XXX. XXX</b></p>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Metode Pembayaran</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Pembayaran</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Masukkan No Rekening</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div>
                <hr />
                <div class="p-y-3">
                    <h4>Nama Toko</h4>
                    <p>Domisili Toko</p>
                </div>
                <div class="d-flex justify-content-start align-items-start" style="column-gap: 16px">
                    <div>
                        <img width="150px" src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTSwD1-34NU9tqxMKInv7CEpO_711qXM7z_tLW2m4rr2SIsUInAorNk0favd0LstVKLEIWQpRBELb-r_qHNGjr6WPhhY4hzAUj2lU-VFmCOTAv4iuEI5P_92EA&usqp=CAE" alt="Card image cap">
                    </div>
                    <div class="w-100">
                        <div>
                            <h4 class="mb-3">Nama Product</h4>
                            <p>Rp. XXX. XXX</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <input class="form-control form-control-sm" type="text" placeholder="Masukkan Jumlah Barang" aria-label=".form-control-sm example">
                            </div>
                            <div class="d-flex justify-content-start align-items-start" style="column-gap: 16px">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</button>
                                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />

            </div>
        </div>
        <div class="col-4">
            <br>
            <button type="button" class="btn btn-success btn-lg">Checkout Semua Barang</button>
        </div>
    </div>
</div>
@endsection