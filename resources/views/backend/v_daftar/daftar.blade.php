<div class="container d-flex justify-content-center align-items-center min-vh-100 border">
    <div class="row align-items-center border">
<h2>{{$judul}}</h2>
<p>Already A Member? <a href="/backend/login">Log In</a></p>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<form method="post" action="{{ route('backend.register') }} " class="border">
    @csrf
    <div class="mb-3">
        <label for="exampleInputNama1" class="form-label">Nama</label><br>
        <input type="text" name="nama" id="" value="{{ old('nama') }}"
            class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan nama">
    </div>
    @error('nama')
    <span class="invalid-feedback alert-danger" role="alert">
        {{$message}}
    </span>
    @enderror
    <p></p>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label><br>
        <input type="text" name="email" id="" value="{{ old('email') }}"
            class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Username">
    </div>
    @error('email')
    <span class="invalid-feedback alert-danger" role="alert">
        {{$message}}
    </span>
    @enderror
    <p></p>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label><br>
        <input type="password" name="password" id="exampleInputPassword1" value="{{ old('password') }}"
            class="form-control @error('password') is-invalid @enderror" placeholder="Masukan password">
    </div>
    @error('password')
    <span class="invalid-feedback alert-danger" role="alert">
        {{$message}}
    </span>
    @enderror
    <p></p>
    <div class="mb-3">
        <label for="exampleInputNoHp1" class="form-label">Masukan No Hp</label><br>
        <input type="text" name="hp" id="" value="{{ old('hp') }}"
            class="form-control @error('hp') is-invalid @enderror" placeholder="Masukan no hp">
    </div>
    @error('hp')
    <span class="invalid-feedback alert-danger" role="alert">
        {{$message}}
    </span>
    @enderror
    <p></p>
    <div class="mt-3 text-center">
        <button type="submit" class="btn btn-primary">Daftar</button>
    </div>
</form>
</div>
</div>