@extends('layouts.master')
@section('title', 'Admin Control Panel')

@section('content')
<div class="container" style="height:150px;"></div>
	<div class="container">
		<div class="row banner">
			<div class="col-md-12">
				<div class="list-group">
					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-social-person"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-social-info"></i></div>
							<h4 class="list-group-item-heading">Manage User</h4>
							<a href="/admin/users" class="btn btn-default btn-raised">All Users</a>
						</div>
					</div>
					<div class="list-group-separator"></div>
						<div class="list-group-item">
							<div class="row-action-primary">
								<i class="mdi-social-group"></i>
							</div>
							<div class="row-content">
								<div class="action-secondary"><i class="mdi-material-info"></i></div>
								<h4 class="list-group-item-heading">Manage Roles</h4>
								<a href="/admin/roles" class="btn btn-default btn-raised">All Roles</a>
								<a href="/admin/roles/create" class="btn btn-primary btn-raised">Create A Role</a>
							</div>
						</div>
					<div class="list-group-separator"></div>
						<div class="list-group-item">
							<div class="row-action-primary">
								<i class="mdi-editor-border-color"></i>
							</div>
							<div class="row-content">
								<div class="action-secondary"><i class="mdi-material-info"></i></div>
								<h4 class="list-group-item-heading">Manage Posts</h4>
								<a href="/admin/post" class="btn btn-default btn-raised">All Posts</a>
								<a href="/admin/post/create" class="btn btn-primary btn-raised">Create A Post</a>
							</div>
						</div>
					<div class="list-group-separator"></div>

					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-file-folder"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-material-info"></i></div>
							<h4 class="list-group-item-heading">Manage Categories</h4>
							<a href="/admin/categories" class="btn btn-default btn-raised">All Categories</a>
							<a href="/admin/categories/create" class="btn btn-primary btn-raised">New Category</a>
						</div>
					</div>
					<div class="list-group-separator"></div>

					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-file-folder"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-material-info"></i></div>
							<h4 class="list-group-item-heading">Manage Tags</h4>
							<a href="/admin/tag" class="btn btn-default btn-raised">All Tags</a>
							<a href="/admin/tag/create" class="btn btn-primary btn-raised">New Tag</a>
						</div>
					</div>
					<div class="list-group-separator"></div>

					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-file-folder"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-material-info"></i></div>
							<h4 class="list-group-item-heading">Manage Stewards</h4>
							<a href="/admin/steward" class="btn btn-default btn-raised">All Stewards</a>
							<a href="/admin/steward/create" class="btn btn-primary btn-raised">New Steward</a>
						</div>
					</div>
					<div class="list-group-separator"></div>

					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-file-folder"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-material-info"></i></div>
							<h4 class="list-group-item-heading">Manage Messages</h4>
							<a href="/admin/message" class="btn btn-default btn-raised">All Messages</a>
						</div>
					</div>
					<div class="list-group-separator"></div>



					<div class="list-group-item">
						<div class="row-action-primary">
							<i class="mdi-file-folder"></i>
						</div>
						<div class="row-content">
							<div class="action-secondary"><i class="mdi-material-info"></i></div>
							<h4 class="list-group-item-heading">Manage Uploads</h4>
							<a href="/admin/upload" class="btn btn-default btn-raised">All Uploads</a>
						</div>
					</div>
					<div class="list-group-separator"></div>
				</div>
			</div>
		</div>
	</div>
@endsection