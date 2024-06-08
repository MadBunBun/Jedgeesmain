<?php 
require('./backend/session.php');
require('./backend/database.php');


?>
<!DOCTYPE html>
<html>
        <head>
            <link rel="stylesheet" href="stylesheets/dashboard-index.css" type="text/css">
            <title>Jedgees</title>
        </head>
        <body>
            <div class="uppergrey"></div>
            <section class="Navigation"><!--Navigation-->
                    <div class="logo-nav">
                        <img src="Cart assets/LOGO.png" id="logo"><!--logo-->
                        <div class="Nav"><!--Navigation-->
                               <div><a href="Homepage-Index.php"><b>Home</b></a></div>
                               <div><a href="Products-index.html"><b>Products</b></a></div>
                               <div><a href="Customize-index.php"><b>Customs</b></a></div>
                        </div>
                    </div>
                    
                    <div class="user-cart"> <!--user and cart*-->
                        
                        <div>
                            <a href="Userpage Index.html">
                                <img src="Cart assets/Userpf.png">
                                <p>User</p>
                            </a>
                        </div>
                        
                        
                        <div>
                            <a href="Cart-index.html">
                                <img src="Cart assets/Cart.png">
                                <p>Cart</p>
                            </a>
                        </div>
    
                    </div>
            </section>
            
            <div class="lower-grey"><p>You need it. We print it. You love it.</p></div>
            <div class="background"><img src="Cart assets/LOGO.png" alt=""></div>
            <section class="dashboard">

                <div class="saleschart">
                        <canvas id="saleschart"></canvas>

                </div>

                <table class="prodstatus">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Product name</th>
                            <th>Reference</th>
                            <th>Contanct number</th>
                            <th>Address</th>
                            <th>product status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                 </table>
                 <table class="sales">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Product Name</th>
                            <th>Reference</th>
                            <th>Payment</th>
                            <th>Receipt</th>
                            <th>address</th>
                            <th>screenshot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tbody>
                 </table>
            </section>
                 
           




            <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
            <script>
                  const ctx = document.getElementById('saleschart');

                    new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        datasets: [{
                        label: 'sales',
                        data: [1200, 1900, 300, 500, 2000, 300],
                        borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                        y: {
                            beginAtZero: true
                        }
                        }
                    }
                    });
            </script>
        </body>
        <footer><!--footer-->
            <div class="footer-container">
                 <img id="logo-footer" src="Cart assets/LOGO.png">
                 <p class="contact">CONTACT US: </p>            
                     <div class="phone">
                         <img src="Cart assets/phone.png" id="phone">
                         <p>Telephone: 794-27-67</p>
                     </div>
                     <div class="message">
                        <img src="Cart assets/message.png" id="message">
                        <p>jedgees18digitalprinting@gmail.com</p>
                    </div>
                     <div class="coins">
                         <img src="Cart assets/coins.png" id="coins">
                         <p>Service Pricing</p>
                     </div>
                    <div class="human">
                        <img src="Cart assets/human.png" id="human">
                        <p>About Jedgees</p>
                    </div>
                     <div class="handshake">
                         <img src="Cart assets/handshake.png" id="handshake">
                         <p>Service Offered</p>
                     </div>
             </div>
        </footer>
        

</html>