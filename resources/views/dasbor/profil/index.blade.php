@extends('dasbor.layout.app')
@section('content')
    <!-- start page content wrapper-->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            <a href="javascript: void(0);">Dasbor {{ implode('',Auth::user()->roles()->pluck('display_name')->toArray()) }}</a>
                            <li class="breadcrumb-item active">Akun Saya</li>
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">Profil {{ Auth::user()->name }} </h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card-box text-center">
                @if (!auth()->user()->picture)
                    <img src="{{asset('gambar/pengguna/00.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image" id="preview-picture">
                @else
                    <img src="{{asset('gambar/pengguna')}}/{{auth()->user()->picture}}" alt="allal"
                    class="rounded-circle avatar-lg img-thumbnail" id="preview-picture">
                @endif
                <h4 class="mb-0"> {{ auth()->user()->name }} </h4>
                <p class="text-muted">{{ auth()->user()->email }}</p>
            </div> <!-- end card-box -->
        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
            <div class="card-box">
                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#aboutme" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Pengaturan
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="aboutme">
                        @include('dasbor.profil.tab.edit')
                    </div> <!-- end tab-pane -->

                    <div class="tab-pane" id="settings">
                       @include('dasbor.profil.tab.change-password')
                    </div>
                    <!-- end settings content-->
                </div> <!-- end tab-content -->
            </div> <!-- end card-box-->

        </div> <!-- end col -->
    </div>
  <!--end wrapper-->

  @stop

  @push('script-footer')
  <script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function (e) {
       $('#picture').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-picture').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
       });

    });
</script>
 @endpush
