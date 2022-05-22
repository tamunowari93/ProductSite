<?php
<span id="sku" style="border: 1px solid; border-radius: 2px; padding: 18px; width: 200px; font-family:bold helvetica 15;">
<input type="checkbox" name="sku[]" value="products">
<p style="text-align:center; line-height: .8em;">SKU</p>
<p style="text-align:center; line-height: .8em;">Name</p>
<p style="text-align:center; line-height: .8em;">Price</p>
<p style="text-align:center; line-height: .8em;">Dimensions</p>
?>



<script>
const xmlhttp = new XMLHttpRequest();
xhttp.onload = function() {
    const myObj = JSON.parse(this.responseText);
    let text = "";
    for (let x in myObj) {
        text += myObj[x].name + "<br>";
        text += obj.sku + ' <br>';
        text += obj.name + '<br>';
        text += obj.price + '<br>';
        text = obj.type + '<br>';
        text = obj.description + '<br>';
    }
    document.getElementById("sku").innerHTML = text;
}
xhttp.open("GET", "./viewProducts.php");
xhttp.setRequestHeader("Content-type", "application/json");
xhttp.send("x");



<?php while ($prodFrn = $furniture->fetch_object()) {?>
<?php print_r($prodFrn->$sku.value); ?>
<?php }?>
</script>