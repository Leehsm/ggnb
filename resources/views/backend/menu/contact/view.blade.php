@extends('backend.ggnbadmin')
@section('backend')
@section('title')
About Us 
@endsection

<div class="pagetitle">
    <h1>View Contact</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Contact</li>
            <li class="breadcrumb-item active">View</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


  <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> --}}
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Map</th>
                                <th>Location</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alisa Horn</td>
                                <td>9853</td>
                                <td>Ucluelet</td>
                                <td>2007/01/11</td>
                                <td>39%</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" title="Edit Data">
                                        Edit 
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection