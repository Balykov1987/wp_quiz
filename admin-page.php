<div class="wrap">
    <h1>Quiz page</h1>

<?php

$result = Moverquiz_Admin::get_estimates();
//$id = $result['id'];

?>

<?php foreach($result as $item) :
 $id = $item->id;?>
    
    <form role="form" action="<?php echo admin_url( 'admin-post.php' )?>" method="post">
        <div id="invoice" class="table-wrap">
            <div class="head-table">
                <div class="head-table__left">
                    Order # <?php echo $id;?>
                </div>
                <div class="head-table__right">
                    <div id="collapse" class="open"></div>
                </div>
            </div>
            <div class="body-table">
                <table >     
                    <tr>
                        <td><strong>Name</strong></td>
                        <td>
                            <input type="text" name="user_name" value="<?php echo $item->name;?>" placeholder="<?php echo $item->name;?>">
                        </td>  
                    </tr>
                    <tr>
                    <td><strong>Mail</strong></td>
                        <td>
                            <input type="text" name="user_mail" value="<?php echo $item->mail;?>" placeholder="<?php echo $item->mail;?>">    
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Phone</strong></td>
                        <td>
                            <input type="text" name="user_phone" value="<?php echo $item->phone;?>" placeholder="<?php echo $item->phone;?>">    
                        </td>
                    </tr>    
                </table>
            </div>
            <div class="footer-table">
        
        </div>
        <?php wp_nonce_field( 'action_q', 'q_form_nonce' )?>
        <input name="q_id"  type="hidden" value="<?php echo $id ?>"/>
        <input name="action"  type="hidden" value="content_save"/>
        <button type="submit">Save</button>
    </form> <button >Convert to PDF</button>
</div>   
 
<?php
    endforeach; 
    die;
?>
</div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.js"></script>
 

<script>
      function generatePDF() {
    const element = document.getElementById('invoice');
    html2pdf()
        .from(element)
        .save();
}
 </script>
