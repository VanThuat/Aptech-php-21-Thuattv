<!doctype html>
<html lang="en">
<head>
    <title>Create a new article</title>
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
        <h1 class="text-secondary bg-light text-center">Create a new article</h1>
        <div class="d-flex justify-content-center">
        <form class="w-75 " action="{{route('article.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Text..." aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                    <label for="title_slug">Title_slug</label>
                    <input type="text" name="title_slug" id="title_slug" class="form-control" placeholder="Text..." aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" name="description" id="Description" class="form-control" placeholder="Text..." aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="3">
                        <span class="text-muted">Write the content here...</span>
                    </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
            </form>
            <div>
        </div>
    </div>    
</div>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
</body>
</html>