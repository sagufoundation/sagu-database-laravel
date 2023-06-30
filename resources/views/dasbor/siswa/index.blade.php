@extends('dasbor.layout.app')
@section('content')
    <!-- start page content wrapper-->
      <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                            <li class="breadcrumb-item active">Siswa</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Siswa</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <div class="card-body">
                                    
                                    <!-- Left sidebar -->
                                    @include('dasbor.siswa.menu')
                                    <!-- End Left sidebar -->

                                    <div class="inbox-rightbar">
                                        @if (request()->segment(3) == 'draft')
                                        <form action="{{ url('dasbor/siswa/draft') }}" method="get">
                                        @else
                                        <form action="{{ url('dasbor/siswa') }}" method="get">
                                        @endif
                                            <div class="input-group mb-3">
                                                <input type="search" name="s" class="form-control" placeholder="Search">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </form>

                                        <div class="mt-3">
                                            <table class="table table-bordered">
                                                    <tr>
                                                        <th width="1%">No</th>
                                                        <th>Foto</th>
                                                        <th>Full Name</th>
                                                        <th>Email Address</th>
                                                        <th width="280px">Action</th>
                                                    </tr>
                                                    @foreach ($datas as $data)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td class="col-1">
                                                            @if($data->profile_picture)
                                                            <img src="{{ asset('gambar/siswa/' . $data->profile_picture ?? '') }}" alt="profile picture" class="img img-thumbnail">
                                                            @else 
                                                            <img src="{{ asset('gambar/siswa/00.jpg') }}" alt="profile picture" class="img img-thumbnail">
                                                            @endif
                                                        </td>
                                                        <td>{{ $data->first_name ?? '' }} {{ $data->middle_name ?? '' }} {{ $data->last_name ?? '' }}</td>
                                                        <td>{{ $data->email ?? '' }}</td>

                                                        <td>
                                                            <form action="{{ url('dasbor/siswa',$data->id) }}" method="POST">

                                                                <a class="btn btn-primary" href="{{ url('dasbor/siswa/'.$data->id.'/edit') }}">Edit</a>

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            </table>
                                        </div>
                                        <!-- end .mt-4 -->

                                        {!! $datas->links() !!}
                                        <!-- end row-->
                                    </div>
                                    <!-- end inbox-rightbar-->

                                    <div class="clearfix"></div>
                                    </div>

                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            </div>
        </div>
       <!-- end row -->

  <!--end wrapper-->

  @stop
