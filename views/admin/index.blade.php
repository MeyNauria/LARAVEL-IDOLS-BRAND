@extends('layouts.admin')
@section('content')
<div class="main-content-inner">

<div class="main-content-wrap">
    <div class="tf-section-2 mb-40">
        <div class="flex gap30 flex-wrap-mobile">
            
            <div class="w-half">
                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap50">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Total Orders</div>
                                <h4>0</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-half">
                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap50">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Total Amount</div>
                                <h4>0</h4>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- pending-->
            </div>

            
            <div class="w-half">
            <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap50">
                            <div class="image ic-bg">
                                <i class="icon-shopping-bag"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Delivered Orders</div>
                                <h4>0</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-half">
                <div class="wg-chart-default mb-20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap50">
                            <div class="image ic-bg">
                                <i class="icon-dollar-sign"></i>
                            </div>
                            <div>
                                <div class="body-text mb-2">Delivered Orders Amount</div>
                                <h4>0.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <!-- canceled -->

            

        </div>

        <!-- earning venue-->
    </div>
    <div class="tf-section mb-30">

        <div class="wg-box">
            <div class="flex items-center justify-between">
                <h5>Recent orders</h5>
                <div class="dropdown default">
                    <a class="btn btn-secondary dropdown-toggle" href="#">
                        <span class="view-all">View all</span>
                    </a>
                </div>
            </div>
            <div class="wg-table table-all-user">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 80px">OrderNo</th>
                                <th>Name</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Subtotal</th>
                                <th class="text-center">Tax</th>
                                <th class="text-center">Total</th>

                                <th class="text-center">Status</th>
                                <th class="text-center">Order Date</th>
                                <th class="text-center">Total Items</th>
                                <th class="text-center">Delivered On</th>
                                <th></th>
                            </tr>
                        </thead>
                        <!-- orders table-->
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection