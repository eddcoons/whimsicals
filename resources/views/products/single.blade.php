@extends('main')

@section('content')

    <script type="text/template-vue" id="singleProductView">

        <div class="container whim_product">

            <div class="row">
                <div class="col-sm-4 pro_img">
                    <img src="/img/whim_roses_1.png" id="main_photo">
                </div>
                <div class="col-sm-1 pro_img">
                    @foreach($product->images as $image)

                        <img src="{{$image->url}}" class="thumbnail_img">

                    @endforeach
                </div>

                <div class="col-sm-3 col-sm-offset-1">
                    <h1>{{ $product->title  }}</h1>
                   <p> {{ $product->description  }} </p>
                    <h4>{{ $product->price }}</h4>
                        <select v-model="quantity">
                            @foreach(range(1, $quantity) as $index)
                                <option>{{$index}}</option>
                            @endforeach
                        </select>

                        <button @click="addToCart()" type="button" class="btn whim_submit" id="whim_submit">Add to Cart!</button>

                    </div>

                </div>

            </div>
        </div>

        </div>

    </script>

    <single-product product_id="{{$product->id}}"></single-product>

@stop

