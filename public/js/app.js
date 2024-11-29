document.addEventListener("DOMContentLoaded", () => {
    // Handle Register
    const registerForm = document.querySelector("#register-form");
    if (registerForm) {
        registerForm.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formData = new FormData(registerForm);
            const response = await fetch("/api/register", {
                method: "POST",
                body: formData,
            });
            const result = await response.json();
            alert(result.message || "Registration successful!");
        });
    }

    // Handle Login
    const loginForm = document.querySelector("#login-form");
    if (loginForm) {
        loginForm.addEventListener("submit", async (e) => {
            e.preventDefault();
            const formData = new FormData(loginForm);
            const response = await fetch("/api/login", {
                method: "POST",
                body: formData,
            });
            const result = await response.json();
            if (result.access_token) {
                localStorage.setItem("access_token", result.access_token);
                window.location.href = "/dashboard";
            } else {
                alert(result.message || "Login failed!");
            }
        });
    }

    // Handle Logout
    const logoutButton = document.querySelector("#logout-button");
    if (logoutButton) {
        logoutButton.addEventListener("click", async () => {
            const token = localStorage.getItem("access_token");
            const response = await fetch("/api/logout", {
                method: "POST",
                headers: { Authorization: `Bearer ${token}` },
            });
            const result = await response.json();
            alert(result.message || "Logged out successfully!");
            localStorage.removeItem("access_token");
            window.location.href = "/login";
        });
    }
});
