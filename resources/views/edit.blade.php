<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel MultiDB</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            @if ($type == 'mysql')
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DB1: MySQL</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/edit/' . $product->id . '/mysql') }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $product->title }}">
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" name="price" class="form-control" value="{{ $product->price }}">
                            </div>
                            <button class="btn btn-primary btn-sm">Simpan</button>
                            <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DB2: MongoDB</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/edit/' . $category->id . '/mongo') }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                            </div>
                            <button class="btn btn-primary btn-sm">Simpan</button>
                            <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>