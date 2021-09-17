@extends('layouts.board')

@section('breadcrumbs')
    <x-breadcrumbs-board/>
@endsection

@section('cards')
    <x-card-board/>
@endsection
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i>
            Recent Orders</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Product Id</th>
                        <th>Quanlity</th>
                        <th>Price</th>
                        <th>Order Time</th>
                        <th>Customer</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="m-r-10">
                                <img src="https://technext.github.io/concept/assets/images/product-pic.jpg" alt="user" class="rounded" width="45">
                            </div>
                        </td>
                        <td>
                            Product #1
                        </td>
                        <td>
                            id000001
                        </td>
                        <td>
                            20
                        </td>
                        <td>
                            $80
                        </td>
                        <td>
                            27-08-2018 01:22:12
                        </td>
                        <td>
                            Patricia J. King
                        </td>
                        <td>
                            <span class="badge-dot badge-brand mr-1"></span>
                            InTransit
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>
@endsection
