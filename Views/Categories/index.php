<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Danh mục loại sản phẩm</h4>
            <p><?= $tempdata?></p>
            <a href="index.php?controller=Category&action=form_addnew">Thêm loại sản phẩm</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>
                                Id
                            </th>
                            <th>
                                Tên loại món ăn
                            </th>
                            <th>
                                Ảnh đại diện
                            </th>
                            <th>
                                Chức năng
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                            foreach($ListCatogy as $item)
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
                                    <img src="../foot_order_mvc/Core/assets/images/category/<?=  $item["image_name"]?>" alt=<?=  $item["title"] ?>>
                                </td>
                                <td>
                                  <a href="index.php?controller=Category&action=form_editcategory&id=<?= $item['id']?>">Edit</a> |
                                  <a href="index.php?controller=Category&action=detailcategory&id=<?= $item['id']?>">Details</a> |
                                  <a href="index.php?controller=Category&action=deletecategory&id=<?= $item['id']?>">Delete</a>
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
