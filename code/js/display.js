function myRadio(sId, type) {
    //方法1:根据传来的ID进行添加,再为兄弟节点添加默认样式(可写作一行,也可分开写)

    $("li[id='" + sId + "']").siblings("li").css({"border": "1px solid #E3E3E3", "opacity": "0.8"});
    $("li[id='" + sId + "']").css({"border": "2px solid #FF6600", "opacity": "1"});

    $("li[id='" + sId + "']").siblings("li").children("input").removeAttr("checked");
    $("input[name='" + type + "'][value='" + sId + "']").attr("checked", "checked");
    //$("input[name='"+type+"'][value='"+sId+"']").children("input").removeAttr("checked");
    //为点击按钮添加选中状态

    //获得选中的值,方便处理
    var chked = $("input[name='" + type + "']:checked").val();
    alert(chked);
};

function myOn(sId) {
    $("li[id='" + sId + "']").css({"opacity": "1"});
};

function myOut(sId) {
    if (!($("li[id='" + sId + "']").children("input").attr("checked") == "checked")) {
        $("li[id='" + sId + "']").css({"opacity": "0.8"});
    }

};

function valide(name) {
    var radio = document.getElementsByName(name);
    for (var i = radio.length - 1; i >= 0; i--) {
        if (radio[i].checked) {
            alert(radio[i].value);
        }
    }
};

function createLi(type, img_url, name, address) {
    var l_name = $("<p class='name'>" + name + "</p>");
    l_name.css({"font-size": "18px"});
    var l_address = $("<p class='address'>" + address + "</p>");
    var div = $("<div class='data'></div>");
    div.css({"margin-left": "15px", "float": "left"});
    div.append(l_name);
    div.append(l_address);
    var img = $("<img src='" + img_url + "'>");
    var input = $("<input type='radio' name='" + type + "' value='" + name + "'></input>");
    var li = $("<li id='" + name + "'></li>");
    li.append(input);
    li.append(img);
    li.append(div);
    $("#" + type).append(li);
};
