@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item active">Pengguna</li>
                </ol>
            </div>
            <h4 class="page-title">Pengguna</h4>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('dasbor.admin.users.menu')
                <div class="inbox-rightbar">
                    <form action="{{ url('dasbor/pengguna') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
                        </div>
                    </form>

                    <div class="mt-3">
                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Peran</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            @foreach ($data as $key => $user)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td class="align-middle">
                                    @if ($user->picture)
                                    <img src="{{ asset('gambar/pengguna/' . $user->picture) }}" alt="Gambar" class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                    @else
                                    <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="Gambar" class="img img-circle rounded mr-1" style="height: 75px;width:75px;">

                                    @endif

                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ implode('',$user->roles()->pluck('display_name')->toArray()) }}</td>
                                <td>{{ $user->status }}</td>
                                <td class="text-center">
                                    <form action="{{ route('dasbor.pengguna.delete',['id' => $user->id]) }}" method="POST">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Opsi <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                @if (Auth::id() == $user->id)
                                                <a class="dropdown-item" href="{{ route('dasbor.pengguna.show',$user->slug) }}"><i class="fe-eye"></i> Detail</a>
                                                <a class="dropdown-item" href="{{ route('dasbor.akunsaya') }}"><i class="fe-edit"></i> Edit</a>
                                                @else
                                                <a class="dropdown-item" href="{{ route('dasbor.pengguna.show',$user->slug) }}"><i class="fe-eye"></i> Detail</a>
                                                <a class="dropdown-item" href="{{ route('dasbor.pengguna.edit',$user->slug) }}"><i class="fe-edit"></i> Ubah</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item bg-danger text-light"><i class="fe-trash"></i> Hapus</button>
                                                @endif
                                            </div>
                                        </div>


                                </td>
                            </tr>



                            @endforeach
                        </table>
                    </div>
                    <!-- end .mt-4 -->

                    {!! $data->render() !!}
                    <!-- end row-->
                </div>
                <!-- end inbox-rightbar-->

                <div class="clearfix"></div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

</div>
<!-- end row -->

@stop
