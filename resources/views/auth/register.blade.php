<!doctype html>
<html lang="en">
  <head>
    <title> Rejestracja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-6 m-auto">
                    <div class="card shadow">
                        <div class="card-header">
                            <h4 class="card-title font-weight-bold"> Formularz rejestracyjny </h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name"> Imie <span class="text-danger"> * </span> </label>
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Podaj imie"/>
                                    {{-- {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!} --}}
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="username"> Nazwa użytkownika <span class="text-danger"> * </span> </label>
                                    <input type="text" name="username" class="form-control" value="{{old('username')}}" placeholder="Podaj nazwe użytkownika"/>
                                    {{-- {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!} --}}
                                    @error('username')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"> Email <span class="text-danger"> * </span> </label>
                                    <input type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Podaj email" />
                                    {{-- {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!} --}}
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone"> Telefon <span class="text-danger"> * </span></label>
                                    <input type="text" max="10" name="phone" class="form-control" value="{{old('phone')}}" placeholder="Podaj telefon" />
                                    {{-- {!!$errors->first("phone", "<span class='text-danger'>:message</span>")!!} --}}
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"> Hasło <span class="text-danger"> * </span></label>
                                    <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="Podaj hasło"/>
                                    {{-- {!!$errors->first("password", "<span class='text-danger'>:message</span>")!!} --}}
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="confirm_password"> Potwierdź hasło <span class="text-danger"> * </span></label>
                                    <input type="password" name="confirm_password" class="form-control" value="{{old('confirm_password')}}" placeholder="Potwierdź hasło"/>
                                    {{-- {!!$errors->first("confirm_password", "<span class='text-danger'>:message</span>")!!} --}}
                                    @error('confirm_password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Register </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>