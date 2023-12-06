@extends('backend.ggnbadmin')
@section('backend')
@section('title')
About Us 
@endsection

<div class="pagetitle">
    <h1>View Blog</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Blog</li>
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
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="15%"><img src="#" style="width: 100px; height: 100px;"></td>  
                                <td>9853</td>
                                <td>Ucluelet</td>
                                <td>2007/01/11</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" title="Edit Data">
                                        Edit 
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Zelenia Roman</td>
                                <td>7516</td>
                                <td>Redwater</td>
                                <td>2012/03/03</td>
                                <td>31%</td>
                            </tr>
                            <tr>
                                <td>Alisa Horn</td>
                                <td>9853</td>
                                <td>Ucluelet</td>
                                <td>2007/01/11</td>
                                <td>39%</td>
                            </tr>
                            <tr>
                                <td>Zelenia Roman</td>
                                <td>7516</td>
                                <td>Redwater</td>
                                <td>2012/03/03</td>
                                <td>31%</td>
                            </tr>
                            <tr>
                                <td>Alisa Horn</td>
                                <td>9853</td>
                                <td>Ucluelet</td>
                                <td>2007/01/11</td>
                                <td>39%</td>
                            </tr>
                            <tr>
                                <td>Zelenia Roman</td>
                                <td>7516</td>
                                <td>Redwater</td>
                                <td>2012/03/03</td>
                                <td>31%</td>
                            </tr>
                            <tr>
                                <td>Alisa Horn</td>
                                <td>9853</td>
                                <td>Ucluelet</td>
                                <td>2007/01/11</td>
                                <td>39%</td>
                            </tr>
                            <tr>
                                <td>Zelenia Roman</td>
                                <td>7516</td>
                                <td>Redwater</td>
                                <td>2012/03/03</td>
                                <td>31%</td>
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