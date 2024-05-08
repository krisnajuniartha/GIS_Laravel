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
  <link href="{{ asset('frontend/img/location.png') }}" rel="icon">
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
>
  <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">

  <style>
   /* #mapid { height: 500px; }

      .leaflet-popup-content {
          width: 250px;
          height: 100px;
      }

      .col {
          float: left;
          width: 35%;
      }
      .col2 {
          float: left;
          width: 65%;
          text-align: right;
      }
      .row:after {
          content: "";
          display: table;
          clear: both;
      } */

  </style>
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
        <ul>
          <li><a href="index.html" class="active">Home</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">

        <div class="image_hero">
          <img src="{{ asset('frontend/img/kawaine.png') }}">
        </div>

    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <section id = "home" class = "home">
      <div class = "grid">
          <div class = "map1">

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

              // Array markers
              var markers = [];
      
              // Is On Drag
              var isOnDrag = false;

              function createMarker(latlng, index) {
              var marker = L.marker(latlng, { draggable: true }).addTo(mymap);
              var popup = L.popup({ offset: [0, -30] }).setLatLng(latlng);

              marker.on('click', function() {
                  popup.setLatLng(marker.getLatLng());
                  updatePopupContent(marker, index);
              });
              marker.on('drag', function() {
                  popup.setLatLng(marker.getLatLng());
                  updatePopupContent(marker, index);
              });
              marker.on('dragstart', function() { isOnDrag = true; });
              marker.on('dragend', function() {
                  setTimeout(function() { isOnDrag = false; }, 500);
              });
              marker.on('contextmenu', function() {
                  markers.splice(index, 1);
                  mymap.removeLayer(marker);
              });
              return marker;
              }

              function updatePopupContent(marker, index) {
              var lat = marker.getLatLng().lat.toFixed(6);
              var lng = marker.getLatLng().lng.toFixed(6);  

              var content = `
                        <div class="popup-content">
                          <div class="popup-row">Marker [${index + 1}]</div>
                          <div class="popup-row"><span class="popup-col">Latitude:</span>${lat}</div>
                          <div class="popup-row"><span class="popup-col">Longitude:</span>${lng}</div>
                        </div>
              `;
              // Memindahkan konten popup ke dalam div dengan id 'info'
              document.getElementById('info').innerHTML = content;
              // document.getElementById('dataContainer').innerHTML = content;
              marker.getPopup().setContent(content);
              }

              // Tambahkan event listener click pada peta
              mymap.on('click', function(e) {
                console.log(isOnDrag);
                    if(!isOnDrag){
                        // Buat marker baru
                        var newMarker = addMarker(e.latlng,markers.length);
                        
                        // Tambahkan marker ke array markers
                        markers.push(newMarker);
                  console.log(markers);
                  }
              });

            </script>
          </div>

          <div class="buttonDataMain">
            <div class="buttonData">
              <button onclick= "getData()">Tampilkan RS</button>
              <!-- <button onclick="resetMarkers()">Reset</button> -->
            </div>
          </div>

          <div class="data">
              <div class ="dataPopup">
                  <img src= `${item.foto_rs}` />
              </div>
              <script>
                function getData() {
                  // Mengambil data dari server Node.js menggunakan AJAX
                  const database = new XMLHttpRequest();
                  database.open('GET', 'http://localhost:5000/getData');
                  database.onload = function() {
                      if (database.status === 200) {
                        const data = JSON.parse(database.responseText);
                        // Loop melalui setiap item data
                        data.forEach(item => {
                        // Pisahkan data LatLng menjadi nilai latitude dan longitude
                        const latlng = item.latlng.split(',');
                        const latitude = parseFloat(latlng[0]);
                        const longitude = parseFloat(latlng[1]);

                        // Buat marker pada peta menggunakan nilai latitude dan longitude
                        const marker = L.marker([latitude, longitude]).addTo(mymap);
                        // marker.bindPopup(`<b>Nama RS:</b> ${item.nama_rs}<br><b>Alamat:</b> ${item.alamat_rs}`);
                        marker.bindPopup(`<div class="popup-content">
                                    <div class="popup-row"><span class="popup-col"> </span><img class = "foto-rs" src= ${item.foto_rs} /></div>
                                    <div class="popup-row"><span class="popup-col">ID RS: ${item.id_rs} </span> </div>
                                    <div class="popup-row"><span class="nama-rs">Nama RS: ${item.nama_rs} </span> </div>
                                    <div class="popup-row"><span class="popup-col">Kelas: ${item.tipe_rs} </span> </div>
                                    <div class="popup-row"><span class="popup-col">LatLng: ${item.latlng} </span> </div>
                                </div>`);
                        });
                        // Tampilkan data dalam format popup
                        var content = '';
                        data.forEach(item => {
                            content += `
                                <div class="popup-content">
                                    <span></span>
                                    <div class="popup-row"><span class="popup-col">ID RS:</span> ${item.id_rs}</div>
                                    <div class="popup-row"><span class="popup-col">Name:</span> ${item.nama_rs}</div>
                                    <div class="popup-row"><span class="popup-col">Kelas:</span> ${item.tipe_rs}</div>
                                    <div class="popup-row"><span class="popup-col">LatLng:</span> ${item.latlng}</div>
                                    <div class="popup-row"><span class="popup-col">Alamat:</span> ${item.alamat_rs}</div>
                                    <div class="popup-row"><span class="popup-col">Gambar:</span> ${item.foto_rs}</div>
                                      <br>
                                      <span></span>
                                      <span>
                                        <img src="http://localhost:3000/getImage/${item.id_rs} "style="max-width: 400px; max-height: 300px;"></div>
                                        </span>
                                    <span></span>
                                </div>
                            `;
                        });
                      } else {
                          console.error('Failed to fetch data:', database.statusText);
                      }
                    };
                    database.onerror = function() {
                        console.error('Request failed:', database.statusText);
                    };
                    database.send();
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

                  {{-- <div class="mb-3">
                    <label for="alamat_rs" class="form-label">Alamat Rumah Sakit</label>
                    <input type="text" class="form-control" id="alamat_rs" name="alamat_rs" required>
                  </div> --}}

                  <div class="mb-3">
                    <label for="foto_rs" class="form-label">Gambar Rumah Sakit</label>
                    <input type="text" class="form-control" id="foto_rs" name="foto_rs" required>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
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
                  $ar_judul = ['No','Nama','LatLng','Tipe','Foto'];
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
                              <td>{{ $no++ }}</td>
                              <td>{{ $d->nama_rs }}</td>
                              <td>{{ $d->latlng}}</td>
                              <td>{{ $d->tipe_rs }}</td>
                              <td><img src="{{ $d->foto_rs }}" alt="Gambar Rumah Sakit"  style="width: 100px; height: 100px; object-fit: cover;"></td>
                          </tr>
                      @endforeach
                    </tbody>
                </table>
                {{-- <table id="rsTable" class="display">
                  <thead>
                    <tr>
                      @foreach($ar_judul as $jdl)
                      <th>{{ $jdl }}</th>
                      @endforeach
                    </tr>
                  </thead>
                  <tbody id="rsTableBody">
                    @foreach($data->take(10) as $d)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $d->nama_rs }}</td>
                      <td>{{ $d->latlng}}</td>
                      <td>{{ $d->tipe_rs }}</td>
                      <td><img src="{{ $d->foto_rs }}" alt="Gambar Rumah Sakit" style="width: 100px; height: 100px;"></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table> --}}
            </div>
            <!-- <script>
              // Ambil data dari server dan tampilkan dalam tabel
              fetch('http://localhost:9090/getData')
              // fetch('http://localhost:9090/getData')
                .then(response => response.json())
                .then(data => {
                  const rsTableBody = document.getElementById('rsTableBody');
            
                  data.forEach(rs => {
                    const row = `
                      <tr>
                        <td>${rs.id_rs}</td>
                        <td>${rs.nama_rs}</td>
                        <td>${rs.tipe_rs}</td>
                        <td>${rs.latlng_rs}</td>
                        <td>${rs.alamat_rs}</td>
                        <td><img src="http://localhost:9090/getImage/${rs.id_rs} "style="max-width: 400px; max-height: 300px;" alt="Gambar RS"></td>
                      </tr>
                    `;
                    rsTableBody.innerHTML += row;
                  });
                })
                .catch(error => console.error('Error:', error));
            </script> -->
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
  <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>