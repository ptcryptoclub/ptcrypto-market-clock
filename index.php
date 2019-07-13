<?php

<form name="Tick">
<input type="text" size="12" name="Clock">
</form>
<script type="text/javascript">
function show(){
    var hours="<?php echo $myhour; ?>"
    var minutes="<?php echo $mymin; ?>"
    var seconds="<?php echo $mysec; ?>"
    var dn="AM"
    if (hours>12){
        dn="PM"
        hours=hours-12
        //this is so the hours written out is in 12-hour format, instead of the default //24-hour format.
    }
    if (hours==0)
        hours=12
    //this is so the hours written out when hours=0 (meaning 12a.m) is 12
    if (minutes<=9)
        minutes="0"+minutes
    if (seconds<=9)
        seconds="0"+seconds
    document.Tick.Clock.value=
    hours+":"+minutes+":"+seconds+" "+dn
    setTimeout("show()",1000)
}
    show()
</script>
?>
