@extends('main')

@section('content')

<div class="container add_pro" id="add_product" inline-template>
    <div class="row">
        <div class="col-sm-10">
            <h1>Add a New Product</h1>
        </div>
    </div>

    <div class="row">

        <form method="POST" action="/products" enctype="multipart/form-data" class="dropzone" id="upload_images">

        <div class="col-sm-4 col-sm-offset-1">

                <input type="file" class="btn btn-default" value="Upload Photos" name="product_image">
                <h4>Or Drag & Drop Pictures Below</h4>
                {{--<form action="/products/image" method="POST" >--}}
                    {{--{{ csrf_field() }}--}}
                {{--</form>--}}
                <div class="dropzone-previews upload-drop-zone"></div>

                {{--<div class="dropzone-previews" id="previewsContainer"></div>--}}

        </div>

        <div class="col-sm-4 col-sm-offset-1">



                <fieldset class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" class="form-control" id="Title" name="title" placeholder="Adorable Apron">
                </fieldset>
                <fieldset class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </fieldset>

                <button type="submit" class="btn btn-default pro_sub" id="addProduct">Add Product</button>

                {{ csrf_field() }}


        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        </div>

        </form>

    </div>

</div>

@stop


@section('scripts.footer')
@stop