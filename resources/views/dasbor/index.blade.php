@extends('dasbor.layout.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            <li>Dasbor</li>
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">Dasbor</h4>
            </div>
        </div>
    </div>
    <!-- row end -->

    @if (Auth::user()->hasRole('administrator'))
        @include('dasbor.row.administrator')
    @else
        <h1>Welcome! {{ Auth::user()->name }}</h1>
    @endif

  @stop
