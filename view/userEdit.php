<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 13.09.2017
 * Time: 21:48
 */
/**
* Code adapted from Reference Project to fit the requirements of TimeCatcher
 */

include 'landingheader.php';

use domain\User;
use validator\UserValidator;

isset($this->user) ? $user = $this->user : $user = new User();
isset($this->userValidator) ? $userValidator = $this->userValidator : $userValidator = new UserValidator();
?>

<div id="signup-div" style="height:100%;">
    <div class="page-header">
    <form id="signup-form" action="<?php echo $GLOBALS["ROOT_URL"]; ?><?php echo isset($this->pageFormAction) ? $this->pageFormAction : "/register"; ?>" method="post">
        <h1>Sign Up</h1>
        <div class="form-group <?php echo $userValidator->isUsernameError() ? "has-error" : ""; ?>">
            <input class="form-control" type="text" name="username" placeholder="User Name" value="<?php echo $user->getUserName() ?>">
            <p class="help-block"><?php echo $userValidator->getUsernameError() ?></p>
        </div>
        <div class="form-group <?php echo $userValidator->isFirstNameError() ? "has-error" : ""; ?>">
            <input class="form-control" type="text" name="first_name" placeholder="First Name" value="<?php echo $user->getFirstName() ?>">
            <p class="help-block"><?php echo $userValidator->getFirstNameError() ?></p>
        </div>
        <div class="form-group <?php echo $userValidator->isLastNameError() ? "has-error" : ""; ?>">
            <input class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?php echo $user->getLastName() ?>">
            <p class="help-block"><?php echo $userValidator->getLastNameError() ?></p>
        </div>
        <div class="form-group <?php echo $userValidator->isEmailError() ? "has-error" : ""; ?>">
            <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $user->getEmail() ?>">
            <p class="help-block"><?php echo $userValidator->getEmailError() ?></p>
        </div>
        <div class="form-group <?php echo $userValidator->isPasswordError() ? "has-error" : ""; ?>">
            <input class="form-control" type="password" name="password" placeholder="Password">
            <p class="help-block"><?php echo $userValidator->getPasswordError() ?></p>
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit"><?php echo isset($this->pageSubmitText) ? $this->pageSubmitText : "Register Now!"; ?></button>
        </div>
    </form>
</div>

<?php include 'landingfooter.php' ; ?>