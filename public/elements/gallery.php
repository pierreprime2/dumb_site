<div>
    <table style="width: 50%" id="centered_gallery_table_header" class="<?= $theme.'_main_bold_border' : 'blue_main_bold_border' ?>">
        <tr>
            <!-- change to generic window header -->
            <th id="gallery_header" class="<?= $theme.'_main_background' ?>"><h2>Gallery - Demo_image.jpeg</h2></th>
            <th id="close_gallery_button" class="<?= $theme ?>_main_color" width="20%">[X]</th>
        </tr>
    </table>
    <table id="centered_gallery_table" class="<?= $theme.'_main_bold_border' : 'blue_main_bold_border' ?>">
        <tr>
            <td id="gallery_core">
                <!-- display image here -->
                <img id="gallery_img" src="../assets/images/gallery/blade_runner.jpg" alt="">
            </td>
        </tr>
        <tr>
            <td id="gallery_ctrl_row">
                <!-- display gallery controls here -->
                <span class="gallery_ctrl gallery_arr left <?= $theme.'_sec_color' : 'blue_sec_color' ?>"><-</span>
                <span id="dl_link" class="gallery_ctrl <?= $theme.'_main_background' ?>">Download HQ</span>
                <span class="gallery_ctrl gallery_arr right <?= $theme.'_sec_color' : 'blue_sec_color' ?>">-></span>
            </td>
        </tr>
    </table>
    <table id="centered_gallery_table_footer" class="<?= $theme.'_main_bold_border '.$theme.'_main_background' : 'blue_main_bold_border blue_main_background' ?>">
        <!-- also display keys here (or on website footer) -->
        <tr>
            <td id="gallery_footer" class="<?= $theme.'_main_background' ?>">Night City encrypted gallery, v1.2 Copyright Ono Sendai Corp</td>
        </tr>
    </table>
</div>