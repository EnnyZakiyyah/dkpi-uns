@extends('layouts.main')
@section('container')
<!-- ======= Hero Section ======= -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <div class="box">
        
      <!-- ======= Portfolio Section ======= -->
      <section id="pdln" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Data PDLN</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <nav class="navbar navbar-light blue-grey lighten-5">
          <form class="form-inline">
            <button class="btn btn-outline-success" type="button">Main button</button>
            <button class="btn btn-sm align-middle btn-outline-secondary" type="button">Smaller button</button>
            <button class="btn btn-sm btn-secondary" type="button">Smaller button</button>
            <button class="btn align-middle btn-primary" type="button">Smaller button</button>
          </form>
        </nav>
       
                {{-- <label for="tahun" class="form-label">Tampilkan Data Tahun</label>  
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                  </div> --}}

                  <h2>Filter DIV Elements</h2>

<div id="myBtnContainer">
  <center><button class="btn btn-default active" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn btn-default" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn btn-default" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn btn-default" onclick="filterSelection('colors')"> Colors</button></center>
</div>

<div class="container">
  <div class="filterDiv cars">
    <table class="table table-hover">
      <thead>
        <tr class="text-primary">
          <th scope="col">No.</th>
          <th scope="col">Tujuan</th>
          <th scope="col">Waktu Mulai</th>
          <th scope="col">Waktu Berakhir</th>
          <th scope="col">Negara</th>
          <th scope="col">Surat Unas</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>@fat</td>
          <td>@fat</td>
          <td>@fat</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="filterDiv cars">
    <table class="table table-hover">
      <thead>
        <tr class="text-primary">
          <th scope="col">No.</th>
          <th scope="col">Nama Instansi</th>
          <th scope="col">Ruang Lingkup</th>
          <th scope="col">Waktu Mulai</th>
          <th scope="col">Waktu Berakhir</th>
          <th scope="col">Pejabat Penandatangan</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>@fat</td>
          <td>@fat</td>
          <td>@fat</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
                
                 
                  
            <p>
                <center>
                    <a class="btn btn-default" id="data-mahasiswa" data-toggle="tab" href="#data-mahasiswa" role="tab" aria-controls="data-mahasiswa" aria-selected="true" data-aos="fade-up" data-aos-delay="100" type="button" aria-expanded="false">Mahasiswa</a>
                    <a class="btn btn-default" id="data-dosen" data-toggle="tab" href="#data-dosen" role="tab" aria-controls="data-dosen" aria-selected="true" data-aos="fade-up" data-aos-delay="100" type="button" aria-expanded="false">Dosen</a>
                    <a class="btn btn-default" id="data-pimpinan" data-toggle="tab" href="#data-pimpinan" role="tab" aria-controls="data-pimpinan" aria-selected="true" data-aos="fade-up" data-aos-delay="100" type="button" aria-expanded="false">Pimpinan</a>
                </center>
              </p>
              <div class="tab-pane fade" id="data-mahasiswa" role="tabpanel" aria-labelledby="data-mahasiswa">
                <div class="card card-body">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
              <div class="tab-pane fade" id="data-dosen" role="tabpanel" aria-labelledby="data-dosen">
                <div class="card card-body">
                  a
                </div>
              </div>
            </div>


   
      </div>
    </section><!-- End Portfolio Section -->


    </div>
 
@endsection