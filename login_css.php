/* GLOBAL PAGE STYLE */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #6366F1, #3B82F6);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* LOGIN CARD */
.container {
    background: white;
    padding: 30px 35px;
    width: 350px;                /* ❗ small width */
    border-radius: 12px;
    box-shadow: 0px 8px 25px rgba(0,0,0,0.15);
    text-align: center;
}

/* TITLE */
.container h2 {
    margin-bottom: 20px;
    color: #1f2937;
    font-size: 24px;
}

/* LABELS */
label {
    display: block;
    text-align: left;
    font-weight: bold;
    color: #374151;
    margin-top: 12px;
}

/* INPUTS */
input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 8px;
    border: 1px solid #d1d5db;
    font-size: 15px;
    transition: 0.2s ease;
}

input:focus {
    border-color: #6366F1;
    box-shadow: 0px 0px 5px rgba(99,102,241,0.4);
}

/* BUTTON */
button {
    margin-top: 18px;
    width: 100%;
    padding: 10px;
    background: #6366F1;
    border: none;
    border-radius: 8px;
    color: white;
    font-size: 17px;
    cursor: pointer;
    transition: 0.2s ease;
}

button:hover {
    background: #4F46E5;
    transform: translateY(-2px);
}

/* SMALL LINK */
p a {
    color: #3B82F6;
    text-decoration: none;
    font-weight: bold;
}

p a:hover {
    text-decoration: underline;
}

/* RESPONSIVE SMALL SCREEN */
@media (max-width: 400px) {
    .container {
        width: 90%;
        padding: 20px;
    }
}
