<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
<script type="text/javascript">
//Variables
var overlay = $("#overlay"),
fab = $(".fab"),
cancel = $("#cancel"),
submit = $("#submit");

//fab click
fab.on('click', openFAB);
overlay.on('click', closeFAB);
cancel.on('click', closeFAB);

function openFAB(event) {
if (event) event.preventDefault();
fab.addClass('active');
overlay.addClass('dark-overlay');

}

function closeFAB(event) {
if (event) {
event.preventDefault();
event.stopImmediatePropagation();
}

fab.removeClass('active');
overlay.removeClass('dark-overlay');

}
</script>