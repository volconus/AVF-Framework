<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<style>

    .debugFrame {
        position: absolute;
        bottom: 0px !important;
        right: 0px !important;
        left: 0px !important;
        height: 300px;
        width: 100%;
        border: 1px solid black;
        background-color: #1e1e1e;
        padding: 0px;
        font-family: Arial;
        border: 2px solid black;
        display: none;
        overflow: auto;
    }

    .debugFrameOpen{
        display: block;
    }

    .debugFrameTitle{
        background-color: black;
        padding: 5px;
        position: absolute;
        bottom: 0px;
        color: #f1f1f1;
        font-family: Arial;
        font-size: 13px;
        cursor: pointer;
    }

    .debugFrameTitleOpen{
        bottom: 300px !important;
    }

    .debugFrame table{
        font-size: 13px;
        line-height: 17px;
        width: 100%;
        margin: 0px !important;
    }

</style>


<div class="debugFrameTitle" id="debugPanelTitle">Page Load Time : {end($data['time'])|string_format:"%.4f"}</div>

<div class="debugFrame">

    <table>


        <tr style="color: #f1f1f1">
            <td>Text</td>
            <td>Method</td>
            <td>Line</td>
            <td>Time</td>
        </tr>

        {foreach from=$data['text'] key=k item=text}

            <tr style="color: {$data['color'][$k]};">
                <td>{$text}</td>
                <td>{$data['method'][$k]}</td>
                <td>{$data['line'][$k]}</td>
                <td>{$data['time'][$k]}</td>
            </tr>

        {/foreach}

    </table>

</div>


<script>

    $('#debugPanelTitle').click(function() {
        $('.debugFrameTitle').toggleClass('debugFrameTitleOpen');
        $('.debugFrame').toggleClass('debugFrameOpen');
    });

</script>