<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                List
            </div>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Nomor</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Avatar</th>
                </tr>
              </thead>
              @php
                  $nomor    = 1;
              @endphp
              <tbody>
                @foreach ($all as $row)
                    <tr>
                      <th scope="row">{{$nomor++}}</th>
                      <td>{{$row->nama}}</td>
                      <td>{{$row->alamat}}</td>
                      <td>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{$row->depan}}">
                            Edit
                          </button>
                          <!-- Modal -->
                          @include('modal')

                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            <a href="{{route('profil.create')}}" class="btn btn-primary btn-sm">Profile</a>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
