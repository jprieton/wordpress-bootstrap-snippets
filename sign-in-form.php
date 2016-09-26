<form action="<?php echo admin_url( 'admin-ajax.php' ) ?>" id="sign-in-form" class="ajax-form">
  <h2><?php _e( 'Access to your account', 'textdomain' ) ?></h2>
  <div class="ajax-response"></div>
  <div class="form-group">
    <label for="sign_in_user_email"><?php _e( 'Your Email', 'textdomain' ) ?></label>
    <input type="email" class="form-control" id="sign_in_user_email" name="user_email" required="required" />
  </div>
  <div class="form-group">
    <label for="sign_in_user_password"><?php _e( 'Your Password', 'textdomain' ) ?></label>
    <input type="password" class="form-control" id="sign_in_user_password" name="user_password" required="required" />
  </div>
    <div class="checkbox">
      <label for="sign_in_user_rememberme">
        <input type="checkbox" id="sign_in_user_rememberme" name="rememberme" /> <?php _e( 'Remember me', 'textdomain' ) ?>
      </label>
    </div>
  <?php wp_nonce_field( 'send_login_form' ) ?>
  <input type="hidden" name="action" value="send_login_form">
  <div class="form-group">
    <button type="submit" class="btn btn-primary"><?php _e( 'Sign in', 'textdomain' ) ?></button>
  </div>
</form>
