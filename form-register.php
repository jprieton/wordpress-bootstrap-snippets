<form action="<?php echo admin_url( 'admin-ajax.php' ) ?>" id="register-form" class="ajax-form">
  <h2><?php _e( 'Create new account' ) ?></h2>
  <div class="ajax-response"></div>
  <div class="form-group">
    <label for="register_user_email"><?php _e( 'Your Email', 'textdomain' ) ?></label>
    <input type="email" class="form-control" id="register_user_email" name="user_email" required="required" />
  </div>
  <div class="form-group">
    <label for="register_user_password"><?php _e( 'Your Password', 'textdomain' ) ?></label>
    <input type="password" class="form-control" id="register_user_password" name="user_password" required="required" />
  </div>
  <div class="form-group">
    <label for="register_user_confirm_password"><?php _e( 'Confirm Your Password', 'textdomain' ) ?></label>
    <input type="password" class="form-control" id="register_user_confirm_password" name="user_confirm_password" required="required" />
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="accept_terms" required="required"> <?php _e( 'Accept Terms & Conditions' ) ?>
    </label>
  </div>
  <?php wp_nonce_field( 'send_register_form' ) ?>
  <input type="hidden" name="action" value="send_register_form">
  <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block"><?php _e( 'Register', 'textdomain' ) ?></button>
  </div>
</form>