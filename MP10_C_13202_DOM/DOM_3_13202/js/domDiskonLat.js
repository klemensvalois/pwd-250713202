var totalEl;
var totalNode;
var hematNode;

function init() {
	totalEl = document.getElementById("totalBayar");
	totalNode = totalEl.firstChild;
	hematNode = document.getElementById("infoHemat").firstChild;
	hitungTotal();
}

function hitungTotal() {
	var harga = parseFloat(document.getElementById("harga").value);
	var diskon = parseFloat(document.getElementById("diskon").value);

	if (isNaN(diskon) || diskon < 0 || diskon > 100) {
		totalNode.data = "Diskon tidak valid!";
		totalEl.style.color = "red";
		hematNode.data = "0";
	} else {
		var potongan = harga * (diskon / 100);
		var akhir = harga - potongan;

		totalNode.data = akhir;
		totalEl.style.color = "green";
		hematNode.data = potongan;
	}
}