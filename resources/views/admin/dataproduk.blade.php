@extends('admin.partials.content', ['title' => 'Data Produk'])

@section('content')
   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Produk</h3> 
              @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ Session::get('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif
              <form action="{{ route('produk.index') }}" class="mt-4" method="get">
                @csrf
                <div class="row flex-row">
                    <div class="col-md-4">
                        <div class="input-group">    
                            <input type="text" name="search" class="form-control" placeholder="Cari Nama Produk" aria-label="search" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <input type="submit" value="Cari" class="btn btn-secondary" id="search">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="float-right my-2">
                            <a class="btn btn-success" href="{{ route('produk.create') }}"> Input Produk</a>
                        </div>
                    </div>   
                    <div class="row">
                      <div class="col-md-12">
                          <div class="float-right my-2">
                              <a href="{{route('cetak_pdf')}}"><i class="fa fa-file-pdf-o" style="font-size:30px;color: #9DD6DF"></i></a>  
                          </div>
                      </div>
                </div>
                </div>
            </form>
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="table-responsive" class="table table-bordered table-hover">
                <thead>
                  <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Foto Produk</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Diskon</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Nama Kategori</th>
                      <th scope="col">Nama Supplier</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($all_produk as  $produk)
                <tr>
                 <td>{{($produk->id)}}</td>
                 <td>{{($produk->nama_produk)}}</td>
                 <td><img width="90px" src="/storage/{{$produk->foto_produk}}"></td>
                 <td>Rp{{number_format($produk->harga,2,',','.')}}</td>
                 <td>{{($produk->stok)}}</td>
                 <td>{{($produk->diskon)}}</td>
                 <td>{{ substr($produk->deskripsi, 0, 50) }}...</td>
                 <td>{{($produk->kategori->nama_kategori)}}</td>
                 <td>{{($produk->supplier->nama_supplier)}}</td>
                 <td width="200px">
                 <form action="{{ route('produk.destroy',$produk->id) }}" method="POST" onsubmit="return confirm('Apakah anda yakin menghapus data?')"> 
                  <a href="{{ route('produk.show',$produk->id)}}"><i class="fa fa-eye" style="font-size:30px;color: #9DD6DF"></i></a>  
                  
                  {{-- <a class="btn btn-info" href="{{ route('produk.show',$produk->id) }}">Show</a> --}}
                  <a href="{{ route('produk.edit',$produk->id)}}"><i class="fa fa-pencil-square-o" style="font-size:30px;color: #9DD6DF"></i></a>  
                 
                    {{-- <a class="btn btn-primary" href="{{ route('produk.edit',$produk->id) }}">Edit</a> --}}
                    @csrf
                    @method('DELETE')
                    <button class="fa fa-trash" style="font-size:30px;color: #9DD6DF"></button>  
                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                </form>
                </td>
                </tr>
                   @endforeach
            </tbody>
            </table>
            <div class="d-flex justify-content-center">
              {{ $all_produk->withQueryString()->links() }}
            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection