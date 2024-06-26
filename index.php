<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escolha seu Jogo</title>
  <style>
  body {
    background-color: #ddd;
    font-family: Tahoma, Verdana, sans-serif;
  }

  div#corpo {
    width: 800px;
    margin: auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 30px #777;
  }

  table.listagem {
    width: 100%;
    text-align: left;
    /* tira espacos */
    border-collapse: collapse;
  }

  table.listagem tr {
    height: 50px;
  }

  table.listagem td {
    /* border: 1px solid #ddd; */
    padding: 10px;
  }

  /* impar */
  table.listagem tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  /* primeira coluna */
  table.listagem td:nth-child(1) {
    width: 50px;
  }

  table.listagem td:nth-child(3) {
    width: 90px;
  }
  </style>
</head>
<body>

  <div id="corpo">
    <h1>Escolha seu Jogo</h1>
    <table class="listagem">
      <tr>
        <td>Foto</td>
        <td>Nome</td>
        <td>Adm</td>
      </tr>
      <tr>
        <td>Foto</td>
        <td>Nome</td>
        <td>Adm</td>
      </tr>
      <tr>
        <td>Foto</td>
        <td>Nome</td>
        <td>Adm</td>
      </tr>
      <tr>
        <td>Foto</td>
        <td>Nome</td>
        <td>Adm</td>
      </tr>
    </table>
  </div>

</body>
</html>