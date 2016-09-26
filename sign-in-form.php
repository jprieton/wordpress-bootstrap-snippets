  <form action="<?php echo admin_url( 'admin-ajax.php' ) ?>" id="login" class="ajax-form">
    <div class="ajax-response"></div>
    <div class="form-group">
      <label for="register_user_email"><?php _e( 'Your Email', 'textdomain' ) ?></label>
      <input type="email" class="form-control" id="register_user_email" name="user_email" required="required" />
    </div>
    <div class="form-group">
      <label for="register_user_password"><?php _e( 'Your Password', 'textdomain' ) ?></label>
      <input type="password" class="form-control" id="register_user_password" name="user_password" required="required" />
    </div>
    <?php wp_nonce_field( 'send_register_form' ) ?>
    <input type="hidden" name="action" value="send_register_form">
    <div class="form-group">
      <button type="submit" class="btn btn-primary"><?php _e( 'Sign in', 'textdomain' ) ?></button>
    </div>
  </form>
