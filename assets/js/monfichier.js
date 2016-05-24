$(document).ready(function() {
    			var $mois = $('#mois');
    			     
    		// chargement des mois 

  			    $.ajax({
			        url: "<?php echo base_url(); ?>" + "CodeIgniter-3.0.3/index.php/fiche/index/$id/",
			        data: 'go', // on envoie $_GET['go']
			        dataType: 'json', // on veut un retour JSON
			        success: function(json) {
			            $.each(json, function(index, value) { // pour chaque noeud JSON
			                // on ajoute l option dans la liste
			                $mois.append('<option value="'+ index +'">'+ value +'</option>');
			            });
			        }
			    });

			  }