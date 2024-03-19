@extends('dashboard.layout.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            <li>{{ Str::title(Request::segment(1)) }}</li>
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">{{ Str::title(Request::segment(1)) }}</h4>
            </div>
        </div>
    </div>
    <!-- row end -->

    <div class="row">
        <div class="col-md-6 col-xl-4">
           <div class="card">
                <div class="widget-rounded-circle card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <h3 class="mt-1 h5"> Total Students By Gender </h3>
                                <div id="pie-chart" style="height: 100%;" data-colors="#f4f8fb,#4a81d4,#1abc9c" dir="ltr"></div>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
           </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-4">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-12">
                             <div class="text-center">
                                 <h3 class="mt-1 h5"> Total Students By Program </h3>
                                 <div id="programs-chart" style="height: 100%;" data-colors="#f4f8fb,#4a81d4,#1abc9c" dir="ltr"></div>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-4">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-12">
                             <div class="text-center">
                                 <h3 class="mt-1 h5"> Total Students By Province </h3>
                                 <div id="provinces-chart" style="height: 100%;" data-colors="#f4f8fb,#4a81d4,#1abc9c" dir="ltr"></div>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-4">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-12">
                             <div class="text-center">
                                 <h3 class="mt-1 h5"> Total Programs By Year </h3>
                                 <div id="year-chart" style="height: 100%;" data-colors="#f4f8fb,#4a81d4,#1abc9c" dir="ltr"></div>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
        </div> <!-- end col-->

    </div> <!-- row end -->

  @stop

  @push('script-footer')
    <script>
        // By Genre
        var chart = c3.generate({
            bindto: '#pie-chart',
            data: {
        columns: [
            ['Female', {{$female??0}}],
            ['Male', {{$male??0}}],
        ],
        type : 'pie'
        },
        pie: {
            label: {
                format: function (value, ratio, id) {
                    return value;
                }
            },
        },
        tooltip: {
            format: {
                value: function(value, ratio, id) {
                    return value;
                }
            }
        }
    });

     // By Program
    var chart = c3.generate({
            bindto: '#programs-chart',
            data: {
        columns: [
            @foreach($programs as $program )
                ['{{$program->program_title}}', {{$program->students->count()}}],
            @endforeach
        ],
        type : 'bar',
        labels: true
        },
        pie: {
            label: {
                format: function (value, ratio, id) {
                    return value;
                }
            },
        },
        tooltip: {
            format: {
                value: function(value, ratio, id) {
                    return value;
                }
            }
        }
    });

    // By Provinces
    var chart = c3.generate({
            bindto: '#provinces-chart',
            data: {
        columns: [
            @foreach($provinces as $province )
                ['{{$province->name}}', {{$province->students->count()}}],
            @endforeach
        ],
        type : 'bar',
        labels: true
        },
        pie: {
            label: {
                format: function (value, ratio, id) {
                    return value;
                }
            },
        },
        tooltip: {
            format: {
                value: function(value, ratio, id) {
                    return value;
                }
            }
        }
    });


    // By Year
    var chart = c3.generate({
            bindto: '#year-chart',
            data: {
        columns: [
            @foreach($programYear as $year )
                ['{{$year->program_year}}', {{$year->jumlah}}],
            @endforeach
        ],
        type : 'bar',
        labels: true
        },
        pie: {
            label: {
                format: function (value, ratio, id) {
                    return value;
                }
            },
        },
        tooltip: {
            format: {
                value: function(value, ratio, id) {
                    return value;
                }
            }
        }
    });
    </script>
  @endpush
