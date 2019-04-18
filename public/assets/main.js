<div id="monHorloge">...</div>
<script type="text/javascript">
    function Timer() {
        var dt=new Date()
        document.getElementById("wrapper").innerHTML=dt.getHours()+":"+dt.getMinutes()+":"+dt.getSeconds();
        setTimeout("Timer()",900);
        console.log("Exécution de Timer()");
    }
Timer();
</script>