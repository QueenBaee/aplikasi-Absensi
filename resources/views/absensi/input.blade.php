
<!DOCTYPE html>
<html lang="en">

<head>
@include('template.head')
</head>
<body id="page-top">
    <div id="wrapper">
        @include('template.sidebar')
        @include('template.topbar')

            <!-- Main Content -->
            <h1>Form Absensi Guru</h1>
      <nav>
      </nav>
    
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Absensi Guru</h5>
              
                <!-- General Form Elements -->
                <form action="{{ route('absensi-simpan')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Guru</label>
                  <div class="col-sm-10">
                    <select name="nama_guru" id="nama_guru">
                        @if($gr->count())
                        @foreach($gr as $item)
                        <option value="{{$item->nama_guru}}">{{$item->nama_guru}}</option>
                        @endforeach
                        @endif
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Waktu</label>
                  <div class="col-sm-10">
                    <input type="text" name="waktu" id="waktu" class="form-control" value="{{ $waktu }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <select name="keterangan" id="keterangan">
                        <option value="Masuk">Absen Masuk</option>
                        <option value="Pulang">Absen Pulang</option>
                    </select>
                  </div>
                </div>
                <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Simpan</button>
                </div>
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('template.logout')

    @include('template.script')
</body>

</html>