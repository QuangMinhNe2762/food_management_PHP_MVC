<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Danh mục sản phẩm</h4>
            <p><?= $tempdata?></p>
            <a href="index.php?controller=Product&action=form_addnew">Thêm sản phẩm</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>
                                Id
                            </th>
                            <th>
                                Tên món ăn
                            </th>
                            <th>
                                giá
                            </th>
                            <th>
                                Ảnh đại diện
                            </th>
                            <th>
                                Mã loại
                            </th>
                            <th>
                                Chức năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                            foreach($ListProduct as $item)
                            {
                            ?>
                            <tr>
                                <td>
                                    <?=  $item["id"] ?>
                                </td>
                                <td>
                                    <?=  $item["title"] ?>
                                </td>
                                <td>
                                    <?=  $item["price"] ?>
                                </td>
                                <td>
                                    <img src="../foot_order_mvc/Core/assets/images/food/<?=  $item["image_name"]?>" alt=<?=  $item["title"] ?>>
                                </td>
                                <td>
                                <?=  $item["category_id"] ?>
                                </td>
                                <td>
                                  <a href="index.php?controller=Product&action=form_editproduct&id=<?= $item['id']?>">Edit</a> |
                                  <a href="index.php?controller=Product&action=detailproduct&id=<?= $item['id']?>">Details</a> |
                                  <a href="index.php?controller=Product&action=deleteproduct&id=<?= $item['id']?>">Delete</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
