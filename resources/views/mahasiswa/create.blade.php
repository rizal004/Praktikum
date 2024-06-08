@extends('Layout.main') 
    @section('content')  
        <div class="container">  
            <div class="card my-4">  
                <div class="card-header">  
                    tambah Mahasiswa  
                </div>  
                <div class="card-body">  
                    <form action="{{Route('mahasiswa.store')}}" method="post" enctype="multipart/form-data"> 
                    @csrf 
                    <div class="form-group">  
                    <label for="">Jurusan</label>  
                    <select name="jurusan" id="" class="form-control">  
                    <option value="">-pilih -</option>  
                    <option value="TI">TI</option>  
                    <option value="SI">SI</option>  
                    </select>
                    @error('jurusan')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror  
                </div>  
                <div class="form-group">  
                    <label for=I>NPM</label>  
                    <input type="text" name="npm" class="form-control">
                @error('npm')   
                <small class="text-danger">{{ $message }}</small>
                    @enderror

                </div> 
                <div class="form-group">  
                    <label for="">Nama</label>  
                    <input type="text" name="nama" class="form-control"> 
                    @error('nama')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                     
                </div> 
                   
                <div class="form-group">  
                    <label for="">Tanggal Lahir</label>  
                    <input type="date" name="tanggal_lahir" class="form-control"> 
                @error('tanggal_lahir')
                <small class="text-danger">{{ $message }}</small>
                    @enderror  

                </div>  
                
                <div class="form-group">  
                    <label for="">Foto</label>  
                    <input type="file" name="foto" class="form-control">  
                    @error('foto')   
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>  
        </div>
        <div class="card-footer">  
        <div class="float-end">  
            <a href="{{Route('mahasiswa.index')}}" class="btn btn-light">Kembali</a>  
            <button type="submit" class="btn btn-primary">Simpan data</button>  
        </div> 
        </form> 
    </div>  
    </div>  
</div>  
@endsection