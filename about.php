<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop Clothes</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./Resource/css/style.css">
  <link rel="stylesheet" href="./Resource/css/query.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="./Resource/js/script.js"></script>

  <!--DataTables-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

</head>

<body>

  <!--NAVIGATION AREA-->
  <nav class="navbar navbar-expand-lg navbar-light py-3">
    <div class="container">
      <a href="index.php"><img src="./Resource/img/logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><span>Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"><span>About</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Collections
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
                  if(isset($cate_dropdown))
                  {
                    while($result = $cate_dropdown->fetch_assoc())
                    { 
                ?>
              <li><a class="dropdown-item" href="shop.php?cateID=<?php echo $result['CATEGORY_ID'] ?>">
                  <?php echo $result['CATEGORY_NAME'] ?>
                </a></li>
              <li>
                <hr class="dropdown-divider w-100">
              </li>
              <?php
                    }
                  }
                ?>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><span>Cart</span></a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"><span>Contact</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section>
  <div class="header">
      <h1 class="page-header">About Us</h1>
      <div class="line"></div>
      <p class="sub-text">Products for every home</p>
    </div>

    <div class="row">
      <div class="image">
        <div class="text-center">
          <img alt="IVY moda" class="card-img-top"
            src="https://ivymoda.com/assets/files/news/2022/03/08/a983fb0d282d71984fc750d7e5f60470.png"
            style="width: 80%">
          <div class="card-body">
            <div class="card-title">IVY moda</div>
            <div class="card-text">"My Fashion Manifesto"</div>
          </div>
        </div>
      </div>
      <div class="image">
        <div class="text-center">
          <img alt="IVY moda" class="card-img-top"
            src="https://ivymoda.com/assets/files/news/2022/03/08/5bb88418b3295127222ee87ebde52fa5.png"
            style="width: 81.3%">
          <div class="card-body">
            <div class="card-title">IVY men</div>
            <div class="card-text">"Fashion of the Leader"</div>
          </div>
        </div>
      </div>
      <div class="image">
        <div class="text-center">
          <img alt="IVY moda" class="card-img-top"
            src="https://ivymoda.com/assets/files/news/2022/03/08/350c3c97243d8d5c9bc24593155a56e0.png"
            style="width: 80%">
          <div class="card-body">
            <div class="card-title">IVY kids</div>
            <div class="card-text">"Children must also dress well"</div>
          </div>
        </div>
      </div>
    </div>

    <div class="row" style="background-color: #173c46">
      <div class="col-lg-12 mb-12">
        <div class="text-center">
          <div class="core-value-header"> CORE VALUES </div>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="core-value">CREDO<br>
          "CUSTOMER IS CENTRAL"</div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="core-value-body">
          <p>With IVY moda, customers are always A-class celebs with the most attractive privileges.</p>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="core-value">PASSION <br>
          BE COMPLETE TO ACCEPT THE MISSION</div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="core-value-body">
          <p>Bring a personal statement to the audience and customers.</p>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="core-value">INTEGRITY<br>
          WITH YOURSELF AND ORGANIZATION</div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="core-value-body">
          <p>"Words and Actions go hand in hand.
            Do what you have said to be fair & reasonable"</p>
        </div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="core-value">PERSISTENCE WITH THE SAME MOTTO<br>
          "CONTINUOUS STEP"</div>
      </div>
      <div class="col-lg-6 mb-4">
        <div class="core-value-body">
          <p>Ready to face all difficulties and challenges to conquer new heights.</p>
        </div>
      </div>
      
    </div>
    <div class="main-text">
      <br>
      <h3>COMPANY RELEASE</h3>
      <br>
      <p>IVY moda has a development history spanning 15 years. Born in 2005, starting as an office fashion brand only for women, IVY moda has now completed its fashion "ecosystem" by launching product lines for both women and men. Men and children with distinct fashion statements. The brand has gradually transformed strongly and affirmed its leading position in fashion trends in the Vietnamese market

        IVY moda is also the only mass fashion enterprise that has maintained 2 big fashion shows a year for the past 7 years. Strongly invested in huge costs and brains to treat fashionistas as well as loyal customers to high-class, lively, and full of fashion parties; highly appreciated by professionals and loved by customers.</p>

      <br>

      <p>IVY moda is also the only mass fashion enterprise that maintains 2 big fashion shows throughout the year
        7 years ago. Strongly invest in huge costs and brains to entertain fans as well as loyal customers
        design high-class, lively parties, full of fashion atmosphere; highly appreciated by experts
        and loved by customers.</p>

      <br>
      <br>

      <h3>CORPORATE CULTURE</h3>

      <br>
      
      <p>IVY moda is the convergence of people who share the same passion for Vietnamese fashion dreams. IVY no
        build culture from theory but always show through each action. We are proud to be a main team
        Be honest, dare to say what you think and do what you say, persistently and persistently follow your dreams.</p>

      <br>

      <p>"If you want to go fast, go alone, if you want to go far, go together", 15 years of development is the best proof for the culture of Vietnam.
        Perseverance, loyalty, creativity. Like the image of a sail in the wind on IVY's logo, we don't stop
        desire to conquer, go beyond the waves to the sea regardless of hardships to explore the endless ocean".</p>

    </div>
    <div class = 'spacer'></div>

  </section>



  <!--FOOTER AREA-->
  <footer class="mt-5 py-5 text-center">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-4 col-md-4 col-12 mb-3">
        <img src="./Resource/img/logo.png" alt="">
        <p class="pt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <div class="footer-one col-lg-4 col-md-4 col-12 mb-3">
        <h5 class="pb-2">Featured</h5>
        <ul class="text-uppercase list-unstyled">
          <li><a href="shop.php?cateID=2">Men</a></li>
          <li><a href="shop.php?cateID=1">Women</a></li>
          <li><a href="shop.php?cateID=3">Children</a></li>
          <li><a href="#">Featured product</a></li>
          <li><a href="#">Best seller product</a></li>
        </ul>
      </div>

      <div class="footer-one col-lg-4 col-md-4 col-12 mb-3">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6 class="text-uppercase">Address:</h6>
          <p>159A Le Loi Street, Da Nang city</p>
        </div>
        <div>
          <h6 class="text-uppercase">Phone:</h6>
          <p>0905933981</p>
        </div>
        <div>
          <h6 class="text-uppercase">Email:</h6>
          <p>duy.tran190201@vnuk.edu.vn</p>
        </div>
      </div>

    </div>

    <!--Copyright-->
    <p class="text-center copyright">©IVYmoda All rights reserved</p>

  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="./Vendors/js/jquery.waypoints.min.js"></script>

</body>

</html>