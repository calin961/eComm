@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
    <div class="trending-wrapper">
        <h4>Result for products</h4>
        @foreach($product as $item)
        <div class="search-item">
        <a href="detail/{{$item['id']}}" class="h">
            <img class="trending-image" src="{{$item['gallery']}}">
            <div class="">
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['description']}}</h5>

            </div>
        </a>
        </div>

        @endforeach
    </div>
    </div>
</div>

@endsection