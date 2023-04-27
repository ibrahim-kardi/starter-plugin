<div class="wrap">
    <h1><?php _e('Edit Address Book', 'starter') ?></h1>
  <?php if(isset($_GET['address-updated'])){?>
    <div class="notice notice-success"><p><?php _e('Address has been updated successfully','starter');?></p></div>
  <?php }?>
    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="name"><?php _e('Name','starter')?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="<?php echo esc_attr($addresses->name);?>">
                        <?php if($this->has_error('name')){?>
                            <p class="description error"> <?php echo $this->get_error('name');?></p>

                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="adress"><?php _e('Adress','starter')?></label>
                    </th>
                    <td>
                        <textarea name="adress" id="adress" cols="40" rows="4"><?php echo esc_attr($addresses->address);?></textarea>
                    </td>
                </tr>
                <tr class="row <?php echo $this->has_error('phone') ? 'form-invalid' : ''; ?>">
                    <th scope="row">
                        <label for="phone"><?php _e('Phone','starter')?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="<?php echo esc_attr($addresses->phone);?>">
                        <?php if($this->has_error('phone')){?>
                            <p class="description error"> <?php echo $this->get_error('phone');?></p>

                        <?php } ?>
                    </td>
                </tr>
                

            </tbody>
        </table>
        <input type="hidden" name="id" value="<?php echo esc_attr($addresses->id); ?>">
        <?php wp_nonce_field('new-address');?>
        <?php submit_button(__('Edit Adress','starter'),'primary','submit_address');?>
    </form>
   
</div>