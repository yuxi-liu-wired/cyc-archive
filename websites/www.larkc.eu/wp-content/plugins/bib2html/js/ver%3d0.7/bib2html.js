
var $j = jQuery.noConflict();
$j(document).ready(function()
	{
	  // Toggle Single Bibtex entry
	  $j('a.toggle').click(function()
		{   $j( $j(this).attr("href") ).toggle();
		    return false;
		});

	});

