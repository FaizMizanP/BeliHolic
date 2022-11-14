<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Detail</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="{{ asset('detail-product/style.css') }}" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body>
    <main class="container">

      <!-- Left Column / Gambar Produk -->
      <div class="left-column">
        <img data-image="yeezy" src="images/yeezy.png" alt="">
        <img data-image="orange" src="images/orange.png" alt="">
        <img data-image="peach" class="active" src="images/peach.png" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Product Categories</span>
          <h1>Product Name</h1>
          <p>Product Description. Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi veniam asperiores placeat. Laboriosam distinctio nobis quaerat optio hic dolorum perferendis sequi ut.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input data-image="yeezy" type="radio" id="yeezy" name="color" value="yeezy" checked>
                <label for="yeezy"><span></span></label>
              </div>
              <div>
                <input data-image="orange" type="radio" id="orange" name="color" value="orange">
                <label for="orange"><span></span></label>
              </div>
              <div>
                <input data-image="peach" type="radio" id="peach" name="color" value="peach">
                <label for="peach"><span></span></label>
              </div>
            </div>

          </div>

          <!-- Product Configuration -->
          <div class="cable-config">
            <span>Product Configuration</span>

            <div class="cable-choose">
              <button>Config 1</button>
              <button>Config 2</button>
              <button>Config 3</button>
            </div>

            <a href="#">Help</a>
          </div>
        </div>

        <!-- Harga -->
        <div class="product-price">
          <span>Rp 5.000.000</span>
          <a href="#" class="cart-btn">Tambahkan Ke Keranjang</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="{{ asset('detail-product/script.js') }}" charset="utf-8"></script>
  </body>
</html>
