<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="mt-5">Add New User</h1>
                {{-- @if ($errors->any())
                    <ul class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                @endif --}}
                <form action="{{ route('adduser') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control @error('username') is-invalid @enderror" type="text"
                            id="name" name="username" value="{{ old('username') }}">
                        <span class="text-danger">
                            @error('username')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control  @error('useremail') is-invalid @enderror" type="email"
                            id="email" name="useremail" value="{{ old('useremail') }}">
                        <span class="text-danger">
                            @error('useremail')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control  @error('userpass') is-invalid @enderror" type="password"
                            id="password" name="userpass" value="{{ old('userpass') }}">
                        <span class="text-danger">
                            @error('userpass')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="age">Age</label>
                        <input class="form-control  @error('userage') is-invalid @enderror" type="number"
                            id="age" name="userage" value="{{ old('userage') }}">
                        <span class="text-danger">
                            @error('userage')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="city">City</label>
                        <select class="form-control" name="usercity" id="city">
                            <option value="rangpur">Rangpur</option>
                            <option value="dinajpur">Dinajpur</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="bogura">Bogura</option>
                        </select>
                        <span class="text-danger">
                            @error('usercity')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
