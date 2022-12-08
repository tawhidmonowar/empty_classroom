<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-left" style="padding-top: 20px">
            <p>Import Class Routine of CSE (xlsx or csv)</p>
        </div>
        <div class="card-body">
            <form action="{{route('import-routine')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button type="submit" class="btn btn-primary">Import Routine</button>
            </form>
        </div>

        @isset($imported)
        <div class="card-header text-left" style="padding-top: 20px; background:rgba(0, 177, 0, 0.897)">
            <p style="color: white">{{$imported}}</p>
        </div>
        @endisset
    </div>

    <div class="card mt-3 mb-3">
        <div class="card-body">
            <form action="{{route('delete-cse')}}" method="POST" enctype="multipart/form-data" style="display:inline">
                @csrf <button type="submit" class="btn btn-danger">Delete CSE Routine</button>
            </form>
            <form action="{{route('delete-eee')}}" method="POST" enctype="multipart/form-data" style="display:inline">
                @csrf <button type="submit" class="btn btn-danger">Delete EEE Routine</button>
            </form>
            <form action="{{route('delete-se')}}" method="POST" enctype="multipart/form-data" style="display:inline">
                @csrf <button type="submit" class="btn btn-danger">Delete SE Routine</button>
            </form>
            <form action="{{route('delete-eng')}}" method="POST" enctype="multipart/form-data" style="display:inline">
                @csrf <button type="submit" class="btn btn-danger">Delete Eng Routine</button>
            </form>
            <form action="{{route('delete-law')}}" method="POST" enctype="multipart/form-data" style="display:inline">
                @csrf <button type="submit" class="btn btn-danger">Delete LAW Routine</button>
            </form>
            <form action="{{route('delete-all')}}" method="POST" enctype="multipart/form-data" style="display:inline">
                @csrf <button type="submit" class="btn btn-danger">Delete All Routines</button>
            </form>
        </div>

        @isset($data)
        <div class="card-header text-left" style="padding-top: 20px; background:rgb(252, 42, 42)">
            <p style="color: white">{{$data}}</p>
        </div>
        @endisset

    </div>

    
    <div class="card mt-3 mb-3">
        <div class="card-body">
            <a class="btn btn-warning" href="http://127.0.0.1:8000/admin/classrooms" role="button">Manage Classrooms</a>
        </div>
    </div>

</div>
     
</body>
</html>
</x-app-layout>
