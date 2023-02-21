
<div class="container">
    <div id="ajaxStatus"></div>

    <form class="form-group" enctype="multipart/form-data" action="#" method="post" id="formEdit">

        <div class="text-center m-3">
            <input type="text" name="id" placeholder="id" style="width: 70%;">
        </div>

        <div class="m-3 p-5">
            <label for="fon_image" class="form-label">Fon picture</label>
            <input class="form-control" type="file" name="fon_image" id="fon_image" multiple>
        
            <label for="fon_img_desc" class="text-center m-3">Fon picture description</label>    
            <textarea class="form-control" name="fon_img_desc" id="" rows="3" value="fon_img_desc"></textarea>
        </div>
        <button class="btn btn-success">Send</button>
    </form>
</div>
