$(document).ready(function() {
			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image()
					images[i].src = preload.arguments[i]
				}
			}
			preload(
				"../images/2-13.png",
				"../images/1-8.png",
				"../images/3-31.png"
			)

	changeImageTo = function ($image) {
		var swapSrc = [];
		if ($image == 'cardOne'){
			swapSrc = ["cardOne","../images/2-13.png"];
		} else if ($image == 'cardTwo'){
			swapSrc = ["cardTwo","../images/1-8.png"];
		} else if ($image == 'cardThree'){
			swapSrc = ["cardThree","../images/3-31.png"];
		}
		//document.getElementById(swapSrc[0]).src=swapSrc[1];

		$("#" + swapSrc[0]).fadeIn('slow', function(){
            $("#" + swapSrc[0]).attr("src", swapSrc[1]);
        });

        $("#hoverNotify").remove();
	}

	changeImageBack = function ($images) {
		var swapSrc = [];
		if ($images == 'cardOne'){
			swapSrc = ["cardOne","../images/2-back.png"];
		} else if ($images == 'cardTwo'){
			swapSrc = ["cardTwo","../images/1-back.png"];
		} else if ($images == 'cardThree'){
			swapSrc = ["cardThree","../images/3-back.png"];
		}
		document.getElementById(swapSrc[0]).src=swapSrc[1];
	}
});
