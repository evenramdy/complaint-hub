@extends('layouts.master')

@section('title')
	Dashboard
@stop

@section('content')
	<!--breadcrumbs start-->
	<div id="breadcrumbs-wrapper" class=" grey lighten-3">
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12">
					<h5 class="breadcrumbs-title">Landing page</h5>
					<ol class="breadcrumb">
						<li class="active">Dashboard</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!--breadcrumbs end-->

	<!--start container-->
	<div class="container">
		<div class="section">
			<p class="caption">Here will be our dashboard page. I'm working on it.</p>
			<div class="divider"></div>
			<!--card widgets start-->
            <div id="card-widgets">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <ul id="task-card" class="collection with-header">
                            <li class="collection-header cyan">
                                <h4 class="task-card-title">Page feature</h4>
                                <p class="task-card-date">@Created on February 24, 2016</p>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task1" />
                                <label for="task1">Chart for complaints.</label>
                                <span class="task-cat teal">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task2" />
                                <label for="task2">Total users.</label>
                                <span class="task-cat teal">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task3" />
                                <label for="task3">Total complaints.</label>
                                <span class="task-cat teal">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task4" />
                                <label for="task4">Total complaints this month.</label>
                                <span class="task-cat teal">Widget</span>
                            </li>
                            <li class="collection-item dismissable">
                                <input type="checkbox" id="task5" />
                                <label for="task5">List of latest complaints diplayed with data-table.</label>
                                <span class="task-cat teal">Widget</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!--end container-->
@stop