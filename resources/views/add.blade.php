<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
    <link rel="stylesheet" href="{{asset('style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

    <p>Reza</p>


        <div class="container">
            <h1>Add Data</h1>
            <form action="/insert" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="col-6">
                    <div class="form-group">
                        <label>NIS</label>
                        <input name="nis" class="form-control" value="{{ old('nis') }}">
                        <div class="text-danger">
                            @error('nis')
                            {{ $message }}
                        @enderror
                          </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" class="form-control" value="{{ old('nama') }}">
                        <div class="text-danger">
                            @error('nama')
                            {{ $message }}
                        @enderror
                          </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label>Hobi</label>
                        <input name="hobi" class="form-control" value="{{ old('hobi') }}">
                        <div class="text-danger">
                            @error('hobi')
                            {{ $message }}
                        @enderror
                          </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label>Umur</label>
                        <input name="umur" class="form-control" value="{{ old('umur') }}">
                        <div class="text-danger">
                            @error('umur')
                            {{ $message }}
                        @enderror
                          </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" class="form-control" value="{{ old('alamat') }}">
                        <div class="text-danger">
                            @error('alamat')
                            {{ $message }}
                        @enderror
                          </div>
                    </div>
                </div>
                <br>

                <div class="form-group">
                <a href="/datasiswa" class="btn btn-sm btn-primary">Back</a>
                    <button class="btn btn-sm btn-primary">Submit</button>
                </div>
            </div>

            </form>


    </div>
</body>
</html>
