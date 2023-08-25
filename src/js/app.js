

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
}

function exportToPdf(a3 = true)
{
	let svg = $(document.getElementById('wp_grid').contentDocument).find("svg")[0].outerHTML;

	console.log(svg);


	const doc = new window.PDFDocument();
	const chunks = [];
	const stream = doc.pipe({
		// writable stream implementation
		write: (chunk) => chunks.push(chunk),
		end: () => {
			/*const pdfBlob = new Blob(chunks, {
				type: 'application/octet-stream'
			});
			var blobUrl = URL.createObjectURL(pdfBlob);
			window.open(blobUrl);*/

			const pdfBlob = new Blob(chunks, {
				type: 'application/pdf'
			});
			var blobUrl = URL.createObjectURL(pdfBlob);
			window.open(blobUrl);

			/*
			const a = document.createElement("a");
			const pdfBlob = new File(chunks, "text.pdf", {
				//type: 'application/octet-stream'
				type: 'application/pdf'
			});
			a.href = URL.createObjectURL(pdfBlob);

			a.setAttribute("download", "world_peace_grid.pdf");
			a.setAttribute("target", "_blank");
			document.body.appendChild(a);
			a.click();
			document.body.removeChild(a);*/
		},

		// readable streaaam stub iplementation
		on: (event, action) => {},
		once: (...args) => {},
		emit: (...args) => {},
	});

	window.SVGtoPDF(doc, svg, 0, 0);

	doc.end();
}


$(() => {
	$('#wp_grid').ready(() => { updateGrid(); })
	setTimeout(updateGrid, 500);

	$("#wp_grid_fr, #wp_grid_en, #wp_grid_bg_color, #wp_grid_border_color, #wp_grid_icon_color, #wp_grid_text_color").change(updateGrid);

})


