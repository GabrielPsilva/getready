<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style>
    .page-break {
        page-break-after: always;
    }

    front-page {
        page: front-page;
    }
    front-page-title {
    display:block;
    text-align:center;
    margin-top:3in;
    font-size:2em;
    font-family:arial, helvetica, sans-serif;
    font-weight:bold;
    }
    @page front-page {
    @top-left { content:none }
    @top-center { content:none }
    @top-right { content:none }
    @bottom-left { content:none }
    @bottom-center { content:none }
    @bottom-right { content:none }
    }

    @page front-page{
    background-image: url("vendor/adminlte/dist/img/getready2-512x512.png");
    background-size: 8.5in 11in;
    background-position: right bottom;
    }

</style>

<h1>Page 1</h1>

<div class="right-image">
    <img src="{{ URL::to('vendor/adminlte/dist/img/GetReadyLogo.png') }}" alt="">
</div>
    
<div class="page-break"></div>
<h1>Page 2</h1>

    
{!! $mensagem !!}
