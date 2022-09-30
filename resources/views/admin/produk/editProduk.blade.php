@extends('admin.partials.content', ['title' => 'Edit Produk'])
@section('content')
    <div class="container mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3 data-id="edit-page-title">Form Edit Data Produk</h3>
                <form method="post" enctype="multipart/form-data" action="{{ route('produk.update', $produk->id) }}" id="myForm" >
                    @csrf
                    @method('PUT')
                <div class="form-group">
                <label for="nama" data-id="label-nama">Nama Produk</label>
                <input data-id="edit-nama" type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" value="{{ old( 'nama_produk', $produk->nama_produk) }}" required autofocus>
                @error('nama_produk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="foto_produk" data-id="label-foto">Foto Produk</label>
                    <input data-id="edit-foto" type="file" class="form-control @error('foto_produk') is-invalid @enderror" name="foto_produk" value="/storage/{{ $produk->foto_produk }}">
                    <img src="/storage/{{ $produk->foto_produk }}" width="100px">
                    @error('foto_produk')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga" data-id="label-harga">Harga</label>
                    <input data-id="edit-harga" type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old( 'harga', $produk->harga)}}" required >
                    @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok" data-id="label-stok">Stok</label>
                    <input data-id="edit-stok" type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old( 'stok', $produk->stok) }}" required >
                    @error('stok')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="diskon" data-id="label-diskon">Diskon</label>
                    <input data-id="edit-diskon" type="text" name="diskon" class="form-control @error('diskon') is-invalid @enderror" value="{{ old( 'diskon', $produk->diskon) }}" required >
                    @error('diskon')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi" data-id="label-deskripsi">Deskripsi Produk</label>
                    <textarea data-id="edit-deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required>{{ $produk->deskripsi }}</textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori" data-id="label-kategori">Kategori</label>
                    <select data-id="select-kategori" class="custom-select mr-sm-2  @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id">
                        @foreach ($all_kategori as $kategori)
                                <option value="{{ $kategori->id }}" {{ $produk->kategori_id == $kategori->id? 'selected' : '' }}>{{$kategori->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="supplier" data-id="label-supplier">Supplier</label>
                    <select data-id="select-supplier" class="custom-select mr-sm-2  @error('supplier_id') is-invalid @enderror" id="supplier_id" name="supplier_id">
                        @foreach ($all_supplier as $supplier)
                                <option value="{{ $supplier->id }}" {{ $produk->supplier_id == $supplier->id? 'selected' : '' }}>{{$supplier->nama_supplier}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group float-left">
                    <a href="{{ route('produk.index') }}" class="btn btn-lg btn-warning">Kembali</i></a>
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-lg btn-danger" type="reset" data-id="btn-reset">Reset</button>
                    <button data-id="btn-submit" class="btn btn-lg btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection