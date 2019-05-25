<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h4 class="mb-4">Add Employees</h4>
                <form action="" method="post">
                   <input type="hidden" name="id" value="<?php echo $result['id'] ;?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $result['name'] ;?>" aria-describedby="emailHelp" placeholder="Enter name"> 
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" value="<?php echo $result['city'] ;?>" aria-describedby="emailHelp" placeholder="Enter city"> 
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" name="designation" value="<?php echo $result['designation'] ;?>" aria-describedby="emailHelp" placeholder="Enter designation"> 
                    </div>                    
                    <input type="submit" name="update" class="btn btn-primary" value="Update">
                </form>
            </div>
        </div>
    </div>
</div>
