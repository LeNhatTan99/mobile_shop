@extends('layouts.app')
@section('content')
    <table class="table">
        <h3>Quản lý sản phẩm</h3>
        <tbody>

            <tr>
                <th scope="col">Tên sản phẩm</th>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <th scope="col">Danh mục sản phẩm</th>

                <td>
                    @foreach ($product->categories as $category)
                        {{ $category->category_name }} <br>
                    @endforeach
                </td>
            </tr>
            <tr>
                <th scope="col">Thương hiệu</th>
                <td>
                    @foreach ($product->brands as $brand)
                        {{ $brand->name }} <br>
                    @endforeach

                </td>
            </tr>

            <tr>
                <th scope="col">Giá</th>
                <td>{{ $product->price }}</td>
            </tr>
            <tr>
                <th scope="col">Giá khuyến mãi</th>
                <td>{{ $product->discount }}</td>
            </tr>

            <tr>
                <th scope="col">Màu sắc</th>
                <td>{{ $product->color }}</td>
            </tr>

            <tr>
                <th scope="col">Hình ảnh</th>
                <td>{{ $product->thumbnail }}</td>
            </tr>

            <tr>
                <th scope="col">Mô tả</th>
                <td>{{ $product->description }}</td>
            </tr>

            <tr>
                <th scope="col">Số lượng</th>
                <td>{{ $product->inventory }}</td>

            </tr>

        </tbody>
    </table>
    <a href="{{ route('products.index') }}" class="btn btn-success">Quay lại</a>
@endsection
