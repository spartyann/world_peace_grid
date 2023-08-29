

function updateGrid() {
	let isFr = $("#wp_grid_fr")[0].checked;
	let isEn = !isFr;

	let svgObject = document.getElementById('wp_grid').contentDocument;
	if (svgObject == null) return; // Not loaded

	let $svgObject = $(svgObject);

	if (isEn) { $svgObject.find("#text_fr").hide(); $svgObject.find("#text_en").show() };
	if (isFr) { $svgObject.find("#text_en").hide(); $svgObject.find("#text_fr").show() };

	let bg_color = $("#wp_grid_bg_color").val();
	$svgObject.find("#background>path").css("fill", bg_color);

	let border_color = $("#wp_grid_border_color").val();
	$svgObject.find("#border>path").css("fill", border_color);

	let icon_color = $("#wp_grid_icon_color").val();
	$svgObject.find("#icons>g>path").css("fill", icon_color);

	let text_color = $("#wp_grid_text_color").val();
	$svgObject.find("#texts>g>g>path").css("fill", text_color);


	let wp_grid_wood_arround = $("#wp_grid_wood_arround").is( ":checked" );
	if (wp_grid_wood_arround) { $svgObject.find("#background_arround").hide() }
	else { $svgObject.find("#background_arround").show(); }

	let wp_grid_wood = $("#wp_grid_wood").val();
	$svgObject.find("#background_wood>use").css("opacity", wp_grid_wood/100)

	
}

function exportToPdf(a3 = false)
{
	let preview = false;
	let svg = $(document.getElementById('wp_grid').contentDocument).find("svg")[0].outerHTML;
	let gridWidhCmInput =$("#wp_grid_size").val();

	// Add 2% to includebackground arround
	let gridWidhCm = gridWidhCmInput * 1.04;

	const doc = new window.PDFDocument({size: a3 ? 'A3' : 'A4'});
	const pageWidth = a3 ? 29.7 : 21;
	const pageHeight = a3 ? 42 : 29.7;

	const chunks = [];
	const stream = doc.pipe({
		// writable stream implementation
		write: (chunk) => chunks.push(chunk),
		end: () => {

			if (preview)
			{
				const pdfBlob = new Blob(chunks, {
					type: 'application/pdf'
					//type: 'application/octet-stream'
				});
				var blobUrl = URL.createObjectURL(pdfBlob);
				window.open(blobUrl);
			}
			else
			{
				const a = document.createElement("a");
				const pdfBlob = new Blob(chunks, {
					type: 'application/pdf'
					//type: 'application/octet-stream'
				});
				a.href = URL.createObjectURL(pdfBlob);

				a.setAttribute("download", "world_peace_grid_" + (a3 ? "A3": "A4") + "_" + gridWidhCmInput + "cm.pdf");
				a.setAttribute("target", "_blank");
				document.body.appendChild(a);
				a.click();
				document.body.removeChild(a);
			}
		},

		// readable streaaam stub iplementation
		on: (event, action) => {},
		once: (...args) => {},
		emit: (...args) => {},
	});

	// 2.54cm = 25.4mm = 72pt
	const ptToCm = 72 / 2.54;


	window.SVGtoPDF(doc, svg, (pageWidth - gridWidhCm) / 2 * ptToCm, 0, {
		width: gridWidhCm * ptToCm
	});

	doc.end();
}


$(() => {
	$('#wp_grid').ready(() => { updateGrid(); })
	setTimeout(updateGrid, 100);
	setTimeout(updateGrid, 1000);

	$("#wp_grid_fr, #wp_grid_en, #wp_grid_bg_color, #wp_grid_border_color, #wp_grid_icon_color, #wp_grid_text_color, #wp_grid_wood_arround, #wp_grid_wood").change(updateGrid);
	$("#wp_grid_bg_color, #wp_grid_border_color, #wp_grid_icon_color, #wp_grid_text_color, #wp_grid_wood").on('input',updateGrid);

})


