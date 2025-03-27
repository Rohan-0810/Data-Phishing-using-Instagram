# Data-Phishing-using-Instagram


**Overview**  
This project explores **data phishing on Instagram**, demonstrating how cybercriminals trick users into disclosing sensitive information. It simulates phishing attacks by creating a **fake Instagram login page** using **HTML, CSS, and JavaScript**, capturing user credentials, and storing them in a CSV file.  

⚠ **Disclaimer**: This project is for **educational and awareness purposes only**. Any misuse of this information is strictly discouraged. The author holds no responsibility for unethical use.  


**Objectives**  
- Simulate a phishing attack to educate users on **how Instagram phishing works**.  
- Demonstrate **common phishing techniques** and how users fall victim to them.  
- Provide insights on **cybersecurity best practices** to protect against phishing attacks.  


 **Technologies Used**  
 **Frontend**  
- **HTML** – Structure for phishing webpage.  
- **CSS (Bootstrap)** – Styling for a realistic Instagram-like interface.  
- **JavaScript** – Handles interactive elements and form validation.  

**Backend**  
- **PHP** – Used to handle form submission and data capturing.  

**Database**  
- **CSV/Excel** – Stores captured user credentials.

**How It Works**  

1. A **phishing website** is created that mimics Instagram’s login page.  
2. The victim unknowingly enters their **username and password**.  
3. The credentials are **sent to the attacker** and stored in a **CSV file**.  
4. The victim is redirected to the **real Instagram login page** to avoid suspicion.  

**Phishing Attack Simulation**  
- A PHP script (`hack.php`) is connected to the fake Instagram login page.  
- When credentials are entered, they are **captured and logged**.  
- The user continues to the real Instagram page, unaware of the breach.  



**Phishing Techniques Used**  

- **Fake Login Pages**: Mimicking Instagram’s login screen to trick users.  
- **Social Engineering**: Convincing messages to lure users into clicking links.  
- **Email & Message Phishing**: Fake notifications prompting users to log in.  
- **URL Spoofing**: Slightly altered domains that look legitimate.  
- **Man-in-the-Middle Attack**: Intercepting data between users and servers.  


**How to Protect Yourself**  

1. **Verify URLs**: Always check the website address before entering credentials.  
2. **Enable Two-Factor Authentication (2FA)**: Adds an extra security layer.  
3. **Avoid Clicking Unknown Links**: Especially from emails or messages.  
4. **Use a Password Manager**: Helps detect fake websites.  
5. **Stay Informed**: Be aware of the latest phishing trends.  


**Installation & Setup**  

**Requirements**  
- PHP-enabled server (e.g., XAMPP, WAMP, or a live hosting server)  
- Web browser (Chrome, Firefox, Edge)  

**Steps to Run the Project**  
1. Clone this repository:  
   ```bash
   git clone https://github.com/your-repo-name
   cd your-repo-name
   ```
2. Start your local PHP server:  
   ```bash
   php -S localhost:8000
   ```
3. Open `index.html` in your browser.  
4. If deployed on a server, ensure `hack.php` is properly configured to capture input.  


**Ethical Considerations**  

- This project is intended for **academic learning only**.  
- Conduct phishing tests only in **authorized environments**.  
- Unauthorized data capture is **illegal and punishable** under cyber laws.  
