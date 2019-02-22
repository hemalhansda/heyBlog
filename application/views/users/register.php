<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?=$title; ?></h1>
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Zipcode</label>
                <input type="text" placeholder="Zipcode" name="zipcode" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" placeholder="Email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>User Name</label>
                <input type="text" placeholder="User Name" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" placeholder="Confirm Password" name="password2" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </div>
<?php echo form_close(); ?>
