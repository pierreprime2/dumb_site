<table id="top_bar" class="<?= $theme ?>_main_background">
<tr>
    <td style="width: 12%"></td>
    <td>
        <?= isset($_SESSION['user']) ? $_SESSION['user']['username'] : 'pseudo'; ?>@nightcityterm, you have <strong id="notification" class="<?= $theme ?>_sec_background">(2) new message(s)</strong>
    </td>
    <td>
        ナイトシティターミナル1.1
    </td>
    <td id="crt_toggle" onclick="toggleCRT()" class="<?= $theme ?>_sec_background">
        CRT on
    </td>
    <td id="fin_toggle">
        STOCK OFF
    </td>
<!--    <td id="ip_display">-->
<!--        --><?php
//            $visitor_ip = $_SERVER['REMOTE_ADDR'];
//            echo $visitor_ip . "@nightcityterm";
//        ?>
    <td id="terminal_mentions"><span id="current_time"></span></td>
    <td class="right_offset"></td>
</tr>

<tr hidden id="fin_bar">
    <td style="width: 12%"></td>
    <td id="scroll_test_container">
<!--        <div class="scrolling_text" id="cryptoData">-->
<!--        </div>-->
        <div class="scrolling_text">blablabla</div>
        <!-- cryptocurrencies prices -->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
    </td>
    <td style="width: 12%"></td>
</tr>
</table>