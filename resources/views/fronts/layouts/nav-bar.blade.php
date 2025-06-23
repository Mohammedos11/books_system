  <div id="header-wrap">

      <div class="top-content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-6">

                      <div class="col-md-2">
                          <div class="main-logo">
                              <a href="index.html"><img src="{{ asset('front_end/images/main-logo.png') }}"
                                      alt="logo"></a>
                          </div>

                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="right-element">

                          <div class="dropdown">
                              <a class="cart for-buy dropdown-toggle text-decoration-none" data-bs-toggle="dropdown"
                                  href="#" role="button" aria-expanded="false">
                                  <i class="icon icon-clipboard"></i>
                                  <span>
                                      Cart: ({{ session('cart_total_items', 0) }} ${{ session('cart_total_price', 0) }})
                                  </span>
                              </a>

                              <ul class="dropdown-menu p-3" style="min-width: 300px;">
                                  @php
                                      $cart = session('cart', []);
                                  @endphp

                                  @if (count($cart) > 0)
                                      @foreach ($cart as $item)
                                          <li class="mb-2">
                                              <strong>{{ $item['name'] }}</strong><br>
                                              {{ $item['quantity'] }} x ${{ $item['price'] }} = ${{ $item['subtotal'] }}
                                          </li>
                                      @endforeach

                                      <li>
                                          <hr class="dropdown-divider">
                                      </li>
                                      <li><strong>Total: ${{ session('cart_total_price', 0) }}</strong></li>
                                      <li class="mt-2">
                                          {{-- <a href="{{ route('cart.index') }}" class="btn btn-sm btn-primary w-100">View
                                              Full Cart</a> --}}
                                      </li>
                                  @else
                                      <li>سلتك فارغة.</li>
                                  @endif
                              </ul>
                          </div>

                          <div class="action-menu">

                              <div class="search-bar">
                                  <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                      <i class="icon icon-search"></i>
                                  </a>
                                  <form action="{{ route('books.search') }}" method="GET" class="search-box">
                                      <input class="search-field text search-input" name="query"
                                          placeholder="Search by book name" type="search">
                                  </form>
                              </div>
                          </div>

                      </div><!--top-right-->
                  </div>

              </div>
          </div>
      </div><!--top-content-->
      <header id="header">
          <div class="container-fluid">
              <div class="row justify-content-end"> <!-- Push content to the right -->

                  <div class="col-md-10">
                      <nav id="navbar">
                          <div class="main-menu stellarnav d-flex justify-content-end">
                              <ul class="menu-list d-flex gap-4">
                                  <li class="menu-item active"><a href="{{ route('home') }}">Home</a></li>
                                  <li class="menu-item"><a href="#featured-books" class="nav-link">Featured</a></li>
                                  <li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>
                                  <li class="menu-item"><a href="#special-offer" class="nav-link">Offer</a></li>
                                  <li class="nav-item dropdown">
                                      @if (auth()->check() && in_array(auth()->user()->role, ['user', 'admin']))
                                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                                              role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              {{ auth()->user()->name }}
                                          </a>
                                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                              <li>
                                                  <a href="{{ route('user_logout') }}"
                                                      style="color: red;text-align: center"><i
                                                          class="fas fa-sign-out-alt"></i>
                                                      Logout</a>
                                              </li>
                                          </ul>
                                      @else
                                          <a href="{{ route('login') }}" class="nav-link">Login </a>
                                      @endif
                                  </li>



                              </ul>

                              <div class="hamburger ms-3">
                                  <span class="bar"></span>
                                  <span class="bar"></span>
                                  <span class="bar"></span>
                              </div>
                          </div>
                      </nav>
                  </div>

              </div>
          </div>
      </header>


  </div><!--header-wrap-->
