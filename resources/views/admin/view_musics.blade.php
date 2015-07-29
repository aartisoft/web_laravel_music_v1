@extends('admin.widget')

@section('content')
    <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="#">Home</a>

                <span class="divider">
                    <i class="icon-angle-right arrow-icon"></i>
                </span>
                </li>
                <li class="active">Widgets</li>
            </ul>
            <!--.breadcrumb-->

            <div class="nav-search" id="nav-search">
                <form class="form-search"/>
                <span class="input-icon">
                    <input type="text" placeholder="Search ..." class="input-small nav-search-input"
                           id="nav-search-input" autocomplete="off"/>
                    <i class="icon-search nav-search-icon"></i>
                </span>
                </form>
            </div>
            <!--#nav-search-->
        </div>

        <div class="page-content">
            <div class="page-header position-relative">
                <h1>
                    Create Form
                    <small>
                        <i class="icon-double-angle-right"></i>
                        Create sub category
                    </small>
                </h1>
            </div>
            <!--/.page-header-->

            <div class="row-fluid">
                <div class="span12">
                    <div class="row-fluid">
                        <h3 class="header smaller lighter blue">Musics</h3>

                        <div class="table-header">
                            Results for "Latest Registered Domains"
                        </div>

                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th class="center">
                                    <label>
                                        <input type="checkbox"/>
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>Language</th>
                                <th>Singer</th>
                                <th class="hidden-480">Actor</th>

                                <th class="hidden-phone">
                                    <i class="icon-time bigger-110 hidden-phone"></i>
                                    Movie
                                </th>
                                <th class="hidden-480">Status</th>

                                <th></th>
                            </tr>
                            </thead>

                            <tbody>

                            @foreach ($value as $music)
                                <tr>
                                    <td class="center">
                                        <label>
                                            <input type="checkbox"/>
                                            <span class="lbl"></span>
                                        </label>
                                    </td>

                                    <td>
                                        <a href="#">{{ $music->language }}</a>
                                    </td>
                                    <td>{{ $music->singer }}</td>
                                    <td class="hidden-480">{{ $music->actor }}</td>
                                    <td class="hidden-phone">{{ $music->movie }}</td>

                                    <td class="hidden-480">
                                        <span class="label label-success">Active</span>
                                    </td>

                                    <td class="td-actions">
                                        <div class="hidden-phone visible-desktop action-buttons">
                                            <a class="blue" href="#">
                                                <i class="icon-zoom-in bigger-130"></i>
                                            </a>

                                            <a class="green" href="#">
                                                <i class="icon-pencil bigger-130"></i>
                                            </a>

                                            <a class="red" href="#">
                                                <i class="icon-trash bigger-130"></i>
                                            </a>
                                        </div>

                                        <div class="hidden-desktop visible-phone">
                                            <div class="inline position-relative">
                                                <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                        data-toggle="dropdown">
                                                    <i class="icon-caret-down icon-only bigger-120"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="icon-zoom-in bigger-120"></i>
																	</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="icon-edit bigger-120"></i>
																	</span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="icon-trash bigger-120"></i>
																	</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                <td class="center">
                                    <label>
                                        <input type="checkbox"/>
                                        <span class="lbl"></span>
                                    </label>
                                </td>

                                <td>
                                    <a href="#">once.com</a>
                                </td>
                                <td>$20</td>
                                <td class="hidden-480">1,400</td>
                                <td class="hidden-phone">Apr 04</td>

                                <td class="hidden-480">
                                    <span class="label label-info arrowed arrowed-righ">Sold</span>
                                </td>

                                <td class="td-actions">
                                    <div class="hidden-phone visible-desktop action-buttons">
                                        <a class="blue" href="#">
                                            <i class="icon-zoom-in bigger-130"></i>
                                        </a>

                                        <a class="green" href="#">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>

                                        <a class="red" href="#">
                                            <i class="icon-trash bigger-130"></i>
                                        </a>
                                    </div>

                                    <div class="hidden-desktop visible-phone">
                                        <div class="inline position-relative">
                                            <button class="btn btn-minier btn-yellow dropdown-toggle"
                                                    data-toggle="dropdown">
                                                <i class="icon-caret-down icon-only bigger-120"></i>
                                            </button>

                                            <ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																	<span class="blue">
																		<i class="icon-zoom-in bigger-120"></i>
																	</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="icon-edit bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                        <span class="red">
                                                            <i class="icon-trash bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection