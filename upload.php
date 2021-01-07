
<div class="container-fluid">
<div style="height:100px">
    </div>
    
    <div class="row justify-content-md-center">
        <div class="container">
            <div class="col md-auto">
                    <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="?p=products">Go to Products Page</a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div style="height:10px">
    </div>
    <div class="row justify-content-md-center">
    <div class="container">
        <div class="col md-auto">
        
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">PicDat v1.0</div>
                    <div class="panel-body">

                        <form id="daform" action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="customFile">Select picture:</label>
                                
                                <!-- Upload file  -->
                                <input type="file" class="form-control" id="customFile" name="img" accept="image/*" />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="productname">Product name ( max 20characters )</label>
                                <input type="text" id="productname" name="productname" class="form-control" placeholder="Batman Action Figure">
                                </div>
                            <div class="form-group">   
                                <label for="price">Price</label>
                                <input type="number" id="price" name="price" min="1" max="1000000">
                                </div>
                            <div class="form-group">                                   
                                <label for="desc">Description ( max 150 characters ) </label>
                                <textarea class="form-control"  name="desc" rows="5" id="desc"></textarea>
                                </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div></div>
    
    