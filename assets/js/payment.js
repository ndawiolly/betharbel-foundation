const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack(e) {
  e.preventDefault();

  let handler = PaystackPop.setup({
    key: 'pk_test_6d383b063bbe5c8630972ec4438e5fde59409f12', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,

    ref: 'bq' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email, You can put the business name here"
    onClose: function () {
      alert('Window closed.');
    },
    callback: function (response) {
      let message = 'Payment complete! Reference: ' + response.reference;
      axios.get('http://localhost/betharbel_foundation/pay?q='+ response.reference, {
        // ref: response.reference,
        // key: 'Flintstone'
      })
        .then(function (response) {
          const data = response.data;
          if (data.status != 200){
            alert("Verification failed: " + data.message);
          }else{
            alert('Payment Successful')
          }
        })
        .catch(function (error) {
          console.log(error);
        });
      // alert(message);

      //Here you can send a Post request with axios to another php file that will store the payment information on a database
    }

  });
  // console.log(document.getElementById("amount").value * 100);

  handler.openIframe();
}