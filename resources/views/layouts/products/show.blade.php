@extends('layouts.app')
@section('content')
    <table class="table">
        <h3>Quản lý sản phẩm</h3>
        <tbody>

            <tr>
                <th scope="col">Name</th>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <th scope="col">Category</th>

                <td>
                    @foreach ($product->categories as $category)
                        {{ $category->name }} <br>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th scope="col">Brand</th>
                <td>
                    @foreach ($product->brands as $brand)
                        {{ $brand->name }} <br>
                    @endforeach

                </td>
            </tr>

            <tr>
                <th scope="col">Price</th>
                <td>{{ $product->price }}</td>
            </tr>
            <tr>
                <th scope="col">Discount</th>
                <td>{{ $product->discount }}</td>
            </tr>

            <tr>
                <th scope="col">Color</th>
                <td>{{ $product->color }}</td>
            </tr>

            <tr>
                <th scope="col">Thumbnail</th>
                <td>{{ $product->thumbnail }}</td>
            </tr>

            <tr>
                <th scope="col">Description</th>
                <td>{{ $product->description }}</td>
            </tr>

            <tr>
                <th scope="col">Inventory</th>
                <td>{{ $product->inventory }}</td>

            </tr>

        </tbody>
    </table>
    <a href="{{ route('products.index') }}" class="btn btn-success">Quay lại</a>
@endsection
