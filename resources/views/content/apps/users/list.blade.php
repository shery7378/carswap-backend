@extends('layouts/contentNavbarLayout')

@section('title', 'Users List')

@section('content')
  <!-- Content wrapper -->
  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
      <div class="row">
        <!-- Users Management Card -->
        <div class="col-lg-12">
          <!-- Statistics Cards -->
          <div class="row mb-4">
            <div class="col-md-3">
              <div class="card bg-primary text-white">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="card-title">Total Users</h5>
                      <h3>1,234</h3>
                    </div>
                    <div class="avatar avatar-xl">
                      <i class="bx bx-user-plus bx-tada"></i>
                    </div>
                  </div>
                  <small>+15% from last month</small>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card bg-success text-white">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="card-title">Active</h5>
                      <h3>1,089</h3>
                    </div>
                    <div class="avatar avatar-xl">
                      <i class="bx bx-check-circle bx-tada"></i>
                    </div>
                  </div>
                  <small>88.2% active rate</small>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card bg-warning text-white">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="card-title">New This Month</h5>
                      <h3>67</h3>
                    </div>
                    <div class="avatar avatar-xl">
                      <i class="bx bx-user-plus bx-tada"></i>
                    </div>
                  </div>
                  <small>Recent signups</small>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card bg-danger text-white">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <h5 class="card-title">Inactive</h5>
                      <h3>145</h3>
                    </div>
                    <div class="avatar avatar-xl">
                      <i class="bx bx-user-x bx-tada"></i>
                    </div>
                  </div>
                  <small>11.8% inactive</small>
                </div>
              </div>
            </div>
          </div>

          <!-- Users Table -->
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title mb-0">Users Management</h4>
              <div class="d-flex gap-2">
                <div class="input-group" style="width: 300px;">
                  <input type="text" class="form-control" placeholder="Search users...">
                  <button class="btn btn-outline-primary" type="button">
                    <i class="bx bx-search"></i>
                  </button>
                </div>
                <button class="btn btn-primary">
                  <i class="bx bx-plus me-1"></i> Add User
                </button>
              </div>
            </div>
            <div class="card-body">
              <!-- Filter Tabs -->
              <ul class="nav nav-tabs mb-4" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab">
                    All (1,234)
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#active" role="tab">
                    Active (1,089)
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#inactive" role="tab">
                    Inactive (145)
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#banned" role="tab">
                    Banned (12)
                  </a>
                </li>
              </ul>

              <!-- Tab Content -->
              <div class="tab-content">
                <div class="tab-pane active" id="all" role="tabpanel">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                            </div>
                          </th>
                          <th>User</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Joined</th>
                          <th>Last Active</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-2">
                                <img src="https://picsum.photos/seed/user1/40/40.jpg" alt="User"
                                  class="rounded-circle">
                              </div>
                              <div>
                                <div class="fw-medium">John Doe</div>
                                <small class="text-muted">ID: #USR001</small>
                              </div>
                            </div>
                          </td>
                          <td>john.doe@example.com</td>
                          <td><span class="badge bg-label-primary">Administrator</span></td>
                          <td><span class="badge bg-success">Active</span></td>
                          <td>2024-01-15</td>
                          <td>2 hours ago</td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bx bx-show me-2"></i>View</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bx bx-lock me-2"></i>Reset
                                    Password</a></li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-warning" href="#"><i
                                      class="bx bx-pause me-2"></i>Suspend</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i
                                      class="bx bx-x-circle me-2"></i>Ban</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-2">
                                <img src="https://picsum.photos/seed/user2/40/40.jpg" alt="User"
                                  class="rounded-circle">
                              </div>
                              <div>
                                <div class="fw-medium">Jane Smith</div>
                                <small class="text-muted">ID: #USR002</small>
                              </div>
                            </div>
                          </td>
                          <td>jane.smith@example.com</td>
                          <td><span class="badge bg-label-success">Manager</span></td>
                          <td><span class="badge bg-success">Active</span></td>
                          <td>2024-01-10</td>
                          <td>1 day ago</td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bx bx-show me-2"></i>View</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bx bx-lock me-2"></i>Reset
                                    Password</a></li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-warning" href="#"><i
                                      class="bx bx-pause me-2"></i>Suspend</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i
                                      class="bx bx-x-circle me-2"></i>Ban</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-2">
                                <img src="https://picsum.photos/seed/user3/40/40.jpg" alt="User"
                                  class="rounded-circle">
                              </div>
                              <div>
                                <div class="fw-medium">Mike Johnson</div>
                                <small class="text-muted">ID: #USR003</small>
                              </div>
                            </div>
                          </td>
                          <td>mike.johnson@example.com</td>
                          <td><span class="badge bg-label-info">Customer</span></td>
                          <td><span class="badge bg-warning">Inactive</span></td>
                          <td>2024-01-05</td>
                          <td>1 week ago</td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bx bx-show me-2"></i>View</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bx bx-lock me-2"></i>Reset
                                    Password</a></li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-success" href="#"><i
                                      class="bx bx-play me-2"></i>Activate</a></li>
                                <li><a class="dropdown-item text-danger" href="#"><i
                                      class="bx bx-x-circle me-2"></i>Ban</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                            </div>
                          </td>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="avatar avatar-sm me-2">
                                <img src="https://picsum.photos/seed/user4/40/40.jpg" alt="User"
                                  class="rounded-circle">
                              </div>
                              <div>
                                <div class="fw-medium">Sarah Wilson</div>
                                <small class="text-muted">ID: #USR004</small>
                              </div>
                            </div>
                          </td>
                          <td>sarah.wilson@example.com</td>
                          <td><span class="badge bg-label-info">Customer</span></td>
                          <td><span class="badge bg-danger">Banned</span></td>
                          <td>2023-12-20</td>
                          <td>2 weeks ago</td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bx bx-show me-2"></i>View</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bx bx-edit me-2"></i>Edit</a>
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bx bx-lock me-2"></i>Reset
                                    Password</a></li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-success" href="#"><i
                                      class="bx bx-refresh me-2"></i>Unban</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!-- Pagination -->
                  <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>

                <!-- Other tab contents would go here -->
                <div class="tab-pane" id="active" role="tabpanel">
                  <p class="text-center py-4">Active users content...</p>
                </div>
                <div class="tab-pane" id="inactive" role="tabpanel">
                  <p class="text-center py-4">Inactive users content...</p>
                </div>
                <div class="tab-pane" id="banned" role="tabpanel">
                  <p class="text-center py-4">Banned users content...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
