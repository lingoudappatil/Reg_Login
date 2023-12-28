document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevents the form from submitting normally

            // Get the entered email and password
            var enteredEmail = document.getElementById('email').value;
            var enteredPassword = document.getElementById('password').value;

            // For simplicity, you can hardcode a set of valid credentials here
            var validEmail = 'user@example.com';
            var validPassword = 'password123';

            // Check if the entered credentials match the valid ones
            if (enteredEmail === validEmail && enteredPassword === validPassword) {
                alert('Login successful!');
                // Redirect to another page or perform other actions here
            } else {
                alert('Invalid email or password. Please try again.');
            }
        });