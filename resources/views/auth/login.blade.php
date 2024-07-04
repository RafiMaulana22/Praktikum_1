@extends('layout.template_auth')

@section('content')
    {{-- Form --}}
    <h4 class="mb-2">Welcome to CRUD Praktikum! 👋</h4>
    <p class="mb-4">Silakan masuk ke akun Anda dan mulai petualangan</p>
    <form id="formAuthentication" class="mb-3" action="/" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control" id="email" name="email"
                placeholder="Enter your email" autofocus />
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">NIM</label>
            </div>
            <div class="input-group input-group-merge">
                <input type="text" id="password" class="form-control" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
        </div>
    </form>
    {{-- End Form --}}
@endsection
