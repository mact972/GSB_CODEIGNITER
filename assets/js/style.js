$("#mois").on("change", function(){


		if($(this).val() == 0.0){

			$("tab").empty();
		}
		else{

			$get("<?php echo base_url(); ?>" + "index.php/fiche/Chargerfiche", { "titi" : $(this).val() }, foncFiche);

			function foncFiche(data){

				$("#tab").html(data);
			}
		}


});