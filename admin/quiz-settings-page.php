<?php
    $data = Moverquiz_Admin::get_admin_mail();
    
    $email = $data['admin_mail_address'] ?? '';
    $id = $data['id'] ?? 0;
?>

<div class="settings">

    <form role="form" action="<?php echo admin_url( 'admin-post.php' )?>" method="post">
    <input type="hidden" value="<?php echo $id ?>">
        <input 
            type="text" 
            name="admin_mail" 
            value="<?php echo $email;?>" 
            placeholder="<?php echo $email;?>">
        
        <?php wp_nonce_field( 'action_s', 's_form_nonce' )?>
        <input name="s_id"  type="hidden" value="<?php echo $id ?>"/>
        <input name="action"  type="hidden" value="settings_save"/>        
        <button type="submit">Save</button>
    <form>

</div>