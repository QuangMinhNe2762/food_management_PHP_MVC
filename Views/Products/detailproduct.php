<section class="container"style="background-color: white;height:100vh;border-radius: 50px;">
                    <div class="food-menu-img" >
                        <img src="../foot_order_mvc/Core/assets/images/food/<?= $product['image_name'] ?>" alt="<?= $product['title']?>" class="img-responsive img-curve">
                    </div>
                    <div class="food-menu-desc" style="margin-left: 1%;background-color: white;">
                        <h3><?=$product['title']?></h3>
                        <p class="food-price">$<?= $product['price']?></p>   
                        <p><?= $product['description']?></p>
                        <br>
                        <br>
                    </div>
        </section>