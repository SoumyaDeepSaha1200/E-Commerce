<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Checkout Page</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Boxicons CSS -->
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
      body {
          height: 120vh !important;
      background-color: #f8f9fa;
    }
    .container {
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2, h4 {
      color: #343a40;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .badge-secondary {
      background-color: #6c757d;
    }
    .list-group-item {
      border: none;
      border-bottom: 1px solid #e9ecef;
    }
    .list-group-item:last-child {
      border-bottom: none;
    }
</style>
<body>
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-8">
                    <h2 class="mb-4">Billing Details</h2>
                    <form>
                         <div class="mb-3">
                              <label for="firstName" class="form-label">First Name</label>
                              <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                         </div>
                         <div class="mb-3">
                              <label for="lastName" class="form-label">Last Name</label>
                              <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                         </div>
                         <div class="mb-3">
                              <label for="email" class="form-label">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="you@example.com"
                                   required>
                         </div>
                         <div class="mb-3">
                              <label for="address" class="form-label">Address</label>
                              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                         </div>
                         <div class="mb-3">
                              <label for="address2" class="form-label">Address 2 <span
                                        class="text-muted">(Optional)</span></label>
                              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                         </div>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="country" class="form-label">Country</label>
                                   <select class="form-select" id="country" required>
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                   </select>
                              </div>
                              <div class="col-md-6 mb-3">
                                   <label for="state" class="form-label">State</label>
                                   <select class="form-select" id="state" required>
                                        <option value="">Choose...</option>
                                        <option>California</option>
                                   </select>
                              </div>
                         </div>
                         <div class="mb-3">
                              <label for="zip" class="form-label">Zip</label>
                              <input type="text" class="form-control" id="zip" placeholder="" required>
                         </div>
                         <hr class="mb-4">
                         <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="same-address">
                              <label class="form-check-label" for="same-address">Shipping address is the same as my
                                   billing address</label>
                         </div>
                         <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="save-info">
                              <label class="form-check-label" for="save-info">Save this information for next
                                   time</label>
                         </div>
                         <hr class="mb-4">
                         <h4 class="mb-3">Payment</h4>
                         <div class="form-check">
                              <input type="radio" class="form-check-input" id="credit" name="paymentMethod" checked
                                   required>
                              <label class="form-check-label" for="credit">Credit card</label>
                         </div>
                         <div class="form-check">
                              <input type="radio" class="form-check-input" id="debit" name="paymentMethod" required>
                              <label class="form-check-label" for="debit">Debit card</label>
                         </div>
                         <div class="form-check">
                              <input type="radio" class="form-check-input" id="paypal" name="paymentMethod" required>
                              <label class="form-check-label" for="paypal">PayPal</label>
                         </div>
                         <div class="row">
                              <div class="col-md-6 mb-3">
                                   <label for="cc-name" class="form-label">Name on card</label>
                                   <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                   <small class="text-muted">Full name as displayed on card</small>
                              </div>
                              <div class="col-md-6 mb-3">
                                   <label for="cc-number" class="form-label">Credit card number</label>
                                   <input type="text" class="form-control" id="cc-number" placeholder="" required>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-3 mb-3">
                                   <label for="cc-expiration" class="form-label">Expiration</label>
                                   <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                              </div>
                              <div class="col-md-3 mb-3">
                                   <label for="cc-cvv" class="form-label">CVV</label>
                                   <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                              </div>
                         </div>
                         <hr class="mb-4">
                         <button class="btn btn-primary btn-lg btn-block mb-5" type="submit">Place Order</button>
                    </form>
               </div>
               <div class="col-md-4 order-md-2 mb-4 border pt-3">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                         <span class="text-muted">Your cart</span>
                         <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                         <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                   <h6 class="my-0">Product name</h6>
                                   <small class="text-muted">Brief description</small>
                              </div>
                              <span class="text-muted">$12</span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                   <h6 class="my-0">Second product</h6>
                                   <small class="text-muted">Brief description</small>
                              </div>
                              <span class="text-muted">$8</span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                   <h6 class="my-0">Third item</h6>
                                   <small class="text-muted">Brief description</small>
                              </div>
                              <span class="text-muted">$5</span>
                         </li>
                         <li class="list-group-item d-flex justify-content-between">
                              <span>Total (USD)</span>
                              <strong>$25</strong>
                         </li>
                    </ul>
               </div>
          </div>
     </div>

     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
</body>

</html>