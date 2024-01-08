<h1>Thêm loại món ăn</h1>
<hr />
<div class="row">
    <div class="col-md-4">
        <form action="index.php?controller=Category&action=addnew" method="post">
            <div class="text-danger"></div>
            <input type="hidden"/>
            <div class="form-group">
                <label  class="control-label">Tên loại món ăn</label>
                <input  class="form-control" name="title" id="title"  required value=""/>
                <span class="text-danger"></span>
            </div>
            <div class="form-group">
                <label  class="control-label">Tên ảnh đại diện</label>
                <input type="file" name="image_name" id="image_name"   class="form-control" required value=""/>
                <span  class="text-danger"></span>
            </div>
            <div class="form-group">
                <label  class="control-label">bán chạy</label>
                <select name="featured" id="featured" class="form-control">
                    <option>yes</option>
                    <option>no</option>
                </select>
                <span  class="text-danger"></span>
            </div>
            <div class="form-group">
                <label  class="control-label">active</label>
                <select name="active" id="active" class="form-control">
                    <option>yes</option>
                    <option>no</option>
                </select>
                <span  class="text-danger"></span>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary" >SAVE</button>
            </div>
        </form>
    </div>
</div>

<div>
    <a asp-action="Index">Back to List</a>
</div>