
@extends('supplier.css.supplierindexcss')
@extends('layouts.sidebar')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Data Table</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    
<script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
<header class="dashboard-header">
        <p>Products Dashboard</p>
    </header>

<div class="container mx-auto mt-8">
    <!-- Artworks Table -->
    <div class="table-wrapper">
    <table id="artworkTable" class="table table-striped table-bordered">
    <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>Supplier<b> Management</b></h2>
                    </div>
                    <div class="col-xs-7">
                    <a href="{{ route('supplier.create') }}" class="btn btn-primary mt-4"><i class="fas fa-plus"></i> Add Supplier</a>

                    </div>
                </div>
            </div>
        <thead class="bg-gray-800 text-black">
            <tr>
                <th>Supplier Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Image</th>
                <th>Actions</th> <!-- Added column for CRUD actions -->
                <th>Edit</th>
                        <th>Delete/Restore</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->name }}</td>      
                <td>{{ $supplier->email }}</td>
                <td>{{ $supplier->contactno }}</td>
                <td>
                    @if ($supplier->img)
                        <?php $imgPaths = explode(',', $supplier->img); ?>
                        <img src="{{ asset($imgPaths[0]) }}" alt="{{ $supplier->name }}" style="max-width: 100px; max-height: 100px;">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                <button class="btn btn-sm btn-primary me-2" data-bs-toggle="modal" data-bs-target="#showArtworkModal{{ $supplier->id }}"><i class="fas fa-eye"></i> Show</button>
                </td>
                <td>
                <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-sm  me-2">  <i class="material-icons">&#xE8B8;</i></a>
                </td>
                <td class="text-center">

                    @if ($supplier->trashed())

                        {{-- Restore button --}}
                        <form method="GET" action="{{ route('supplier.restore', $supplier->id) }}">
                            @csrf
                            
                            <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-trash-restore"></i> Restore</button>
                        </form>

                        
                    @else
                        {{-- Delete button --}}
                        <form method="POST" action="{{ route('supplier.destroy', $supplier->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm ">  <i class="material-icons" style="color: red;">&#xE5C9;</i></button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <!-- Add Artwork Button -->
  
</div>

</body>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#artworkTable').DataTable();
    });
</script>
</html>



