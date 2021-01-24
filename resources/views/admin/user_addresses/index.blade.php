@extends('admin.layouts.layout')

@section('title')
    Адреса - Список
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
                        <li class="breadcrumb-item active">Адреса пользователей</li>
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
                <h3 class="card-title">Список адресов</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('user_addresses.create') }}" class="btn btn-warning mb-3">Добавить
                    адрес</a>
                @if (count($addresses))
                    <div class="table-responsive">
                        <table class="display" id="category_table_index">
                            <thead>
                            <tr>
                                <th style="width: 30px">#</th>
                                <th>Пользователь</th>
                                <th>Адрес</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($addresses as $address)
                                <tr>
                                    <td>{{ $address->id }}</td>
                                    <td>{{ $address->user->name }}</td>
                                    <td>{{ $address->address }}</td>
                                    <td>
                                        <a href="{{ route('user_addresses.edit', ['user_address' => $address->id]) }}"
                                           class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <form action="{{ route('user_addresses.destroy', ['user_address' => $address->id]) }}"
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
                    <p>Адресов пока нет...</p>
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
        $(document).ready(function () {
            $('#category_table_index').DataTable();
        });
    </script>
@endsection


