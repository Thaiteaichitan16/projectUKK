<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Data Buku</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
             
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Perpust Cuk</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="{{url('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Data Perpustakaan</div>
              </a>

              <ul class="menu-sub">
                <!-- <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                  </a>
                </li> -->
                <li class="menu-item active">
                  <a href="{{url('buku')}}" class="menu-link">
                    <div data-i18n="Without navbar">Data Buku</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{url('pasok')}}" class="menu-link">
                    <div data-i18n="Container">Data Pasok</div>
                  </a>
                </li>
                {{-- <li class="menu-item">
                  <a href="{{url('datarelasi')}}" class="menu-link">
                    <div data-i18n="Fluid">Data Kategori Relasi</div>
                  </a>
                </li> --}}
                {{-- <li class="menu-item">
                  <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank">Blank</div>
                  </a>
                </li> --}}
              </ul>
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Data Account Admin</span>
              </li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-dock-top"></i>
                  <div data-i18n="Account Settings">Account Settings</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{url('kasir')}}" class="menu-link">
                      <div data-i18n="Account">Data Kasir</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('tambahkasir')}}" class="menu-link">
                      <div data-i18n="Notifications">Tambah Kasir</div>
                    </a>
                  </li>
                  {{-- <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                      <div data-i18n="Connections">Connections</div>
                    </a>
                  </li> --}}
                </ul>
            </li>
          </ul>
        </aside>
        
            
          

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Data Buku</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <div class="demo-inline-spacing d-flex right-content-end mx-4">
                <!-- Vertically Centered Modal -->
                <div class="col-lg-4 col-md-6">
                  <div class="mt-3">
                    <!-- Button trigger modal -->
                    <button
                      type="button"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#modalCenter"
                    >
                      Tambah
                    </button>

                    <!-- Modal -->
                    <form action="" method="post">
                    @csrf
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="modalCenterTitle">Tambah</h5>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input
                                  type="text"
                                  id="judul"
                                  name="judul"
                                  class="form-control"
                                  {{-- placeholder="Enter Name" --}}
                                />
                              </div>
                            </div>
                              <div class="col mb-3">
                                <label for="penulis" class="form-label">Penulis</label>
                                <input
                                  type="text"
                                  id="penulis"
                                  name="penulis"
                                  class="form-control"
                                  {{-- placeholder="Enter Name" --}}
                                />
                              </div>
                              <div class="col mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input
                                  type="text"
                                  id="penerbit"
                                  name="penerbit"
                                  class="form-control"
                                  {{-- placeholder="Enter Name" --}}
                                />
                              </div>
                           
                            <div class="row g-2">
                              <div class="col mb-0">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                <input
                                  type="text"
                                  id="tahun_terbit"
                                  name="tahun_terbit"
                                  class="form-control"
                                  {{-- placeholder="DD / MM / YY" --}}
                                />
                              </div>
                              <div class="col mb-0">
                                <label for="stok" class="form-label">Stok</label>
                                <input
                                  type="text"
                                  id="stok"
                                  name="stok"
                                  class="form-control"
                                  
                                />
                              </div>
                            </div>
                            <div class="col mb-3">
                              <label for="harga_pokok" class="form-label">Harga Pokok</label>
                              <input
                                type="text"
                                id="harga_pokok"
                                name="harga_pokok"
                                class="form-control"
                                {{-- placeholder="Enter Name" --}}
                              />
                            </div>
                            <div class="col mb-3">
                              <label for="harga_jual" class="form-label">Harga Jual</label>
                              <input
                                type="text"
                                id="harga_jual"
                                name="harga_jual"
                                class="form-control"
                                {{-- placeholder="Enter Name" --}}
                              />
                            </div>
                            <div class="col mb-3">
                              <label for="diskon" class="form-label">Diskon</label>
                              <input
                                type="text"
                                id="diskon"
                                name="diskon"
                                class="form-control"
                                {{-- placeholder="Enter Name" --}}
                              />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                              Close
                            </button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
                
                  {{-- <a href="{{url('tambahbuku')}}"><button type="button" class="btn btn-outline-primary">Tambah</button></a> --}}
                </div>
                <div class=" text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Stok</th>
                        <th>Harga Pokok</th>
                        <th>Harga Jual</th>
                        <th>Diskon</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach ($bukus as $item)
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$item->judul}}</strong></td>
                        <td>{{$item->penulis}}</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            {{$item->penerbit}}
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">{{$item->tahun_terbit}}</span></td>
                        <td>{{$item->stok}}</td>
                        <td>{{$item->harga_pokok}}</td>
                        <td>{{$item->harga_jual}}</td>
                        <td>{{$item->diskon}}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{url('bedit/'.$item->id_buku)}}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="hapus/{{$item->id_buku}}"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                  {{ $bukus->onEachSide(5)->links() }}
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
                <div class="layout-demo-info">
                  <h4>Layout without Navbar</h4>
                  <p>Layout does not contain Navbar component.</p>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Wildan Saputra</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
