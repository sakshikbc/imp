      <div class="side-bar no-padding">

        Categories
        <div class="row">
          <ul class="simple-list">
            <?php foreach ($categories as $category): ?>
              <li>
                <a href="/category/{{ $category->name }}">
                  {{ $category->name }}
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <hr>
        Popular Products
        <div class="row">
          <ul class="simple-list">
            <?php foreach ($mostly_viewed_products as $mostly_viewed_product): ?>
              
              <li><img src={{ asset('product_images/4.jpg')}} class="img-thumbnail">
                {{ $mostly_viewed_product->product_id }}
                <span style="text-align:center;">&#8377; 0.00</span><br></li>
                
              <?php endforeach ?>
            </ul>
          </div>
        </div>