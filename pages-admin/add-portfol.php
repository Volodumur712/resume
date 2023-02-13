
<div class="container">
    <div id="ajaxStatus"></div>

    <form class="form-group" enctype="multipart/form-data" action="#" method="post" id="formTwit">
        <div class="text-center m-5">
            <input type="text" name="title" placeholder="    Title" style="width: 70%;"class="border border-success rounded-pill border-3">
        </div>

        <div class="m-3 p-5 border border-success rounded-3 border-3">
            <label for="image" class="form-label">Main image</label>
            <input class="form-control" type="file" name="image" id="twitImage" multiple>
        
        <label for="description" class="text-center m-3">Main picture description</label>    
        <textarea class="form-control" name="description" id="description" rows="3" value="description"></textarea>
        </div>

        <div class="text-center m-3">
            <input type="text" name="hrefka" value="https://" style="width: 70%;">
        </div>
        
        <div class="text-center m-3">
            <label for="filter" class="form-label">Filter</label>
                <input class="form-control" name="filter" list="datalistOptions" id="Filter" placeholder="Select ...">
                <datalist id="datalistOptions">
                <option value="filter-js">
                <option value="filter-html">
                <option value="filter-php">
            </datalist>
        </div>

        <div class="m-3 p-5 border border-primary rounded-pill border-3">
            <label for="fon_image" class="form-label">Fon picture</label>
            <input class="form-control" type="file" name="fon_image" id="fon_image" multiple>
        
            <label for="fon_img_desc" class="text-center m-3">Fon picture description</label>    
            <textarea class="form-control" name="fon_img_desc" id="" rows="3" value="fon_img_desc"></textarea>
        </div>

        <div class="m-3 p-5 border border-warning rounded-pill border-3">
            <label for="fon_2" class="form-label">Fon 2</label>
            <input class="form-control" type="file" name="fon_2" id="fon_2" multiple>
        
            <label for="fon_desc2" class="text-center m-3">Fon 2 description</label>    
            <textarea class="form-control" name="fon_desc2" id="" rows="3" value="fon_desc2"></textarea>
        </div>

        <div class="m-3 p-5 border border-info rounded-pill border-3">
            <label for="fon_3" class="form-label">Fon 3</label>
            <input class="form-control" type="file" name="fon_3" id="fon_3" multiple>
        
            <label for="fon_desc3" class="text-center m-3">Fon 3 description</label>    
            <textarea class="form-control" name="fon_desc3" id="" rows="3" value="fon_desc3"></textarea>
        </div>

        <button class="btn btn-success">Send</button>
    </form>
</div>

