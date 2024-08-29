document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('signin-form');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        
        // Dummy logic to check if the email exists (replace with real check)
        const email = document.getElementById('signin-email').value;
        const password = document.getElementById('signin-password').value;
        
        if (!email || !password) {
            alert('Please enter both email and password.');
            return;
        }
        
        // Dummy condition for demonstration
        const userExists = false; // Replace with actual check
        
        if (!userExists) {
            window.location.href = 'signup.html';
        } else {
            alert('Sign in successful!'); // Replace with actual sign-in logic
        }
    });
});