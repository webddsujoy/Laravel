@extends('layouts.master')
@section('title')
    Dashboard - {{ env('APP_NAME') }}
@endsection
@section('content')
<div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <!-- Info boxes -->
              <div class="row">
                <a href="#" class="col-12 col-sm-6 col-md-4">
                  <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-download"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Download Report</span>
                      <span class="info-box-number">
                        01
                      </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
</a>
                <!-- /.col -->
                <a href="#" class="col-12 col-sm-6 col-md-4">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-hdd"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Download Database Backup </span>
                      <span class="info-box-number">41</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
</a>
                <!-- /.col -->
      
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
      
                <a href="#" class="col-12 col-sm-6 col-md-4">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-server"></i></span>
      
                    <div class="info-box-content">
                      <span class="info-box-text">Download Website Data Backup </span>
                      <span class="info-box-number">60</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
</a>
                <!-- /.col -->
            
              </div>
              <!-- /.row -->
      
            
      
              <!-- Main row -->
              <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
             
                  <!-- /.card -->
               
      
                  <!-- TABLE: LATEST ORDERS -->
                  <div class="card">
                    <div class="card-header border-transparent">
                      <h3 class="card-title">Latest Orders</h3>
      
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table m-0">
                          <thead>
                          <tr>
                            <th>Order ID</th>
                            <th>Item</th>
                            <th>Status</th>
                            <th>Popularity</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                            <td>Call of Duty IV</td>
                            <td><span class="badge badge-success">Shipped</span></td>
                            <td>
                              <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                            <td>Samsung Smart TV</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td>
                              <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                            <td>iPhone 6 Plus</td>
                            <td><span class="badge badge-danger">Delivered</span></td>
                            <td>
                              <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                            <td>Samsung Smart TV</td>
                            <td><span class="badge badge-info">Processing</span></td>
                            <td>
                              <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                            <td>Samsung Smart TV</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                            <td>
                              <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                            <td>iPhone 6 Plus</td>
                            <td><span class="badge badge-danger">Delivered</span></td>
                            <td>
                              <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                            <td>Call of Duty IV</td>
                            <td><span class="badge badge-success">Shipped</span></td>
                            <td>
                              <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                            </td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                      <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
      
                <div class="col-md-4">
      
                  <!-- PRODUCT LIST -->
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Recently Added Products</h3>
      
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <ul class="products-list product-list-in-card pl-2 pr-2">
                        <li class="item">
                          <div class="product-img">
                            <img src="{{asset('/assets/admin')}}/dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Samsung TV
                              <span class="badge badge-warning float-right">$1800</span></a>
                            <span class="product-description">
                              Samsung 32" 1080p 60Hz LED Smart HDTV.
                            </span>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="product-img">
                            <img src="{{asset('/assets/admin')}}/dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">Bicycle
                              <span class="badge badge-info float-right">$700</span></a>
                            <span class="product-description">
                              26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                            </span>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="product-img">
                            <img src="{{asset('/assets/admin')}}/dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">
                              Xbox One <span class="badge badge-danger float-right">
                              $350
                            </span>
                            </a>
                            <span class="product-description">
                              Xbox One Console Bundle with Halo Master Chief Collection.
                            </span>
                          </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                          <div class="product-img">
                            <img src="{{asset('/assets/admin')}}/dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                          </div>
                          <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">PlayStation 4
                              <span class="badge badge-success float-right">$399</span></a>
                            <span class="product-description">
                              PlayStation 4 500GB Console (PS4)
                            </span>
                          </div>
                        </li>
                        <!-- /.item -->
                      </ul>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <a href="javascript:void(0)" class="uppercase">View All Products</a>
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!--/. container-fluid -->
          </section>
          <!-- /.content -->
        </div>
@endsection