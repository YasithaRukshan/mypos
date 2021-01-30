@extends('AdminArea.Layouts.app')
@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">products</h3>
                            <div class="nk-block-des text-soft">
                                <p>Products / All</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                    data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        {{-- <li><a href="#" class="btn btn-white btn-outline-light"><em
                                                    class="icon ni ni-download-cloud"></em><span>Export</span></a></li> --}}
                                        <li class="nk-block-tools-opt">
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary"
                                                    data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Add product</span></a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .toggle-wrap -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init nk-tb-list nk-tb-ulist">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                <label class="custom-control-label" for="uid"></label>
                                            </div>
                                        </th>
                                        <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Balance</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Action</span></th>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                <label class="custom-control-label" for="uid1"></label>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col">
                                            <div class="user-card">
                                                <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="tb-lead">Abu Bin Ishtiyak <span
                                                            class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>info@softnio.com</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                            <span class="tb-amount">35040.34 <span class="currency">USD</span></span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span>+811 847-4958</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                            <ul class="list-status">
                                                <li><em class="icon text-success ni ni-check-circle"></em>
                                                    <span>Email</span></li>
                                                <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>
                                            </ul>
                                        </td>
                                        <td class="nk-tb-col tb-col-lg">
                                            <span>05 Oct 2019</span>
                                        </td>
                                        <td class="nk-tb-col tb-col-md">
                                            <span class="tb-status text-success">Active</span>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">

                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick
                                                                    View</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-repeat"></em><span>Transaction</span></a>
                                                        </li>
                                                        <li><a href="#"><em
                                                                    class="icon ni ni-activity-round"></em><span>Activities</span></a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    <!-- .nk-tb-item  -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- .card-preview -->
                </div>
                <!-- nk-block -->               <!-- .components-preview -->
            </div>
        </div>
    </div>
    @endsection
