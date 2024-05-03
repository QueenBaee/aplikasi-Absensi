
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
            <div class="pagetitle">
            <h1 class="h3 mb-2 text-gray-800">Data Absensi Guru</h1>
            </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table datatable">
                <div class="card-body">
                <thead>
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($absen as $absen)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                        <td>{{ $absen->nama_guru }}</td>
                                        <td>{{ $absen->waktu }}</td>
                                        <td>{{ $absen->keterangan }}</td>
                                    </tr>
                                    @endforeach
                </tbody>
              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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