document.getElementById("click_block").onclick = () => {
    var div_scroll = document.getElementById("div_scroll");
    var my_image = document.getElementById("my_image");
    var my_image5 = document.getElementById("my_image5");
    var my_image6 = document.getElementById("my_image6");
    var my_image7 = document.getElementById("my_image7");
    var my_image1 = document.getElementById("my_image1");
    var my_image2 = document.getElementById("my_image2");
    var my_image3 = document.getElementById("my_image3");
    var my_image4 = document.getElementById("my_image4");
    var click_arrow = document.getElementById("click_arrow");
    var click_arrow1 = document.getElementById("click_arrow1");
    var styleElem = document.head.appendChild(document.createElement("style"));

    div_scroll.style.display = "inline-block";
    my_image.style.width = "630px";
    my_image.style.height = "580px";
    my_image1.style.width = "100px";
    my_image1.style.height = "100px";
    my_image2.style.width = "100px";
    my_image2.style.height = "100px";
    my_image3.style.width = "100px";
    my_image3.style.height = "100px";
    my_image4.style.width = "100px";
    my_image4.style.height = "100px";
    my_image5.style.width = "630px";
    my_image5.style.height = "580px";
    my_image6.style.width = "630px";
    my_image6.style.height = "580px";
    my_image7.style.width = "630px";
    my_image7.style.height = "580px";
    click_arrow.style.width = "60px";
    click_arrow.style.height = "60px";
    click_arrow.style.fontSize = "50px";
    click_arrow1.style.width = "60px";
    click_arrow1.style.height = "60px";
    click_arrow1.style.fontSize = "50px";
    styleElem.innerHTML = ".container1:before {display: block;}";
}

document.getElementById("click_icon").onclick = () => {
    var div_scroll = document.getElementById("div_scroll");
    var my_image = document.getElementById("my_image");
    var my_image5 = document.getElementById("my_image5");
    var my_image6 = document.getElementById("my_image6");
    var my_image7 = document.getElementById("my_image7");
    var my_image1 = document.getElementById("my_image1");
    var my_image2 = document.getElementById("my_image2");
    var my_image3 = document.getElementById("my_image3");
    var my_image4 = document.getElementById("my_image4");
    var click_arrow = document.getElementById("click_arrow");
    var click_arrow1 = document.getElementById("click_arrow1");
    var styleElem = document.head.appendChild(document.createElement("style"));

    div_scroll.style.display = "none";
    my_image5.style.width = "0px";
    my_image6.style.height = "0px";
    my_image1.style.height = "0px";
    my_image1.style.width = "0px";
    my_image.style.width = "0px";
    my_image7.style.height = "0px";
    my_image2.style.height = "0px";
    my_image2.style.width = "0px";
    my_image3.style.height = "0px";
    my_image3.style.width = "0px";
    my_image4.style.height = "0px";
    my_image4.style.width = "0px";
    click_arrow.style.width = "0px";
    click_arrow.style.height = "0px";
    click_arrow.style.fontSize = "0px";
    click_arrow1.style.width = "0px";
    click_arrow1.style.height = "0px";
    click_arrow1.style.fontSize = "0px";
    styleElem.innerHTML = ".container1:before {display: none;}";
};

document.getElementById("click_arrow1").onclick = () => {
    let xPos = Number(my_image.style.marginLeft.replace("px", ""));
    xPos -= 630;
    my_image.style.marginLeft = xPos + "px";
    if (xPos == -2520) {
        xPos = 0;
        my_image.style.marginLeft = xPos + "px";
    }

    var my_whtie1 = document.getElementById("my_whtie");

    let xPos1 = Number(my_whtie1.style.marginLeft.replace("%", ""));
    xPos1 += 155;
    my_whtie1.style.marginLeft = xPos1 + "%";

    if (xPos1 == 620) {
        xPos1 = 0;
        my_whtie1.style.marginLeft = xPos1 + "%";
    }
};

document.getElementById("click_arrow").onclick = () => {
    let xPos = Number(my_image.style.marginLeft.replace("px", ""));
    xPos += 630;
    my_image.style.marginLeft = xPos + "px";

    if (xPos == 630) {
        xPos = 0;
        my_image.style.marginLeft = xPos + "px";
    }

    var my_whtie1 = document.getElementById("my_whtie");

    let xPos1 = Number(my_whtie1.style.marginLeft.replace("%", ""));
    xPos1 -= 155;
    my_whtie1.style.marginLeft = xPos1 + "%";

    if (xPos1 == -155) {
        xPos1 = 0;
        my_whtie1.style.marginLeft = xPos1 + "%";
    }
};

document.getElementById("p_plus").onclick = () => {
    let my_number = document.getElementById("p_number").innerText++;
    my_number >= 5 ? document.getElementById("p_number").innerText = 5 : "";
};

document.getElementById("p_negative").onclick = () => {
    let my_number = document.getElementById("p_number").innerText--;
    my_number <= 0 ? document.getElementById("p_number").innerText = 0 : "";
};