@extends('layouts.admin.admin')
 @section('conten')
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 @if (session('success'))
 <script>
     Swal.fire({
         position: 'center',
         icon: 'success',
         title: 'บันทึกข้อมูลเรียบร้อย',
         showConfirmButton: false,
         timer: 2500
     })
 </script>
 @endif

 @if (session('update'))
 <script>
             Swal.fire({
     position: 'center',
     icon: 'success',
     title: 'แก้ไขข้อมูลเรียบร้อยแล้ว',
     showConfirmButton: false,
     timer: 2000
   })
 </script>
       @endif
 <div class="container-fluid">

    <div class="row pt-4 pl-4 pr-4">
      <!-- left column -->
      <div class="col-md-12">

 <div class="card card-bg-purple ">
    <div class="card-header bg-purple">
      <h3>Products Type</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form action="{{route('createtype')}}" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <input type="text" class="form-control" id="text" placeholder="Products Type" name="typename">
        @error('typename')
            <span class="text-danger">{{$message}}</span>
        @enderror
          </div>

      <div>
        <button type="submit" class="btn bg-purple">Submit</button>
      </div>

    </form>

  </div>
</div>
</div>
</div>

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <div class="card-body">
                <table class="table">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead class="bg-purple">
                     <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Type Name</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">Action</th>
                     </tr>
                    </thead>

        <tbody>
          @foreach ($Products_type as $type)
            <tr>
                <th scope="row">{{$type->id_type}}</th>
                <td>{{$type->typename}}</td>
                <td>{{$type->created_at}}</td>
                <td>{{$type->updated_at}}</td>

                <td>
                    <a href="{{url('admin/product_type/Edit/'.$type->id_type)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('admin/product_type/Delete/'.$type->id_type)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


 @endsection

