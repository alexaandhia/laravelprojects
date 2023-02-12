<x-layout-app title="Data Siswa">
    <div class="app-content pt-0 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
				<div class="inner">
					<div class="app-card-body  p-lg-0">
						<h4 class="mb-3">Data Siswa</h4>
					</div>
				</div>
			</div>
			<div class="app-card">
				<table class="table table-hover shadow-sm">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nomor Seleksi</th>
							<th scope="col">NISN</th>
							<th scope="col">Nama</th>
							<th scope="col">Nomor HP</th>
							
						</tr>

                        @foreach ($students as $student )
                            
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> {{$student->id}} </td>
                            <td> {{$student->nisn}} </td>
                            <td> {{$student->nama_lengkap}} </td>
							<td> {{$student->no_hp}} </td>
                        </tr>
                        @endforeach
					</thead>
					<tbody>
				
					</tbody>
				</table>
			</div>
		</div>
	</div>
</x-layout-app>