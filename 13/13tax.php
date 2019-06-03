<?php
  $annualSalary = $_GET["annual_salary"];
  $tax = 0;
  $taxRate = "";

  if($annualSalary <= 540000) {
    $tax = $annualSalary * 0.05;
    $taxRate = "5%";
  } elseif($annualSalary <= 1210000) {
    $tax = $annualSalary * 0.12 - 37800;
    $taxRate = "12%";
  } elseif($annualSalary <= 2420000) {
    $tax = $annualSalary * 0.2 - 134600;
    $taxRate = "20%";
  } elseif($annualSalary <= 4530000) {
    $tax = $annualSalary * 0.3 - 376600;
    $taxRate = "30%";
  } elseif($annualSalary <= 10310000) {
    $tax = $annualSalary * 0.4 - 829600;
    $taxRate = "40%";
  } else {
    $tax = $annualSalary * 0.45 - 1345100;
    $taxRate = "45%";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <style>
      .container {
        margin-top: 40px;
      }
      h2 {
        color: deeppink;
        font-family: "Righteous", sans-serif;
        padding-bottom: 20px;
      }
      .fas {
        margin-left: 10px;
      }
    </style>
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <h2>董董幫您算好了<i class="fas fa-kiss-wink-heart"></i></h2>
      <table class="table">
        <thead>
          <tr>
            <th>綜合所得淨額</th>
            <th>稅率</th>
            <th>應納稅額</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">NTW&nbsp;&nbsp;<?php echo $annualSalary; ?></th>
            <td><?php echo $taxRate; ?></td>
            <td>NTW&nbsp;&nbsp; $<?php echo $tax; ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
