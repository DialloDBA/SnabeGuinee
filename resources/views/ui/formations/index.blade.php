@extends('inc.ui.app')
@section('content')


<div class="page-content-wrapper py-3">
    <!-- Element Heading -->
    <div class="container">
        <div class="breadcrumb-wrapper breadcrumb-one mb-3">
            <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-4 px-1">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Elements</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Breadcrumb</li>
                </ol>
            </nav>
            </div>
        </div>
        <div class="element-heading">
            <h6>Timeline</h6>
        </div>
    </div>

    <div class="container">
      <!-- Timeline Content -->
      <div class="card timeline-card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="timeline-text mb-2">
              <span class="badge mb-2 rounded-pill">12 Nov 2022</span>
              <h6>Improved Security</h6>
            </div>
            <div class="timeline-icon mb-2">
              <i class="bi bi-shield-lock h1 mb-0"></i>
            </div>
          </div>
          <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <div class="timeline-tags">
            <span class="badge fw-normal bg-primary">#Bug</span>
            <span class="badge fw-normal bg-primary">#Security</span>
            <span class="badge fw-normal bg-primary">#Improved</span>
          </div>
        </div>
      </div>

      <!-- Timeline Content -->
      <div class="card timeline-card bg-warning">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="timeline-text mb-2">
              <span class="badge mb-2 rounded-pill">21 Sep 2022</span>
              <h6>Winning Award</h6>
            </div>
            <div class="timeline-icon mb-2">
              <i class="bi bi-award h1 mb-0"></i>
            </div>
          </div>
          <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <div class="timeline-tags">
            <span class="badge fw-normal bg-primary">#Award</span>
            <span class="badge fw-normal bg-primary">#Honor</span>
          </div>
        </div>
      </div>

      <!-- Timeline Content -->
      <div class="card timeline-card bg-info">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div class="timeline-text mb-2">
              <span class="badge mb-2 rounded-pill">12 April 21</span>
              <h6>Reach 500 Sales</h6>
            </div>
            <div class="timeline-icon mb-2">
              <i class="bi bi-emoji-smile h1 mb-0"></i>
            </div>
          </div>
          <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <div class="timeline-tags">
            <span class="badge fw-normal bg-primary">#Achieve</span>
          </div>
        </div>
      </div>

      <!-- Timeline Content -->
      <div class="card timeline-card bg-success">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div class="timeline-text mb-2">
              <span class="badge mb-2 rounded-pill">17 Nov 2022</span>
              <h6>Added Ecommerce Pages</h6>
            </div>
            <div class="timeline-icon mb-2">
              <i class="bi bi-basket h1 mb-0"></i>
            </div>
          </div>
          <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <div class="timeline-tags">
            <span class="badge fw-normal bg-primary">#Ecommerce</span>
            <span class="badge fw-normal bg-primary">#Checkout</span>
            <span class="badge fw-normal bg-primary">#Cart</span>
          </div>
        </div>
      </div>

      <!-- Timeline Content -->
      <div class="card timeline-card bg-dark">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div class="timeline-text mb-2">
              <span class="badge mb-2 rounded-pill">26 Oct 2022</span>
              <h6>Updated 1.2.0</h6>
            </div>
            <div class="timeline-icon mb-2">
              <i class="bi bi-bug h1 mb-0"></i>
            </div>
          </div>
          <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <div class="timeline-tags">
            <span class="badge fw-normal bg-primary">#Bug fixed</span>
            <span class="badge fw-normal bg-primary">#New pages</span>
          </div>
        </div>
      </div>

      <!-- Timeline Content -->
      <div class="card timeline-card bg-danger">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div class="timeline-text mb-2">
              <span class="badge mb-2 rounded-pill">12 Oct 2022</span>
              <h6>Initial Release</h6>
            </div>
            <div class="timeline-icon mb-2">
              <i class="bi bi-flower3 h1 mb-0"></i>
            </div>
          </div>
          <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <div class="timeline-tags">
            <span class="badge fw-normal bg-primary">#New Release</span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection