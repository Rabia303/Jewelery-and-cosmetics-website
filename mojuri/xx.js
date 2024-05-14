
                            // Initialize total quantity
                            var totalQuantity = 0;

                            $(document).ready(function() {

                                // Function to update subtotal for a specific input field
                                function updateSubtotal(inputField) {
                                    var quantity = parseInt(inputField.val());
                                    var price = parseFloat(inputField.closest('tr').find('.price').text().replace('$', ''));
                                    var subtotal = quantity * price;
                                    inputField.closest('tr').find('.product-subtotal span').text('$' + subtotal.toFixed(2)); // Display subtotal with 2 decimal places

                                    // Update the total quantity
                                    totalQuantity += quantity;

                                    return subtotal;
                                }


                                // Function to update the total price and total quantity
                                // Function to update the total quantity
                                function updateTotal() {
                                    totalQuantity = 0; // Reset the total quantity to 0

                                    var total = 0;
                                    $('.product-quantity input.qty').each(function() {
                                        total += updateSubtotal($(this)); // Update subtotal and add to total
                                    });

                                    $('#totalPrice').text('$' + total.toFixed(2)); // Display total price with 2 decimal places
                                    $('#totalQuantityDisplay').text(totalQuantity); // Display total quantity
                                }

                                // Plus button click event
                                $('.plus').click(function() {
                                    var inputField = $(this).siblings('.qty');
                                    var currentQuantity = parseInt(inputField.val());
                                    inputField.val(currentQuantity + 1);
                                    var subtotal = updateSubtotal(inputField);
                                    updateTotal();
                                });

                                // Minus button click event
                                $('.minus').click(function() {
                                    var inputField = $(this).siblings('.qty');
                                    var currentQuantity = parseInt(inputField.val());
                                    if (currentQuantity > 1) {
                                        inputField.val(currentQuantity - 1);
                                        var subtotal = updateSubtotal(inputField);
                                        updateTotal();
                                    }
                                });

                                // Initial calculation of total
                                updateTotal();
                            });
                       