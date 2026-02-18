@extends('layouts/contentNavbarLayout')

@section('title', 'eCommerce Customers')

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">eCommerce /</span> Customers</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Customer List</h5>
      </div>
      <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>Customer</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>Registered</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/avatars/1.png')" alt="Avatar" class="rounded-circle me-3"
                      width="40">
                    <div>
                      <h6 class="mb-0">John Doe</h6>
                      <small class="text-muted">Premium</small>
                    </div>
                  </div>
                </td>
                <td>john.doe@example.com</td>
                <td>+1 234 567 8900</td>
                <td>United States</td>
                <td>Jan 10, 2024</td>
                <td><span class="badge bg-label-success">Active</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-2"></i> View</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/avatars/2.png')" alt="Avatar" class="rounded-circle me-3"
                      width="40">
                    <div>
                      <h6 class="mb-0">Jane Smith</h6>
                      <small class="text-muted">Standard</small>
                    </div>
                  </div>
                </td>
                <td>jane.smith@example.com</td>
                <td>+1 234 567 8901</td>
                <td>Canada</td>
                <td>Jan 12, 2024</td>
                <td><span class="badge bg-label-success">Active</span></td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-2"></i> View</a>
                      <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
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
  <!-- / Content -->
@endsection
