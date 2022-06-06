<div class="wrap">

    <h1 class="wp-heading-inline"><?php _e( 'Address book', 'practice_crud' );?></h1>

    <a href="<?php echo admin_url( 'admin.php?page=practice_crud&action=new', 'admin'  ) ?>" class="page-title-action"><?php _e( 'Add new', 'practice_crud' ) ?></a>

    <?php if ( isset( $_GET['inserted'] ) ) { ?>
        <div class="notice notice-success">
            <p><?php _e( 'Address has been added successfully!', 'practice_crud' ); ?></p>
        </div>
    <?php } ?>

    <?php if ( isset( $_GET['address-deleted'] ) && $_GET['address-deleted'] == 'true' ) { ?>
        <div class="notice notice-success">
            <p><?php _e( 'Address has been deleted successfully!', 'wedevs-academy' ); ?></p>
        </div>
    <?php } ?>

    <form action="" method="post" >
        <?php
        $table = new Crud\Tutorial\Admin\Address_List();
        $table->prepare_items();
        $table->search_box( 'search', 'search_id' );// by default function
        $table->display();// by default function
        ?>
   </form>

</div>