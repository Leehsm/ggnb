@extends('backend.ggnbadmin')
@section('backend')
@section('title')
About Us 
@endsection
<div class="pagetitle">
    <h1>Add Blog</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Blog</li>
            <li class="breadcrumb-item active">Add</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <!-- General Form Elements -->
                    <form>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="image">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Description" id="description" style="height: 100px;"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Date</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="date">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
