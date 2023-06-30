<!-- Left sidebar -->
<div class="inbox-leftbar">

    <ul class="list-group">
        <a href="{{ url('dasbor/pengaturan') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == '' || Request::segment(3) == 'informasi-situs') active @endif">
            <i class="fe-settings mr-1 "></i> Informasi Situs   <span class="badge badge-soft-info float-right ms-2"></span>
        </a>
        
        <a href="{{ url('dasbor/pengaturan/kontak') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'kontak') active @endif">
            <i class="fe-settings mr-1"></i> Kontak <span class="badge badge-soft-info float-right ms-2"></span>
        </a>
        
        <a href="{{ url('dasbor/pengaturan/media-sosial') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'media-sosial') active @endif">
            <i class="fe-settings mr-1"></i> Media Sosial <span class="badge badge-soft-info float-right ms-2"></span>
        </a>
        
        <a href="{{ url('dasbor/pengaturan/logo') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'logo') active @endif">
            <i class="fe-settings mr-1"></i> Logo <span class="badge badge-soft-info float-right ms-2"></span>
        </a>
        
        <a href="{{ url('dasbor/pengaturan/logo-dasbor') }}" class="list-group-item list-group-item-action @if(Request::segment(3) == 'logo-dasbor') active @endif">
            <i class="fe-settings mr-1"></i> Logo Dasbor <span class="badge badge-soft-info float-right ms-2"></span>
        </a>
    </ul>

</div>
<!-- End Left sidebar -->
