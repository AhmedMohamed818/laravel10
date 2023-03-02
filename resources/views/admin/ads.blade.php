<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Admin ADS</title>
  @extends('admin.admin_master')
@section('admin')

          <table class="table" style="color: white;">
            <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col" style="text-align: center;">picture</th>
              <th scope="col" style="text-align: center;">ads details</th>
              <th scope="col" style="text-align: center;"> action </th>
              <th scope="col" style="text-align: center;"> action </th>
              </tr>
            </thead>
            <tbody>
            @php($i =1)
              @foreach($users as $user)
              <tr>
              <th scope="row">{{$i++}}</th>
              <td style="text-align: center;">{{$user -> id}}</td>
              <td style="text-align: center;">{{$user -> name}}</td>
              <td style="text-align: center;">{{$user -> email}}</td>
              <td style="text-align: center;">{{$user -> create_at}}</td>
              
              <td style="text-align: center;"><button class="btn btn-success" type="submit" style=" border-radius: 10px;">accept</button><button class="btn btn-success" type="onclick" style=" border-radius: 10px;width: 75px;margin-left: 10px;">reject</button></td>
              </tr>
              @endforeach
              
            </tbody>
            </table>
            @endsection
  </body>
</html>
