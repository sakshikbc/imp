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
            <?php foreach ($products as $product): ?>
              <?php foreach ($product as $pro): ?>
                
              <li><a href="{{ route('product', $pro->url ) }}"><img src={{ asset( $pro->image) }} class="img-thumbnail"></a>
                <span style="text-align:center;">&#8377; {{ $pro->original_price }}</span><br></li>
              <?php endforeach ?>
                
              <?php endforeach ?>
            </ul>
          </div>
        </div>