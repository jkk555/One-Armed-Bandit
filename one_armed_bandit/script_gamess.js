
/*Last modification 22.02.2021*/
let wylosowane_zdjecie = [];
let n = 0;
var money = 3491;
let rate_number = 1;
let credit = 59;
let click = 0;
let test = 0;
let odebranyKredyt = false;

$(document).ready(function () {

    $("#download").load("pobierz.php");

    $("#start").bind("click", function ()
    {
        if (test==0)
        {
            money = ($("#download").text());
            test++;
        }

        let url = "record_money.php?send_money="+money;
        $.get(url);

        add_credit();


        $(".fruits").removeClass("win");

        if (money > 0) {
            switch (rate_number) {
                case 1:
                    money -= 10;
                    break;
                case 2:
                    money -= 25;
                    break;
                case 3:
                    money -= 100;
                    break;
            }
        }

        if (money > 0) {
            credit -= 1;
            generate("1");
            generate("2");
            generate("3");
        }

        setPrize();

        $("#start").bind("click", function ()
        {


            $("#test").toggleClass("zoomInDown");


        });

        $("#money").text("Money: " + money);
        $("#credit").text("Do kredytu zostało: " + credit);
        $("#send_money").text(money);


        click++;

        $("#send_money").val(money);





        n = 0;
    });


    $("#test").bind("click", function ()
    {
        rate_number = 1;
        credit = 59;
        $("#rates").text("Rate: " + rate_number);
        $("#credit").text("free credit for: " + credit);
    });

    $("#rate2").bind("click", function ()
    {
        rate_number = 2;
        credit = 59;
        $("#rates").text("Rate: " + rate_number);
        $("#credit").text("free credit for: " + credit);
    });

    $("#rate3").bind("click", function ()
    {
        rate_number = 3;
        credit = 59;
        $("#rates").text("Rate: " + rate_number);
        $("#credit").text("free credit for: " + credit);
    });

    function add_credit() {
        if (credit % 60 === 0) {
            credit = 60;
            money += 500;
        }
    }

    function addImage(location, slot)
    {
        $(slot).attr("src", "Images/"+location);
    }

    function generate(name_photo) {

        let slot = "#" + name_photo;

        let ticket = Math.floor(Math.random() * 7) + 1;

        wylosowane_zdjecie[n] = ticket;

        switch (ticket) {
            case 1:
                addImage("strawberry.png", slot)
                break;

            case 2:
                addImage("grapes.png", slot)
                break;

            case 3:
                addImage("orange.png", slot)
                break;

            case 4:
                addImage("plum.png", slot)
                break;
            case 5:
                addImage("pineapple.png", slot)
                break;
            case 6:
                addImage("cherry.png", slot)
                break;
            case 7:
                addImage("watermelon.png", slot)
                break;
        }

        n++;

    }

    function setMoney(doladowanie)
    {
        money = money+(doladowanie*rate_number);
    }

    function setPrize() {
        if (n >= 3 && (wylosowane_zdjecie[0] === wylosowane_zdjecie[1] && wylosowane_zdjecie[1] === wylosowane_zdjecie[2])) {
            $(".fruits").toggleClass("win");
           // $(".fruits").

            switch (wylosowane_zdjecie[0]) {
                case 1:
                    setMoney(25);
                    break

                case 2:
                    setMoney(50);
                    break

                case 3:
                    setMoney(75);
                    break

                case 4:
                    setMoney(100);
                    break
                case 5:
                    setMoney(125);
                    break
                case 6:
                    setMoney(150);
                    break
                case 7:
                    setMoney(200);
                    break


            }

        }
    }

});




