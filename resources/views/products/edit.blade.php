@extends('layouts.app')

@section('content')
    <div class="container">
        <main>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-12">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" value="{{ $product->name }}">
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{ $product->description }}</textarea>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="retail_price">Retail Price</label>
                        <input class="form-control" type="number" name="retail_price" id="retail_price"
                            value="{{ $product->retail_price }}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="wholesale_price">Wholesale Price</label>
                        <input class="form-control" type="number" name="wholesale_price" id="wholesale_price"
                            value="{{ $product->wholesale_price }}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="min_wholesale_qty">Min Wholesale Qty.</label>
                        <input class="form-control" type="number" name="min_wholesale_qty" id="min_wholesale_qty"
                            value="{{ $product->min_wholesale_qty }}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="quantity">Quantity</label>
                        <input class="form-control" type="number" name="quantity" id="quantity"
                            value="{{ $product->quantity }}">
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">Update</button>
                </div>
            </form>
        </main>
    </div>
@endsection
