<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Tugas GIS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>

  <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
 integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
 crossorigin=""></script>



  <!-- Favicons -->
  <link href="{{ asset('frontend/img/icon_web.png') }}" rel="icon">
  <link href="{{ asset('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="{{ asset('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap') }}" rel="stylesheet">

  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet ">
  <link href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }} " rel="stylesheet">
  <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">

  

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Krisna Juniartha</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('frontend/img/krisnaa.jpg') }}" alt="Profile" class="rounded-circle img-thumbnail" style="width: 40px; height: 40px;">
            <span class="d-none d-md-block dropdown-toggle ps-2">User</span>
        </a><!-- End Profile Iamge Icon -->
        

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Krisna</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ url('/') }}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>GIS Rumah Sakit</h1>
      <p>by Krisna<span class="typed" data-typed-items="K, R, I, S, N, A, Krisna"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id = "home" class = "home">
      <div class = "grid">
          <div class = "map1">
            <div class="section-title">
              <h2>Leaflet Map</h2>
            </div>
            <div id="mapid"></div>
            <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.min.js"></script>


            <script>
              // Menampilkan peta
              var mymap = L.map('mapid').setView([-8.790008703311203, 115.16780687368956], 13);

              // Map layer
              
              var mapbiasa = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
              maxZoom: 18,
              }).addTo(mymap);

              //google map tile
              googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                      maxZoom: 20,
                      subdomains:['mt0','mt1','mt2','mt3']
              });
            
              googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
                      maxZoom: 20,
                      subdomains:['mt0','mt1','mt2','mt3']
              });
      
              googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
                      maxZoom: 20,
                      subdomains:['mt0','mt1','mt2','mt3']
              });

              var Stadia_AlidadeSmoothDark = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.{ext}', {
                  minZoom: 0,
                  maxZoom: 20,
                  attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                  ext: 'png'
                });


              //Layer Control
              var baseLayers = {
                  "mapbiasa": mapbiasa,
                  "googleStreets":googleSat,
                  "googleSat":googleSat,
                  "googleTerrain":googleTerrain,
                  "Stadia_AlidadeSmoothDark":Stadia_AlidadeSmoothDark
              };

              L.control.layers(baseLayers).addTo(mymap);

                  var markers = [];
              var isOnDrag = false;
              var myIcon = L.icon({
                iconUrl: 'frontend/img/icon_web.png',
                iconSize: [35, 40],
                iconAnchor: [20, 40],
              });

              // Format popup content
              formatContent = function(lat, lng, index) {
                return `
                    <div class="wrapper">
                        <div class="row">
                            <div class="cell merged" style="text-align:center">Marker [ ${index+1} ]</div>
                        </div>
                        <div class="row">
                            <div class="col">Latitude</div>
                            <div class="col2">${lat}</div>
                        </div>
                        <div class="row">
                            <div class="col">Longitude</div>
                            <div class="col2">${lng}</div>
                        </div>

                    </div>
                `;
              }

              addMarker = function(latlng, index) {

                // Menambahkan marker
                var marker = L.marker(latlng, {
                  icon: myIcon,
                  draggable: true
                }).addTo(mymap);

                // Membuat popup baru
                var popup = L.popup({
                    offset: [0, -30]
                  })
                  .setLatLng(latlng);

                // Binding popup ke marker
                marker.bindPopup(popup);

                // Menambahkan event listener pada marker
                marker.on('click', function() {
                  popup.setLatLng(marker.getLatLng()),
                    popup.setContent(formatContent(marker.getLatLng().lat, marker.getLatLng().lng, index));
                });

                marker.on('dragstart', function(event) {
                  isOnDrag = true;
                });

                // Menambahkan event listener pada marker
                marker.on('drag', function(event) {
                  popup.setLatLng(marker.getLatLng()),
                    popup.setContent(formatContent(marker.getLatLng().lat, marker.getLatLng().lng, index));
                  marker.openPopup();
                });

                marker.on('dragend', function(event) {
                  setTimeout(function() {
                    isOnDrag = false;
                  }, 500);
                });

                marker.on('contextmenu', function(event) {
                  // Hapus semua marker dari array markers
                  markers.forEach(function(m, i) {
                    if (marker == m) {
                      m.removeFrom(mymap); // hapus marker dari peta
                      markers.splice(i, 1);
                    }
                  });
                  //console.log(markers);
                });

                // Return marker
                return marker;
              }

              // Tambahkan event listener click pada peta
              mymap.on('click', function(e) {
                console.log(isOnDrag);
                if (!isOnDrag) {
                  // Buat marker baru
                  var newMarker = addMarker(e.latlng, markers.length);

                  // Tambahkan marker ke array markers
                  markers.push(newMarker);
                  console.log(markers);
                }
              });

            </script>
          </div>

          <div class="buttonDataMain">
            <div class="buttonData">
              <button onclick="getMarker()" type="button" class="btn btn-dark">Tampilkan Marker</button>
              <button onclick="resetMarkers()" type="button" class="btn btn-dark">Reset Marker</button>
            </div>
          </div>

          <div class="data">
            <script>
                function getMarker() {
                    var rsIcon = L.icon({
                        iconUrl: 'frontend/img/rs_icon.png',
                        iconSize: [35, 40],
                        iconAnchor: [20, 40],
                    });
                    fetch("{{ route('getMarker') }}")
                        .then(response => response.json())
                        .then(data => {
                            data.forEach(item => {
                                var latlng = item.latlng.split(',');
                                var latitude = parseFloat(latlng[0]);
                                var longitude = parseFloat(latlng[1]);
        
                                // Buat marker pada peta menggunakan nilai latitude dan longitude
                                var marker = L.marker([latitude, longitude], { icon: rsIcon }).addTo(mymap);
                                marker.bindPopup(`
                                    <div class="popup-content">
                                        <div class="popup-row"><span class="popup-col"> </span><img class="foto-rs" src=${item.foto_rs} /></div>
                                        <div class="popup-row"><span class="popup-col">ID RS: ${item.id_rs}</span></div>
                                        <div class="popup-row"><span class="nama-rs">Nama RS: ${item.nama_rs}</span></div>
                                        <div class="popup-row"><span class="popup-col">Kelas: ${item.tipe_rs}</span></div>
                                        <div class="popup-row"><span class="popup-col">LatLng: ${item.latlng}</span></div>
                                        <div class="popup-buttons">
                                            <button onclick="editMarker('${item.id_rs}')" type="button" class="btn btn-dark" >Edit</button>
                                            <button onclick="deleteMarker('${item.id_rs}')" type="button" class="btn btn-dark" >Delete</button>
                                        </div>
                                    </div>
                                `);
                            });
                        })
                        .catch(error => console.error('Error:', error));
                }
        
                function resetMarkers() {
                    mymap.eachLayer(function(layer) {
                        if (layer instanceof L.Marker) {
                            mymap.removeLayer(layer);
                        }
                    });
                }
        
                function editMarker(markerId) {
                    // Logika untuk mengedit marker dengan ID tertentu
                    console.log('Edit marker with ID:', markerId);
                }
        
                function deleteMarker(markerId) {
                    // Logika untuk menghapus marker dengan ID tertentu
                    console.log('Delete marker with ID:', markerId);
                }
            </script>
        </div>

          <!-- ======= From Section ======= -->
          <section id="Form" class="form">
            <div class="container">
              @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
             @endif
              <div class="section-title">
                <h2>Input New Marker</h2>
              </div>
              <div class="form-input">
                <form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                    <label for="nama_rs" class="form-label">Nama Rumah Sakit</label>
                    <input type="text" class="form-control" id="nama_rs" name="nama_rs" required>
                  </div>

                  <div class="mb-3">
                    <label for="latlng" class="form-label">Latitude,Longitude</label>
                    <input type="text" class="form-control" id="latlng" name="latlng" required>
                  </div>

                  <div class="mb-3">
                    <label for="tipe_rs" class="form-label">Tipe Rumah Sakit</label>
                    <input type="text" class="form-control" id="tipe_rs" name="tipe_rs" required>
                  </div>

                  <div class="mb-3">
                    <label for="foto_rs" class="form-label">Gambar Rumah Sakit</label>
                    <input type="text" class="form-control" id="foto_rs" name="foto_rs" required>
                  </div>

                  <button type="submit" class="btn btn-dark">Submit</button>
                </form>
              </div>

            </div>
          </section><!-- End form Section -->

          <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">
          <div class="section-title">
              <h2>List Rumah Sakit Terdaftar</h2>
          </div>
          <div class="data_rs">
              @php
                  $ar_judul = ['Nama', 'LatLng', 'Tipe', 'Foto', 'Actions'];
                  $no = 1;
              @endphp
              <table id="rsTable">
                  <thead>
                      <tr>
                          @foreach($ar_judul as $jdl)
                              <th>{{ $jdl }}</th>
                          @endforeach
                      </tr>
                  </thead>
                  <tbody id="rsTableBody">
                      @foreach($data as $d)
                          <tr>
                              {{-- <td>{{ $no++ }}</td> --}}
                              <td>{{ $d->nama_rs }}</td>
                              <td>{{ $d->latlng }}</td>
                              <td>{{ $d->tipe_rs }}</td>
                              <td>
                                  <img src="{{ $d->foto_rs }}" alt="Gambar Rumah Sakit">
                              </td>
                              <td>
                                  <a href="{{ route('data.edit', ['id_rs' => $d->id_rs]) }}" class="btn btn-primary">Update</a>
                                  <form action="{{ route('data.destroy', ['id_rs' => $d->id_rs]) }}" method="POST" style="display:inline;">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this hospital?')">Delete</button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </section><!-- End Resume Section -->

      </div>
  </section>
            
</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Krisna Juniartha</span>
          </a>
        
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

  
      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
    
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>