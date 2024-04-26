var MainImg = document.getElementById("MainImg");
var smallimg = document.getElementsByClassName("small-img");

smallimg[0].onclick = function()
{
    MainImg.src = smallimg[0].src;
}
smallimg[1].onclick = function()
{
    MainImg.src = smallimg[1].src;
}
smallimg[2].onclick = function()
{
    MainImg.src = smallimg[2].src;
}
smallimg[3].onclick = function()
{
    MainImg.src = smallimg[3].src;
}

const bar1 = document.getElementById('bar1');
const nav = document.getElementById('bar');
const close = document.getElementById('close');

if(bar1)
{
    bar1.addEventListener('click', () => {
        nav.classList.add('active')
})
}

if(close)
{
    close.addEventListener('click', () => {
        nav.classList.remove('active')
})
}

function addToCart()
{   window.alert("Item added to Cart");
    var table = document.getElementById("mytable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    var img1 = document.createElement('img');
    img1.src = 'img/product/p1.jpg';
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);
    cell1.innerHTML = "Yash";
    cell2.innerHTML = "yk737@jbndf";
    cell3.innerHTML = "jaksbdh";
    

}