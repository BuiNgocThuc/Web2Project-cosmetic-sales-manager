    const discount = () => {
        let totalPrice = parseInt($("#totalPrice").text().replace(/,/g, ''));
    console.log(totalPrice);
    $.ajax({
        url: "setDiscount.php",
        type: "POST",
        data: { totalPrice: totalPrice },
        success: function (data) {
        if (data != "null") {
            $("#currentDiscount").html(data);
        } else {
            console.log(data);
        }
        },
    });
    };
