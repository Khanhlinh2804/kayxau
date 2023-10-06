@extends('backend.index')
@section('title','Category List')
@section('linh')
    <div class="container">
        <form action="">
            <div class="row pb-2 pt-2">
                <div class="col-lg-1">
                    <a href="{{route('category.index')}}" class="btn btn-success">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </a>
                </div>
            </div>
        </form>
       @if (session('error'))
           <div class="aleat-success">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>
                        {{ session('error') }}
                    </strong>
                </div>
            </div>     
       @endif
        <h3>Trash List</h3>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                            <a href="{{route('category.restore',$item->id)}}" class=""><ion-icon name="enter-outline" class="button-icon-update"></ion-icon></a>
                            <a href="{{route('category.delete',$item->id)}}" ><ion-icon name="trash-bin-outline" class="bin-outline"></ion-icon></a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$category->appends(request()->all())->links() }}
    </div>
@endsection