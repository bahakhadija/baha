function afficher(id)
{
  if (document.getElementById(id).style.display == 'none')
  {
       document.getElementById(id).style.display = 'block';
	   document.getElementById('div').style.display = 'none';
  }
  else 
  {
       document.getElementById(id).style.display = 'none';
  }
}
function ajouterPersonnel(){
	//document.getElementById('ajoutPersonnel').style.display = "block";
}
$(function() {
	//----- OPEN
	$('[data-popup-open]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

		e.preventDefault();
	});

	//----- CLOSE
	$('[data-popup-close]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

		e.preventDefault();
	});
});