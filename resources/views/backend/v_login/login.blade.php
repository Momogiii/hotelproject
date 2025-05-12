<div class="container d-flex justify-content-center align-items-center min-vh-100 border">
    <div class="w-50 row align-items-center border">
        <h3> {{$judul}}</h3>

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

        <form method="POST" action="{{ route('backend.login') }}" class="border">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</address></label><br>
                <input type="email" name="email" id="exampleInputEmail1" value="{{ old('email') }}"
                    placeholder="Masukan Email Anda" class="form-control @error('email') is-invalid @enderror">
                    <div class="invalid-feedback">
                        isi email anda
                    </div>
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
                    placeholder="Masukan Password Anda" class="form-control @error('password') is-invalid @enderror">
            </div>
            @error('password')
            <span class="invalid-feedback alert-danger" role="alert">
                {{$message}}
            </span>
            @enderror
            <p></p>
            <div class="mt-3 text-center">
                <a href="/backend/daftar">Create Account</a><br>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <p></p>
        </form>
    </div>
</div>