<div class="wrap">

    <h1><?php _e( 'Edit Address', 'practice_crud' );?></h1>


    <?php if ( isset( $_GET['address-updated'] ) ) { ?>
        <div class="notice notice-success">
            <p><?php _e( 'Address has been updated successfully!', 'practice_crud' ); ?></p>
        </div>
    <?php } ?>

   

    <form action="" method="post">
        <table class="form-table">
            <tbody>
            <tr class="row<?php echo $this->has_error( 'name' ) ? ' form-invalid' : '' ;?>">
                    <th scope="row">
                        <label for="name"><?php _e( 'Name', 'practice_crud' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" value="<?php echo esc_attr( $address->name ) ?>" class="regular-text" >

                        <?php if ( $this->has_error( 'name' ) ) { ?>
                            <p class="description error"><?php echo $this->get_error( 'name' ); ?></p>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="address"><?php _e( 'Address', 'practice_crud' ); ?></label>
                    </th>
                    <td>
                        <textarea class="regular-text" name="address" id="address"><?php echo esc_attr( $address->address ); ?></textarea>
                    </td>
                </tr>
                <tr class="row<?php echo $this->has_error( 'phone' ) ? ' form-invalid' : '' ;?>">
                    <th scope="row">
                        <label for="phone"><?php _e( 'Phone', 'practice_crud' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="<?php echo esc_attr( $address->phone ) ?>">

                        <?php if ( $this->has_error( 'phone' ) ) { ?>
                            <p class="description error"><?php echo $this->get_error( 'phone' ); ?></p>
                        <?php } ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <input type="hidden" name="id" value="<?php echo esc_attr( $address->id ); ?>" />

        <?php wp_nonce_field( 'new-address' ); //to prevent csrf hacking  ?> 
        <?php submit_button( __( 'Update Address', 'practice_crud' ), 'primary', 'submit_address' ); ?>
    </form>

</div>