function startPayment(order_id, amount_rupees, userData) {

    var options = {
        key: "rzp_test_RhewhkHD8nUN3q",
        amount: amount_rupees, // in paise already
        currency: "INR",
        name: "Lobster",
        description: "Order Payment",
        image: "https://nawaal-25.github.io/lobster/Logo1-removebg-preview%20CROPED.png",

        order_id: order_id,

        prefill: {
            name: userData.name,
            email: userData.email,
            contact: userData.phone
        },

        notes: {
            address: `${userData.address}, ${userData.city}, ${userData.state}, ${userData.postal}`
        },

        theme: {
            color: "#000000"
        },

        handler: function (response) {

            $.ajax({
                type: "POST",
                url: "payment_success.php",
                data: {
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: response.razorpay_order_id,
                    razorpay_signature: response.razorpay_signature
                },
                success: function () {
                    window.location.href = "thankyou.php";
                }
            });
        }
    };

    var rzp = new Razorpay(options);
    rzp.open();
}
