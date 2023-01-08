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
                    <form method="POST" action="{{route('pembelian') }}">
                        @csrf
                        <input type="hidden" name="id_barang" value="0">
                        <input type="hidden" name="total_pembayaran" value="0">
                        <input type="hidden" name="harga_barang" value="0">
                        <input type="hidden" name="jumlah_barang" value="0">
                        <input type="hidden" name="total_harga" value="0">
                        <h5 class="mb-2" id="nama_product">Nama Product</h5>
                        <p>Rp. <span id="harga_product"></span></p>
                        <p>Jumlah Barang : <span id="jumlah_product"></span></p>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat Penerima</label>
                            <textarea name="alamat_penerima" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jasa Pengiriman</label>
                            <select id="jasa_pengiriman" class="form-select" aria-label="Default select example">
                                <option selected disabled>Pilih Ekspedisi</option>
                                @foreach($jasaPengiriman as $item)
                                <option value="{{$item -> id}}">{{$item -> nama_jasa}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tipe Pengiriman</label>
                            <select name="id_tipe_jasa_pengiriman" id="tipe_jasa_pengiriman" class="form-select" aria-label="Default select example">
                                <option selected disabled>Pilih Tipe Pengiriman</option>

                            </select>
                        </div>
                        <hr>
                        <h5><b>Total</b></h5>
                        <p><b>Rp. <span id="harga_total"></span></b></p>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Metode Pembayaran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran" class="form-select" aria-label="Default select example">
                                <option selected disabled>Pilih Metode Pembayaran</option>
                                <option value="COD">COD</option>
                                <option value="Transfer">Transfer</option>
                            </select>
                        </div>
                        <div class="mb-3 metode-transfer">
                            <label for="exampleInputEmail1" class="form-label">Masukkan Nama Bank</label>
                            <input name="nama_bank" id="nama_bank" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 metode-transfer">
                            <label for="exampleInputEmail1" class="form-label">Masukkan No Rekening</label>
                            <input name="nomor_rekening" id="nomor_rekening" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 d-flex align-items-end justify-content-end" style="gap: 16px;">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Checkout</button>
                        </div>
                    </form>

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
                <form method="POST" action="{{ route('delete-cart') }}">
                    @csrf
                    @method('DELETE')
                    @foreach ($listCart as $item)
                    <div class="d-flex justify-content-start align-items-start mt-4" style="column-gap: 16px">
                        <div>
                            <img width="150px" src="{{ url('/storage/posts_image/' .$item -> image_url) }}" alt="Card image cap">
                        </div>
                        <div class="w-100">
                            <div>
                                <h4 class="mb-3">{{$item -> nama_barang}}</h4>
                                <p>Rp. {{$item -> harga_satuan}}</p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <input id="jumlah-{{$item->id_barangs}}" class="form-control form-control-sm" type="text" placeholder="Masukkan Jumlah Barang" aria-label=".form-control-sm example">
                                </div>
                                <div class="d-flex justify-content-start align-items-start" style="column-gap: 16px">
                                    <button value="{{$item->id_barangs}}" type="button" class="btn btn-primary buttonBeli" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</button>
                                    <button type="submit" name="id" value="{{$item -> id}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var harga_total = 0
    $('.buttonBeli').click(function() {
        var value = $(this).attr('value')
        $.ajax({
            url: "{!! url('/') !!}" + "/api/get-barang/" + value,
            type: "GET",
            success: function(response) {
                console.log(response)
                $('#nama_product').text(response.data.nama_barang);
                $('#harga_product').text(response.data.harga_satuan);
                $('#jumlah_product').text($('#jumlah-' + response.data.id).val());
                harga_total = response.data.harga_satuan * $('#jumlah-' + response.data.id).val()
                $('#harga_total').text(harga_total)
                $('input[name="id_barang"]').val(response.data.id);
                $('input[name="total_pembayaran"]').val(harga_total)
                $('input[name="harga_barang"]').val(response.data.harga_satuan)
                $('input[name="jumlah_barang"]').val($('#jumlah-' + response.data.id).val())
                $('input[name="total_harga"]').val(response.data.harga_satuan * $('#jumlah-' + response.data.id).val())
            }
        })
    });

    $('#jasa_pengiriman').on('change', function() {
        var id_jasa_pengiriman = this.value
        $.ajax({
            url: "{!! url('/') !!}" + "/api/get-tipe-jasa/" + id_jasa_pengiriman,
            type: "GET",
            success: function(response) {
                console.log(response)
                response.data.map((item) => {
                    $('#tipe_jasa_pengiriman').append($('<option>', {
                        value: item.id,
                        text: item.nama_tipe,
                        harga: item.harga_tipe
                    }));
                })

            }
        })
    });

    $('#tipe_jasa_pengiriman').on('change', function() {
        var element = $(this).find('option:selected');
        var harga = element.attr('harga')
        var hargaFinal = Number(harga) + harga_total
        $('#harga_total').text(hargaFinal)
        $('input[name="total_pembayaran"]').val(hargaFinal)
    });

    $('#metode_pembayaran').on('change', function() {
        if (this.value == 'COD') {
            $('.metode-transfer').hide();
        } else {
            $('.metode-transfer').show();
        }
    });
</script>
@endsection