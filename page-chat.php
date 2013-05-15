	<?php 
	if($_POST["send"]==1){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$comment=$_POST["comment"];
	$success=1;
	mail("cole@coletownsend.com", "Hello from $name", $comment, "From: $name <$email>");
	}
?>
<div id="bump">
    <?php theme_include('header'); ?>
            <section class="article archive">
              <article class="archive-wrap">
	
	<?php
	if($success==1) { ?>
	
		<div class="confirmation">
			<h1>Thanks for the email!</1h>
		</div>
	
	<?php } ?>
	
	<section class="contact-form">
			<form style="display: block;" action="" method="post">
					<br />
					<input type="hidden" name="send" value="1" />
					<br />
					<div class="form-block">
					<input autofocus class="label-over" name="name" id="name" value="" type="text" placeholder="Name" data-required="true"/>
				</div>
					<br />
					<div class="form-block">
					<input class="label-over" name="email" id="email" type="text" placeholder="Email" data-trigger="change" data-required="true" type="email"/>
				</div>
				<br />
					<textarea name="comment" rows="6" placeholder="Share your thoughts." id="message" name="message" data-trigger="keyup" data-rangelength="[20,200]"></textarea>
					<br />
					<input type="submit" />
				</form>
    <div class="mailer"> <a href="mailto:">Mail</a>
    </div>
	</section>
</div>

<?php theme_include('footer'); ?>

<script>
        $(function() {
    //Hide label when focus on input
      $('.label-over').focus(function() {
        $('label.label-hide[for="' + $(this)[0].id + '"]').hide();
      }).blur(function() {
        if($(this).val() == '') {
          $('label.label-hide[for="' + $(this)[0].id + '"]').show();
        }
      });
    });
</script>

<script type="text/javascript">
 function showHide() {
   var div = document.getElementById('confirmation');
   if (div.style.display == 'none') {
     div.style.display = '';
   }
   else {
     div.style.display = 'none';
   }
 }
</script>
</body>
</html>