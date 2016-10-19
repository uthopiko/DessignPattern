<html>

<body>


<div style="display:flex">
    <div class="room" style="width:40%;">
        <h1>Ticketbis General</h1>
    </div>
    <div class="participantes">
        <h1>Bots</h1>
        <?php
        foreach($participants as $key => $value) {
            echo "<li>".$value." <a href='#' data-value='".$value."'<button>Unirse</button></a></li>";
        }
        ?>

    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
   $("a").on("click", function() {

   });
});
</script>
</body>


</html>