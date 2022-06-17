<!doctype html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Orçamento</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
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

        .page-break {
        page-break-after: always;
        }
    </style>
</head>

<body>

  <table width="100%">
    <tr>
        <td valign="top"><img src="vendor/adminlte/dist/img/getready2-512x512.jpeg"/></td>
        <td align="right">
            <h3>Get Ready Seguradora</h3>
            <pre>
                Delligence
                Company address
                Tax ID
                phone
                fax
            </pre>
        </td>
    </tr>

  </table>

  <div class="card">
    <?php echo $mensagem; ?>
  </div>

  <table width="100%">
    <tr>
        <td><strong>From:</strong> Linblum - Barrio teatral</td>
        <td><strong>To:</strong> Linblum - Barrio Comercial</td>
    </tr>

  </table>

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
  </table>

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

{!! $mensagem !!}
