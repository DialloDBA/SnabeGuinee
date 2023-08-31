@extends('inc.ui.app')
@section('content')

<div class="page-content-wrapper py-3">

    <!-- Pagination-->
    <div class="shop-pagination pb-3">
      <div class="container">
        <div class="card">
          <div class="card-body p-2">
            <div class="d-flex align-items-center justify-content-between"><small class="ms-1">Showing 6 of 31</small>
              <form action="#">
                <select class="pe-4 form-select form-select-sm" id="defaultSelectSm" name="defaultSelectSm"
                  aria-label="Default select example">
                  <option value="1" selected>Sort by Newest</option>
                  <option value="2">Sort by Older</option>
                  <option value="3">Sort by Ratings</option>
                  <option value="4">Sort by Sales</option>
                </select>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Top Products-->
    <div class="top-products-area product-list-wrap">
      <div class="container">
        <div class="row g-3">

          <!-- Single Top Product Card -->
          <div class="col-12">
            <div class="card single-product-card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="card-side-img">
                    <!-- Product Thumbnail -->
                    <a class="product-thumbnail d-block" href="shop-details.html">
                      <img src="img/bg-img/p1.jpg" alt="">
                      <!-- Badge -->
                      <span class="badge bg-primary">Sale</span>
                    </a>
                  </div>

                  <div class="card-content px-4 py-2">
                    <!-- Product Title -->
                    <a class="product-title d-block text-truncate mt-0" href="shop-details.html">Wooden Tool</a>
                    <!-- Product Price -->
                    <p class="sale-price">$9.89<span>$13.42</span></p>
                    <!-- Add To Cart Button -->
                    <a class="btn btn-primary rounded-pill btn-sm" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single Top Product Card -->
          <div class="col-12">
            <div class="card single-product-card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="card-side-img">
                    <!-- Product Thumbnail -->
                    <a class="product-thumbnail d-block" href="shop-details.html">
                      <img src="img/bg-img/p2.jpg" alt="">
                      <!-- Badge -->
                      <span class="badge bg-primary">Sale</span>
                    </a>
                  </div>

                  <div class="card-content px-4 py-2">
                    <!-- Product Title -->
                    <a class="product-title d-block text-truncate mt-0" href="shop-details.html">Atoms Musk</a>
                    <!-- Product Price -->
                    <p class="sale-price">$3.36<span>$5.99</span></p>
                    <!-- Add To Cart Button -->
                    <a class="btn btn-primary rounded-pill btn-sm" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single Top Product Card -->
          <div class="col-12">
            <div class="card single-product-card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="card-side-img">
                    <!-- Product Thumbnail -->
                    <a class="product-thumbnail d-block" href="shop-details.html">
                      <img src="img/bg-img/p3.jpg" alt="">
                      <!-- Badge -->
                      <span class="badge bg-primary">Sale</span>
                    </a>
                  </div>

                  <div class="card-content px-4 py-2">
                    <!-- Product Title -->
                    <a class="product-title d-block text-truncate mt-0" href="shop-details.html">Black T-shirt</a>
                    <!-- Product Price -->
                    <p class="sale-price">$10.99<span>$12</span></p>
                    <!-- Add To Cart Button -->
                    <a class="btn btn-primary rounded-pill btn-sm" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single Top Product Card -->
          <div class="col-12">
            <div class="card single-product-card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="card-side-img">
                    <!-- Product Thumbnail -->
                    <a class="product-thumbnail d-block" href="shop-details.html">
                      <img src="img/bg-img/p4.jpg" alt="">
                      <!-- Badge -->
                      <span class="badge bg-primary">Sale</span>
                    </a>
                  </div>

                  <div class="card-content px-4 py-2">
                    <!-- Product Title -->
                    <a class="product-title d-block text-truncate mt-0" href="shop-details.html">Headphone</a>
                    <!-- Product Price -->
                    <p class="sale-price">$2.99<span>$4</span></p>
                    <!-- Add To Cart Button -->
                    <a class="btn btn-danger rounded-pill btn-sm" href="#">Out of Stock</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single Top Product Card -->
          <div class="col-12">
            <div class="card single-product-card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="card-side-img">
                    <!-- Product Thumbnail -->
                    <a class="product-thumbnail d-block" href="shop-details.html">
                      <img src="img/bg-img/p5.jpg" alt="">
                      <!-- Badge -->
                      <span class="badge bg-primary">Sale</span>
                    </a>
                  </div>

                  <div class="card-content px-4 py-2">
                    <!-- Product Title -->
                    <a class="product-title d-block text-truncate mt-0" href="shop-details.html">Crispy Biscuit</a>
                    <!-- Product Price -->
                    <p class="sale-price">$0.78<span>$1.12</span></p>
                    <!-- Add To Cart Button -->
                    <a class="btn btn-primary rounded-pill btn-sm" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Single Top Product Card -->
          <div class="col-12">
            <div class="card single-product-card">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="card-side-img">
                    <!-- Product Thumbnail-->
                    <a class="product-thumbnail d-block" href="shop-details.html">
                      <img src="img/bg-img/p6.jpg" alt="">
                      <!-- Badge-->
                      <span class="badge bg-primary">Sale</span>
                    </a>
                  </div>
                  <div class="card-content px-4 py-2">
                    <!-- Product Title-->
                    <a class="product-title d-block text-truncate mt-0" href="shop-details.html">Sports Shoes</a>
                    <!-- Product Price-->
                    <p class="sale-price">$110<span>$128</span></p>
                    <!-- Add To Cart Button-->
                    <a class="btn btn-primary rounded-pill btn-sm" href="#">Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pagination-->
    <div class="shop-pagination pt-3">
      <div class="container">
        <div class="card">
          <div class="card-body py-3">
            <nav aria-label="Page navigation example">
              <ul class="pagination pagination-two justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <i class="bi bi-chevron-left"></i>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">...</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">9</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="bi bi-chevron-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection