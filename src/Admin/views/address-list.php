<div class="wrap">
    <h1 class="wp-heading-inline"><?php _e('Address Book', 'starter') ?></h1>
    <a href="<?php echo admin_url('admin.php?page=starter&action=new');?>" class="page-title-action">Add New</a>
    <?php if(isset($_GET['inserted'])){?>
    <div class="notice notice-success"><p><?php _e('Address has been inserted successfully','starter');?></p></div>
  <?php }?>
    <form action="" method="post">
        <?php
        $table = new Webtop\StarterPlugin\Admin\Address_List();
        $table->prepare_items();
        $table->search_box( 'search', 'search_id' );
        $table->display();
        ?>
    </form>
</div>