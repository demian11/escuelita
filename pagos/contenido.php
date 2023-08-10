<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Metodo de pago</title>
</head>
<body>
    <div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Orden de pago</h2>
                <div class='line'></div>
                <br>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>HTML avanzado</span>
                <br> Contenido de nivel avanzado<br> <span class='thin small'> Para este contenido podras acceder al nivel avanzado de html dentro del tiempo de 08/08/2023 hasta la fecha 08/09/2023 <br><br></span>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>$200.00</div>
              </td>
            </tr>
          </tbody>

        </table>
        
        <!--
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='https://dl.dropboxusercontent.com/s/qbj9tsbvthqq72c/Vintage-20L-Backpack-by-Fj%C3%A4llr%C3%A4ven.jpg' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>Fjällräven</span>
                <br>Vintage Backpack<br> <span class='thin small'> Color: Olive, Size: 20L</span>
              </td>
            </tr>
            <tr>
              <td>
                <div class='price'>$235.95</div>
              </td>
            </tr>
          </tbody>
        </table>
         -->
        
        <!--
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='https://dl.dropboxusercontent.com/s/nbr4koso8dpoggs/6136C1p5FjL._SL1500_.jpg' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>Monobento</span>
                <br>Double Lunchbox<br> <span class='thin small'> Color: Pink, Size: Medium</span>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>$25.95</div>
              </td>
            </tr>
          </tbody>
        </table>
        -->
        
        <div class='total'>
        <div class='line'></div>
          <span style='float:left;'>
          
            <div class='thin dense'></div>
            <div class='thin dense'></div>
            TOTAL
          </span>
          <span style='float:right; text-align:right;'>
            <div class='thin dense'></div>
            <div class='thin dense'></div>
            $200.00
          </span>
        </div>
</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
            <!--
            <table class='half-input-table'>
              <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                <ul>
                  <li>Master Card</li>
                  <li>American Express</li>
                  </ul></div>
                </div>
               </td></tr>
            </table>
            -->
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
            Card Number
            <input class='input-field'></input>
            Card Holder
            <input class='input-field'></input>
            <table class='half-input-table'>
              <tr>
                <td> Expires
                  <input class='input-field'></input>
                </td>
                <td>CVC
                  <input class='input-field'></input>
                </td>
              </tr>
            </table>
            <button onclick="window.location.href='./confPago.php'" class='pay-btn'>Checkout</button>

          </div>

        </div>
      </div>
    </div>


</body>
</html>