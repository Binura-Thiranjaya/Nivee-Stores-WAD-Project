var addItemId = 0;
function addToCart(product) {
    addItemId += 1;
    var Item = document.createElement("div");
    Item.classList.add("cartImg");
    Item.setAttribute("id",addItemId);
    var img = document.createElement("img");
    img.setAttribute("src",item.children[0].currentSrc);
    var title = document.createElement("div");
    title.innerText = item.children[1].innerText;
    var price = document.createElement("div");
    price.innerText = item.children[2].children[0].innerText;
    var cardItem = document.getElementById("title");
    Item.append(img);
    cardItem.append(Item);
}