<?php
include("includes/header.php");
?>
<div class="wrapper m-auto">
    <div class="form-left">
        <h2 class="text-uppercase">information</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.
        </p>
        <p class="text">
            <span>Sub Head:</span>
            Vitae auctor eu augudsf ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.
        </p>
        <div class="form-field">
            <input type="submit" class="account" value="Have an Account?">
        </div>
    </div>
    <form class="row  needs-validation form-right m-auto" novalidate>

        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Confirm Password </label>
            <input type="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationCustom03" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <label for="validationCustom05" class="form-label">Phone no</label>
            <input type="tel" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
                Please provide a valid zip.
            </div>
        </div>
        <div class="col-12 form-field">

            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>

    </form>

</div>
<?php
include("includes/scripts.php");
?>