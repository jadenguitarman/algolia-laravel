<!DOCTYPE html>
<html>
<head>
    <title>Laravel - laravel scout algolia search example</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container">
    <h2>Laravel Full Text Search using Scout and algolia</h2><br/>


    <div class="panel panel-primary">
      <div class="panel-heading">Song management</div>
      <div class="panel-body">
            <form method="GET" action="{{ route('songs-lists') }}">


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="titlesearch" class="form-control" placeholder="Enter Title For Search" value="{{ old('titlesearch') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button class="btn btn-success">Search</button>
                        </div>
                    </div>
                </div>
            </form>


            <table class="table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Creation Date</th>
                    <th>Updated Date</th>
                </thead>
                <tbody>
                    @if($songs->count())
                        @foreach($songs as $key => $song)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $song->title }}</td>
                                <td>{{ $song->created_at }}</td>
                                <td>{{ $song->updated_at }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">There are no data.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $songs->links() }}
      </div>
    </div>


</div>


</body>
</html>
