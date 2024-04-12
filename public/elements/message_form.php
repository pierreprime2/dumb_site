<tr id="message_form_container">
    <td class="<?= $theme ?>_sec_border">
        <form action="" id="message_form" class="<?= $theme ?>_sec_color">
            <label for="topic">Topic: </label><input style="display: inline" id="topic" type="text"
                                                     class="<?= $theme ?>_sec_border">
            <label for="message">Message: </label>
            <textarea class="<?= $theme ?>_sec_color <?= $theme ?>_sec_border" name="" id="message"
                      placeholder="Write your message here. Encrypted by our technology." cols="30"
                      rows="10"></textarea>
            <input type="submit" class="<?= $theme ?>_sec_color"
                   class="<?= isset($_SESSION['user']) ? $user['favorite_theme'] : 'blue'; ?>_sec_color">
        </form>
    </td>
</tr>