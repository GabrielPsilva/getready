<!doctype html>

<html lang="pt-br">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}" />

    <title>Get ready - PDF view</title>

    <style type="text/css">

        * {
            font-family: Verdana, Arial, sans-serif;
        }

        .flex-container {
            display: inline-flex;
            width: 100%;
        }

        table{
            font-size: x-small;
        }
        tfoot tr td{
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
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

    </style>

</head>

<body>

    <div class="col-12">
        <h4>
            <img src="{{ URL::asset('vendor/adminlte/dist/img/GetReadyLogo.jpeg') }}" alt=""/> Seguradora, Inc.
        </h4>
        <small class="float-right">Data: 20/06/2022</small>
        </div>

    <table width="100%">

        <tr>
            <td><strong>De:</strong> Admin - Rio de janeiro</td>
            <td><strong>Para:</strong> Gabriel - Rio de janeiro</td>
        </tr>
    
    </table>

      <br/>
      <br/>

        <div class="flex-container">

        <div class="col-sm-4">
            <b>Número pedido #007612</b><br>
            <br>
            <b>ID seguro:</b> 4F3S8J<br>
            <b>Vencimento da primeira parcela:</b> 02/07/2022<br>
            <b>Conta:</b> #01
        </div>
        
        </div>

        <br />
        <br />
    
      <table width="100%">
        <thead style="background-color: lightgray;">
          <tr>
            <th>#</th>
            <th>Descrição</th>
            <th>Fabricação</th>
            <th>Valor aparelho R$</th>
            <th>Total R$</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{$orcamento->celular->nome}}</td>
            <td align="right">2019</td>
            <td align="right">1599,99</td>
            <td align="right">784,95</td>
          </tr>
          <tr>
              <th scope="row"> - </th>
              <td> - </td>
              <td align="right"> - </td>
              <td align="right"> - </td>
              <td align="right"> - </td>
          </tr>
          <tr>
              <th scope="row"> - </th>
              <td> - </td>
              <td align="right"> - </td>
              <td align="right"> - </td>
              <td align="right"> - </td>
          </tr>
        </tbody>
    
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td align="right">Primeira Parcela R$</td>
                <td align="right">65,42</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td align="right">Total de parcelas</td>
                <td align="right">12x</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td align="right">Total R$</td>
                <td align="right" class="gray">784,95 </td>
            </tr>
        </tfoot>
      </table>
       
        <br />

        <div class="alert alert-success" role="alert">
          Caro(a) {{$orcamento->nome}} <br>
          O valor total do seu seguro é R$ {{$orcamento->valor_total}} <br>
          <table>
              <tr>
                <th>parcela</th>
                <th>valor</th>
              </tr>
          @for ($i = 1; $i <= 12; $i++)
  
          <tr>
              <td>{{$i}}</td>
              <td>R$ {{$orcamento->valor_parcela}}</td>
            </tr>
  
          @endfor
  
          </table>
            
      </div>

        <br />


        <div class="row">
        
        <div class="col-6">
        <p class="lead">Métodos de pagamento:</p>
        <img src="assets/images/credit_card_logos1.jpg" alt="cards" width="75%">
         <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
        plugg
        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
        </p>
        </div>
        
        <div class="col-6">
        <p class="lead">Vencimento: 02/07/2022</p>
        <div class="table-responsive">
        <table class="table">
        <tbody><tr>
        <th style="width:50%">Subtotal:</th>
        <td>$250.30</td>
        </tr>
        <tr>
        <th>Tax (9.3%)</th>
        <td>$10.34</td>
        </tr>
        <tr>
        <th>Shipping:</th>
        <td>$5.80</td>
        </tr>
        <tr>
        <th>Total:</th>
        <td>$265.24</td>
        </tr>
        </tbody></table>
        </div>
        </div>
        
        </div>
        
        </div>
        
        </div>
        </div>
        </div>
        </section>

    {{-- 

  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price $</th>
        <th>Total $</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Playstation IV - Black</td>
        <td align="right">1</td>
        <td align="right">1400.00</td>
        <td align="right">1400.00</td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Metal Gear Solid - Phantom</td>
          <td align="right">1</td>
          <td align="right">105.00</td>
          <td align="right">105.00</td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Final Fantasy XV - Game</td>
          <td align="right">1</td>
          <td align="right">130.00</td>
          <td align="right">130.00</td>
      </tr>
    </tbody>

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Subtotal $</td>
            <td align="right">1635.00</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Tax $</td>
            <td align="right">294.3</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total $</td>
            <td align="right" class="gray">$ 1929.3</td>
        </tr>
    </tfoot>
  </table> --}}

</body>
</html>

<!-- <style>
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
    background-image: url("vendor/adminlte/dist/img/getready2-512x512.jpeg") }};
    background-size: 8.5in 11in;
    background-position: right bottom;
    } 

</style> -->

