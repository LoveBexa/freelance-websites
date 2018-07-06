
<?php include '_header.php';?>


<section id="introduction">

<div class="wrapper" id="images">

<div class="introCopy"><h2>
Welcome to our gallery. Our meals are prepared from fresh. We have 6 private karaoke rooms varying in sizes and plenty of seating area so that you can eat in comfort. 
</h2> 
<?php include '_gallery-images.php';?>    

</div>
</div>

</section>



<section id="bookingCopy">

<div class="wrapper"><h2>
Located right next to the Odeon Cinema in the Millennium Leisure park, SiChuan Greenwich is the perfect spot for a pre or post cinema meal. Our mouth watering dishes are reasonably priced and traditionally cooked by our top chefs.<br /><br /> Come sample a taste of Sichuan and make your reservation today!   </h2> </div>
<div class="button"><a href="#contact"><span>Book now</span></a></div>
</section>




<script>
var search = "#contact";
var replacement = "contact.php#contact";
document.body.innerHTML = document.body.innerHTML.split(search).join(replacement)
</script>

<?php include '_footer.php';?>