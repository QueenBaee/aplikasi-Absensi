
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
            <h1 class="h3 mb-2 text-gray-800">Daftar Guru</h1>
            </div>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table datatable">
                <div class="card-body">
                    <a href="/dataGuru/create"><button type="button" class="btn btn-secondary">Input data guru</button></a>
                <thead>
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. HP</th>
                    <!-- <th scope="col">Gambar</th> -->
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($guru as $guru)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                        <td>{{ $guru->nip }}</td>
                                        <td>{{ $guru->nama_guru }}</td>
                                        <td>{{ $guru->alamat }}</td>
                                        <td>{{ $guru->no_hp }}</td>
                                        <!-- <td><img src="{{asset('images/' .$guru->gambar)}}" alt="gambar Guru" style="max-width:100px"></td> -->
                                        <!-- <td><img src="{{ asset('images/' .$guru->gambar) }}" alt="Gambar Guru" style="max-width: 100px;"></td> -->
                                        <td>
                                            <a href="dataGuru/edit/{{ $guru->id }}">Edit</a>
                                            <a href="javascript:void(0);" onclick="confirmDelete('{{ $guru->id }}')">Hapus</a>
                                        </td>
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