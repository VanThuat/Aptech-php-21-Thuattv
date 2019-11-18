<!doctype html>
<html lang="en">
<head>
    <title>Update article</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
        <h1 class="text-secondary bg-light text-center">Update article</h1>
        <div class="d-flex justify-content-center">
            <form action="{{route('article.update',$article->id)}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="put" />
                    <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                    <label for="">Title_slug</label>
                    <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                    <label for="">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="w-25 btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>
</html>