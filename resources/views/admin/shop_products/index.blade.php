@extends('admin.layouts.layout')

@section('title')
    Товары - Список
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Главная</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active">Список товаров</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Список товаров</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('shop_products.create') }}" class="btn btn-primary mb-3">Добавить товар</a>
                @if (count($products))
                    <div class="table-responsive">
                        <table class="display" id="post_table_index">
                            <thead>
                            <tr>
                                <th style="width: 30px">#</th>
                                <th>Название</th>
                                <th>Категория</th>
                                <th>Добавлен</th>
                                <th>Обновлен</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr @if(!$product->status) style="background-color: #ccc;" @endif>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->category->title }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('shop_products.edit', ['shop_product' => $product->id]) }}"
                                           class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <a href="{{ route('shop_products.gallery_view', ['shop_product' => $product->id]) }}"
                                           class="btn btn-info btn-sm float-left mr-1">
                                            <i class="far fa-images"></i>
                                        </a>

                                        <form action="{{ route('shop_products.destroy', ['shop_product' => $product->id]) }}"
                                              method="post" class="float-left">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Подтвердите удаление')">
                                                <i
                                                    class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p>Товаров пока нет...</p>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script>
        $(document).ready( function () {
            $('#post_table_index').DataTable();
        } );
    </script>
@endsection

