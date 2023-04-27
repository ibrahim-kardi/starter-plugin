<div class="wrap">
    <h1><?php _e('New Address Book', 'starter') ?></h1>
    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="name"><?php _e('Name','starter')?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="">
                        <?php if($this->has_error('name')){?>
                            <p class="description error"> <?php echo $this->get_error('name');?></p>

                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="address"><?php _e('Adress','starter')?></label>
                    </th>
                    <td>
                        <textarea name="address" id="address" cols="40" rows="4"></textarea>
                    </td>
                </tr>
                <tr class="row <?php echo $this->has_error('phone') ? 'form-invalid' : ''; ?>">
                    <th scope="row">
                        <label for="phone"><?php _e('Phone','starter')?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="">
                        <?php if($this->has_error('phone')){?>
                            <p class="description error"> <?php echo $this->get_error('phone');?></p>

                        <?php } ?>
                    </td>
                </tr>
                

            </tbody>
        </table>
        <?php wp_nonce_field('new-address');?>
        <?php submit_button(__('Submit Adress','starter'),'primary','submit_address');?>
    </form>
   
</div>