
---

# **Doctor Appointment Booking System**  

This is a simple **Doctor Appointment Booking System** built with **PHP and MySQL**. Users can book appointments with a pre-stored doctor.  

---

## **📌 Features**
- Displays doctor details.  
- Allows users to book an appointment.  
- Stores appointment details in the database.  
- Shows a success message after booking.  

---

## **📁 Folder Structure**
```
/[project_folder]/
│-- db.php          # Database connection file
│-- index.php       # Main page for booking appointments
│-- sql.txt         #db details
│-- README.md       # Instructions to run the project
```

Replace `[project_folder]` with your actual project folder name.  

---

## **🔧 Requirements**
- **XAMPP** or **WAMP** (To run PHP & MySQL).  
- **MySQL Database**.  
- **Web Browser** (Chrome, Firefox, etc.).  

---

## **🚀 How to Run the Project**

### **1️⃣ Install XAMPP (or WAMP)**
Download and install **XAMPP** from [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)  
Or **WAMP** from [https://www.wampserver.com/en/](https://www.wampserver.com/en/).  

### **2️⃣ Start Apache & MySQL**
- Open **XAMPP Control Panel**.  
- Click **Start** on **Apache** and **MySQL**.  

### **3️⃣ Create the Database**
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin/`).  
2. Click **New** and create a database named **`apooiment_system`**.  
3. Open the **SQL** tab and paste the following script:  

   ```sql
   CREATE TABLE doctors (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       specialization VARCHAR(255) NOT NULL
   );

   CREATE TABLE appointments (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       phone VARCHAR(20) NOT NULL,
       date DATE NOT NULL,
       doctor_id INT,
       FOREIGN KEY (doctor_id) REFERENCES doctors(id)
   );

   -- Insert a sample doctor
   INSERT INTO doctors (name, specialization) VALUES ('Dr. Smith', 'Cardiologist');
   ```

4. Click **Go** to execute the query.  

### **4️⃣ Move Project Files**
1. Copy the **project folder** (`[project_folder]`).  
2. Paste it inside `htdocs` (`C:\xampp\htdocs\`).  

### **5️⃣ Update Database Connection**
1. Open your browser.  
2. Go to:  
   👉 `http://localhost/[project_folder]/index.php`  
3. You should see the **Doctor Details** and **Booking Form**.  

### **7️⃣ Book an Appointment**
- Fill in your **name**, **phone**, and **date**.  
- Click **Book Appointment**.  
- A success message will appear if the booking is saved.  

---

## **🛠️ Troubleshooting**
❌ **Getting a database connection error?**  
✔️ Check `db.php` and update **MySQL username/password** if needed.  

❌ **Page not loading?**  
✔️ Ensure **XAMPP is running** and files are inside `htdocs/`.  

❌ **Appointments not saving?**  
✔️ Check if the **appointments** table exists in `phpMyAdmin`.  

---

## **📌 Future Improvements**
- Email confirmation for bookings.  
- Multiple doctors selection.  
- Admin panel to manage appointments.  

Enjoy your **Doctor Appointment Booking System**! 🎉🚀
