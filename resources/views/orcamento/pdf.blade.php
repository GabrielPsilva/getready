<!doctype html>

<html lang="pt-br">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}" />

    <title>Get ready - PDF generator</title>

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

<section>

<div class="wrapper">

    <div class="col-12">
            <p>Seguradora, Inc.</p>
        <h4>
            <img src="{{ URL::asset('vendor/adminlte/dist/img/GetReadyLogo.jpeg') }}" alt=""/><img src="{{ URL::asset('vendor/adminlte/dist/img/getready-500px.png') }}" width="15%" height="10%" alt=""/>
        </h4>
        <small class="float-right">Data: 20/06/2022</small>
        </div>

    <table width="100%">

        <tr>
            <td><strong>De:</strong> Admin - Rio de janeiro</td>
            <td><strong>Para:</strong> {{$orcamento->nome}} - Rio de janeiro</td>
        </tr>
    
    </table>

      <br/>
      <hr>
      <br/>

        <div class="flex-container">

        <div class="col-sm-4">
            <b>Número pedido #007612</b><br>
            <br>
            <b>ID do seguro:</b> 4F3S8J<br>
            <b>Vencimento da primeira parcela:</b> 02/07/2022<br>
            <b>ID da Conta:</b> #02
        </div>
        
        </div>

        <br />
        <br />
    
      <table width="100%" height="50%">
        <thead style="background-color: lightgray;">
          <tr>
            <th>#</th>
            <th>Descrição</th>
            <th>Ano de fabricação</th>
            <th>Valor aparelho R$</th>
            <th>Total R$</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td> {{$orcamento->celular->nome}} </td>
            <td align="right"> {{$orcamento->ano}} </td>
            <td align="right"> {{$orcamento->celular->valor}} </td>
            <td align="right"> {{$orcamento->valor_total}} </td>
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
                <td align="right"> {{$orcamento->valor_parcela}} </td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td align="right">Total de parcelas</td>
                <td align="right">12x</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td align="right">Total R$</td>
                <td align="right" class="gray"> {{$orcamento->valor_total}} </td>
            </tr>
        </tfoot>
      </table>
       
        <br />

        {{-- <div class="alert alert-success" role="alert">
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
            
      </div> --}}
        <hr>
        <br />

        <div class="row">
        
        <div class="col-6">
        <p class="lead">Métodos de pagamento:</p>
        <img src="assets/images/credit_card_logos1.jpg" alt="cards" width="75%">
         <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
          A partir do pagamento do boleto (que é identificado via conciliação bancária), 
          a a confirmação do seguro é liberada e o dinheiro entra na conta da empresa em até três dias úteis.
        </p>
        </div>

        <div class="col-8">
          <p class="lead">Vencimento: 02/07/2022</p>
          <div class="table-responsive">
          <table class="table">
          <tbody><tr>
          <th style="width:50%">Total de parcelas:</th>
          <td>12x</td>
          </tr>
          <tr>
          <th>Taxa (0.0%)</th>
          <td>R$0,00</td>
          </tr>
          <tr>
          <th>Total:</th>
          <td>R$ {{$orcamento->valor_total}}</td>
          </tr>
          </tbody></table>
          </div>
          </div>
          
        </div>

        <img src="{{ URL::asset('assets/images/bar_code_1_generated.jpg') }}" width="75%" alt="bar code"/>

</div>

</section>


    </body>
</html>

