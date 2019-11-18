<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="row">
    <div class="col-12">
    <table class="table">
        <thead>
            <tr>
                <th class="border">id</th>
                <th class="border">title</th>
                <th class="border">title_slug</th>
                <th class="border">description</th>
                <th class="border">content</th>
            </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td class="border">{{$article->id}}</td>
                <td class="border">{{$article->title}}</td>
                <td class="border">{{$article->title_slug}}</td>
                <td class="border">{{$article->description}}</td>
                <td class="border">{{$article->content}}</td>
                <td class=" d-flex">
                    <form action="{{route('article.show',$article->id)}}" method="get">
                        <button type="submit" class="btn btn-primary">Show</button>
                    </form>
                    <form  action="{{route('article.edit',$article->id)}}" method="get">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                    <form action="{{route('article.destroy',$article->id)}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>

    <a href="{{route('article.create')}}" class="btn btn-primary float-right">Create a new article</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>