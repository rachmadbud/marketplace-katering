@extends('admin.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Menchart</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Menchart</h3>
                        </div>
                        <!-- /.card-header -->
                        @if (is_null($dataProfile))
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Nama Perusahaan</strong>

                                <p class="text-muted">
                                <div class="alert alert-danger" role="alert">
                                    Data Kosong
                                </div>
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i>Alamat</strong>

                                <p class="text-muted">
                                <div class="alert alert-danger" role="alert">
                                    Data Kosong
                                </div>
                                </p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i>Kontak </strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">
                                        <div class="alert alert-danger" role="alert">
                                            Data Kosong
                                        </div>
                                    </span>
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Deskripsi</strong>

                                <p class="text-muted">
                                <div class="alert alert-danger" role="alert">
                                    Data Kosong
                                </div>
                                </p>
                            </div>
                        @else
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Nama Perusahaan</strong>

                                <p class="text-muted">
                                    {{ $dataProfile->nama_perusahaan }}
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i>Alamat</strong>

                                <p class="text-muted">{{ $dataProfile->alamat }}</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i>Kontak </strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">{{ $dataProfile->kontak }}</span>
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Deskripsi</strong>

                                <p class="text-muted">{{ $dataProfile->deskripsi }}</p>
                            </div>
                        @endif

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                @if (is_null($dataProfile))
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <a class="nav-link">Create</a>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action="{{ route('merchant.profilePost') }}">
                                    @csrf
                                    <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_perusahaan"
                                                class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                                id="inputName" placeholder="Nama Perusahaan">
                                            @error('nama_perusahaan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" cols="0"
                                                rows="10" placeholder="Alamat"></textarea>
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Kontak</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="kontak"
                                                class="form-control @error('kontak') is-invalid @enderror" id="inputName2"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" id="inputExperience"
                                                placeholder="Experience"></textarea>
                                            @error('deskripsi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                @else
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <a class="nav-link">Update</a>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form class="form-horizontal" method="post"
                                    action="{{ route('merchant.profileUpdate', Auth::user()->id) }}">
                                    @csrf
                                    <input type="text" name="id_user" value="{{ Auth::user()->id }}" hidden>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama_perusahaan"
                                                class="form-control @error('nama_perusahaan') is-invalid @enderror"
                                                id="inputName" placeholder="Nama Perusahaan">
                                            @error('nama_perusahaan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" cols="0"
                                                rows="10" placeholder="Alamat"></textarea>
                                            @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Kontak</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="kontak"
                                                class="form-control @error('kontak') is-invalid @enderror" id="inputName2"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control  @error('deskripsi') is-invalid @enderror" name="deskripsi" id="inputExperience"
                                                placeholder="Experience"></textarea>
                                            @error('deskripsi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                @endif
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('script')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script>
        function showTime() {
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";

            if (h == 0) {
                h = 12;
            }

            if (h > 12) {
                h = h - 12;
                session = "PM";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }
        showTime();
    </script>
@endpush
