<div class="megacleaned">
    <?php print $content; ?>
</div>
<div class="megasub"></div>


<style>

    .megacleaned {
        position: relative;
    }

    .megacleaned .nav {
        display: block;
        position: relative;
    }

    .megacleaned .nav .item {
        float: right;
        padding-left: 20px;
    }


    .megasub {
        position: fixed;
        left: 0;
        right: 0;
        top:100%;
        background-color: black;
    }

    .megasub > .item-submenu {
        background-color: gray;
        position: absolute;
        left: 0;
        right: 0;
        width: auto;
        margin: auto;

        padding-top: 30px;
        padding-bottom: 30px;
    }

    .megasub .column {
        width: 20%;
        float: left;
    }


    .megasub .column .column{
        width: 100%;
        float: none;
    }

    .row {
        margin-top: 30px;
    }


</style>

<script>
    jQuery(".megacleaned > .nav > .item-submenu").each(function() {
        var sub = jQuery(this);
        jQuery(".megasub").append(sub);

        //.insertAfter(sub);

    });
</script>
