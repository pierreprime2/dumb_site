<div style="display: none" id="overlay" class="hidden">
    <div>
        <table id="centered_table_header" class="<?= $theme ?>_sec_bold_border">
            <tr>
                <th id="message_header" class="<?= $theme ?>_sec_background"><h2>Your messages</h2></th>
                <th id="close_button" width="20%" class="<?= $theme ?>_sec_color">[X]</th>
            </tr>
        </table>
        <div class="table_container">
            <table id="centered_table" class="<?= $theme ?>_sec_bold_border">
                <tr>
                    <td id="messenger" class="<?= $theme ?>_sec_border">
                        <?php include_once 'messages_list.php' ?>
                        <?php include_once 'message_display.php' ?>
                        <?php include_once 'message_form.php' ?>
                    </td>
                </tr>
            </table>
        </div>
        <?php include_once 'messages_footer.php' ?>
    </div>
</div>