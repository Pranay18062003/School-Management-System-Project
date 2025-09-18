<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduManage Pro | School Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Global Styles */
        :root {
            --primary: #4a6fa5;
            --secondary: #166088;
            --accent: #4fc3f7;
            --light: #f8f9fa;
            --dark: #343a40;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        section {
            padding: 80px 0;
        }
        
        h1, h2, h3, h4 {
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        h1 {
            font-size: 2.5rem;
        }
        
        h2 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }
        
        h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        p {
            margin-bottom: 15px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn:hover {
            background: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid white;
            margin-left: 15px;
        }
        
        .btn-outline:hover {
            background: white;
            color: var(--primary);
        }
        
        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        header.scrolled {
            padding: 10px 0;
            background: rgba(255, 255, 255, 0.95);
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }
        
        .logo span {
            color: var(--secondary);
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            color: white;
            display: flex;
            align-items: center;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease;
        }
        
        .hero-btns {
            animation: fadeIn 1.5s ease;
        }
        
        /* User Roles Section */
        .roles {
            background: white;
        }
        
        .roles-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .role-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .role-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .role-icon {
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .role-card h3 {
            font-size: 1.5rem;
            color: var(--secondary);
        }
        
        /* Subjects Section */
        .subjects {
            background: #f1f5f9;
        }
        
        .subjects-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }
        
        .subject-card {
            background: white;
            border-radius: 10px;
            width: 150px;
            height: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .subject-card:hover {
            transform: scale(1.1);
            background: var(--primary);
            color: white;
        }
        
        .subject-card:hover .subject-icon {
            color: white;
        }
        
        .subject-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        /* Timetable Section */
        .timetable {
            background: white;
        }
        
        .timetable-container {
            overflow-x: auto;
            margin-top: 50px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }
        
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }
        
        th {
            background: var(--primary);
            color: white;
            font-weight: 600;
        }
        
        tr:nth-child(even) {
            background: #f8f9fa;
        }
        
        .period {
            position: relative;
        }
        
        .period-details {
            display: none;
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: var(--dark);
            color: white;
            padding: 10px;
            border-radius: 5px;
            width: 150px;
            z-index: 10;
            font-size: 0.9rem;
        }
        
        .period:hover .period-details {
            display: block;
        }
        
        /* Exams Section */
        .exams {
            background: #f1f5f9;
        }
        
        .exams-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .exam-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .exam-card h3 {
            color: var(--secondary);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .exam-icon {
            margin-right: 10px;
            color: var(--primary);
        }
        
        .calendar {
            margin-top: 30px;
        }
        
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }
        
        .calendar-day {
            text-align: center;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        
        .calendar-day.active {
            background: var(--primary);
            color: white;
            font-weight: bold;
        }
        
        /* Marks Section */
        .marks {
            background: white;
        }
        
        .chart-container {
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .chart-placeholder {
            width: 100%;
            height: 400px;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .filters {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .filter-btn {
            padding: 8px 20px;
            background: #f1f5f9;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-btn.active {
            background: var(--primary);
            color: white;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 20px;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .footer-col h3 {
            color: white;
            margin-bottom: 25px;
            font-size: 1.3rem;
        }
        
        .footer-col p, .footer-col a {
            color: #adb5bd;
            margin-bottom: 15px;
            display: block;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-col a:hover {
            color: white;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #adb5bd;
            font-size: 0.9rem;
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            h1 {
                font-size: 2.2rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            section {
                padding: 60px 0;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 80px);
                background: white;
                flex-direction: column;
                align-items: center;
                padding: 40px 0;
                transition: all 0.5s ease;
            }
            
            .nav-links.active {
                left: 0;
            }
            
            .nav-links li {
                margin: 15px 0;
            }
            
            .hamburger {
                display: block;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .btn {
                padding: 10px 20px;
            }
        }
        
        @media (max-width: 576px) {
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero-btns {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }
            
            .btn-outline {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo">Edu<span>Manage</span> Pro</a>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#roles">User Roles</a></li>
                    <li><a href="#subjects">Subjects</a></li>
                    <li><a href="#timetable">Timetable</a></li>
                    <li><a href="#exams">Exams</a></li>
                    <li><a href="#marks">Marks</a></li>
                </ul>
                <div class="hamburger" id="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Streamline Your School Management</h1>
                <p>EduManage Pro is a comprehensive solution designed to simplify school administration, enhance teaching, and improve student learning experiences.</p>
                <div class="hero-btns">
                    <a href="#" class="btn">Get Started</a>
                    <a href="/admin" class="btn btn-outline">Login</a>
                </div>
            </div>
        </div>
    </section>

    <!-- User Roles Section -->
    <section class="roles" id="roles">
        <div class="container">
            <h2>User Roles</h2>
            <div class="roles-container">
                <div class="role-card">
                    <div class="role-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3>Admin</h3>
                    <p>Manage school operations, user accounts, system settings, and generate comprehensive reports.</p>
                </div>
                <div class="role-card">
                    <div class="role-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Teacher</h3>
                    <p>Create lesson plans, record attendance, input grades, and communicate with students and parents.</p>
                </div>
                <div class="role-card">
                    <div class="role-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Student</h3>
                    <p>Access timetables, submit assignments, view grades, and track academic progress.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Subjects Section -->
    <section class="subjects" id="subjects">
        <div class="container">
            <h2>Subjects</h2>
            <div class="subjects-container">
                <div class="subject-card">
                    <div class="subject-icon">
                        <i class="fas fa-square-root-alt"></i>
                    </div>
                    <h4>Mathematics</h4>
                </div>
                <div class="subject-card">
                    <div class="subject-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h4>Science</h4>
                </div>
                <div class="subject-card">
                    <div class="subject-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h4>English</h4>
                </div>
                <div class="subject-card">
                    <div class="subject-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h4>Social Studies</h4>
                </div>
                <div class="subject-card">
                    <div class="subject-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h4>Computer Science</h4>
                </div>
                <div class="subject-card">
                    <div class="subject-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h4>Art</h4>
                </div>
                <div class="subject-card">
                    <div class="subject-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h4>Music</h4>
                </div>
                <div class="subject-card">
                    <div class="subject-icon">
                        <i class="fas fa-running"></i>
                    </div>
                    <h4>Physical Education</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Timetable Section -->
    <section class="timetable" id="timetable">
        <div class="container">
            <h2>Weekly Timetable</h2>
            <div class="timetable-container">
                <table>
                    <thead>
                        <tr>
                            <th>Time/Day</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8:00 - 8:45</td>
                            <td class="period">
                                Mathematics
                                <div class="period-details">Mathematics<br>Mr. Johnson<br>Room 201</div>
                            </td>
                            <td class="period">
                                English
                                <div class="period-details">English<br>Ms. Williams<br>Room 105</div>
                            </td>
                            <td class="period">
                                Science
                                <div class="period-details">Science<br>Dr. Smith<br>Lab 3</div>
                            </td>
                            <td class="period">
                                Mathematics
                                <div class="period-details">Mathematics<br>Mr. Johnson<br>Room 201</div>
                            </td>
                            <td class="period">
                                Physical Education
                                <div class="period-details">PE<br>Coach Davis<br>Gym</div>
                            </td>
                        </tr>
                        <tr>
                            <td>8:50 - 9:35</td>
                            <td class="period">
                                English
                                <div class="period-details">English<br>Ms. Williams<br>Room 105</div>
                            </td>
                            <td class="period">
                                Science
                                <div class="period-details">Science<br>Dr. Smith<br>Lab 3</div>
                            </td>
                            <td class="period">
                                Mathematics
                                <div class="period-details">Mathematics<br>Mr. Johnson<br>Room 201</div>
                            </td>
                            <td class="period">
                                History
                                <div class="period-details">History<br>Mr. Brown<br>Room 208</div>
                            </td>
                            <td class="period">
                                Art
                                <div class="period-details">Art<br>Ms. Garcia<br>Art Room</div>
                            </td>
                        </tr>
                        <tr>
                            <td>9:40 - 10:25</td>
                            <td class="period">
                                Science
                                <div class="period-details">Science<br>Dr. Smith<br>Lab 3</div>
                            </td>
                            <td class="period">
                                Mathematics
                                <div class="period-details">Mathematics<br>Mr. Johnson<br>Room 201</div>
                            </td>
                            <td class="period">
                                English
                                <div class="period-details">English<br>Ms. Williams<br>Room 105</div>
                            </td>
                            <td class="period">
                                Computer Science
                                <div class="period-details">Computer Science<br>Mr. Lee<br>Computer Lab</div>
                            </td>
                            <td class="period">
                                Music
                                <div class="period-details">Music<br>Mr. Wilson<br>Music Room</div>
                            </td>
                        </tr>
                        <tr>
                            <td>10:30 - 11:15</td>
                            <td colspan="5" style="text-align: center; background: #f8f9fa;">Break</td>
                        </tr>
                        <tr>
                            <td>11:20 - 12:05</td>
                            <td class="period">
                                History
                                <div class="period-details">History<br>Mr. Brown<br>Room 208</div>
                            </td>
                            <td class="period">
                                Computer Science
                                <div class="period-details">Computer Science<br>Mr. Lee<br>Computer Lab</div>
                            </td>
                            <td class="period">
                                Physical Education
                                <div class="period-details">PE<br>Coach Davis<br>Gym</div>
                            </td>
                            <td class="period">
                                Science
                                <div class="period-details">Science<br>Dr. Smith<br>Lab 3</div>
                            </td>
                            <td class="period">
                                Mathematics
                                <div class="period-details">Mathematics<br>Mr. Johnson<br>Room 201</div>
                            </td>
                        </tr>
                        <tr>
                            <td>12:10 - 12:55</td>
                            <td class="period">
                                Computer Science
                                <div class="period-details">Computer Science<br>Mr. Lee<br>Computer Lab</div>
                            </td>
                            <td class="period">
                                Physical Education
                                <div class="period-details">PE<br>Coach Davis<br>Gym</div>
                            </td>
                            <td class="period">
                                Art
                                <div class="period-details">Art<br>Ms. Garcia<br>Art Room</div>
                            </td>
                            <td class="period">
                                English
                                <div class="period-details">English<br>Ms. Williams<br>Room 105</div>
                            </td>
                            <td class="period">
                                Science
                                <div class="period-details">Science<br>Dr. Smith<br>Lab 3</div>
                            </td>
                        </tr>
                        <tr>
                            <td>1:00 - 1:45</td>
                            <td class="period">
                                Physical Education
                                <div class="period-details">PE<br>Coach Davis<br>Gym</div>
                            </td>
                            <td class="period">
                                Art
                                <div class="period-details">Art<br>Ms. Garcia<br>Art Room</div>
                            </td>
                            <td class="period">
                                Music
                                <div class="period-details">Music<br>Mr. Wilson<br>Music Room</div>
                            </td>
                            <td class="period">
                                Computer Science
                                <div class="period-details">Computer Science<br>Mr. Lee<br>Computer Lab</div>
                            </td>
                            <td class="period">
                                English
                                <div class="period-details">English<br>Ms. Williams<br>Room 105</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Exams Section -->
    <section class="exams" id="exams">
        <div class="container">
            <h2>Upcoming Exams</h2>
            <div class="exams-container">
                <div class="exam-card">
                    <h3><i class="fas fa-calendar-check exam-icon"></i> Mid-Term Exams</h3>
                    <p>Mid-term exams assess student progress halfway through the semester. These exams cover all material taught up to that point.</p>
                    <p><strong>Date Range:</strong> October 15 - October 19, 2023</p>
                    <p><strong>Preparation Tips:</strong> Review all lecture notes, complete practice problems, and attend review sessions.</p>
                    
                    <div class="calendar">
                        <div class="calendar-header">
                            <h4>October 2023</h4>
                        </div>
                        <div class="calendar-grid">
                            <div class="calendar-day">Sun</div>
                            <div class="calendar-day">Mon</div>
                            <div class="calendar-day">Tue</div>
                            <div class="calendar-day">Wed</div>
                            <div class="calendar-day">Thu</div>
                            <div class="calendar-day">Fri</div>
                            <div class="calendar-day">Sat</div>
                            
                            <!-- Empty days -->
                            <div class="calendar-day"></div>
                            <div class="calendar-day"></div>
                            <div class="calendar-day"></div>
                            <div class="calendar-day"></div>
                            <div class="calendar-day"></div>
                            <div class="calendar-day"></div>
                            <div class="calendar-day">1</div>
                            
                            <div class="calendar-day">2</div>
                            <div class="calendar-day">3</div>
                            <div class="calendar-day">4</div>
                            <div class="calendar-day">5</div>
                            <div class="calendar-day">6</div>
                            <div class="calendar-day">7</div>
                            <div class="calendar-day">8</div>
                            
                            <div class="calendar-day">9</div>
                            <div class="calendar-day">10</div>
                            <div class="calendar-day">11</div>
                            <div class="calendar-day">12</div>
                            <div class="calendar-day">13</div>
                            <div class="calendar-day">14</div>
                            <div class="calendar-day">15</div>
                            
                            <div class="calendar-day active">16</div>
                            <div class="calendar-day active">17</div>
                            <div class="calendar-day active">18</div>
                            <div class="calendar-day active">19</div>
                            <div class="calendar-day">20</div>
                            <div class="calendar-day">21</div>
                            <div class="calendar-day">22</div>
                            
                            <div class="calendar-day">23</div>
                            <div class="calendar-day">24</div>
                            <div class="calendar-day">25</div>
                            <div class="calendar-day">26</div>
                            <div class="calendar-day">27</div>
                            <div class="calendar-day">28</div>
                            <div class="calendar-day">29</div>
                            
                            <div class="calendar-day">30</div>
                            <div class="calendar-day">31</div>
                        </div>
                    </div>
                </div>
                <div class="exam-card">
                    <h3><i class="fas fa-graduation-cap exam-icon"></i> Final Exams</h3>
                    <p>Final exams comprehensively assess all material covered throughout the entire semester.</p>
                    <p><strong>Date Range:</strong> December 10 - December 15, 2023</p>
                    <p><strong>Preparation Tips:</strong> Create a study schedule, form study groups, and utilize all available resources.</p>
                    
                    <div class="calendar">
                        <div class="calendar-header">
                            <h4>December 2023</h4>
                        </div>
                        <div class="calendar-grid">
                            <div class="calendar-day">Sun</div>
                            <div class="calendar-day">Mon</div>
                            <div class="calendar-day">Tue</div>
                            <div class="calendar-day">Wed</div>
                            <div class="calendar-day">Thu</div>
                            <div class="calendar-day">Fri</div>
                            <div class="calendar-day">Sat</div>
                            
                            <!-- Empty days -->
                            <div class="calendar-day"></div>
                            <div class="calendar-day"></div>
                            <div class="calendar-day"></div>
                            <div class="calendar-day"></div>
                            <div class="calendar-day">1</div>
                            <div class="calendar-day">2</div>
                            <div class="calendar-day">3</div>
                            
                            <div class="calendar-day">4</div>
                            <div class="calendar-day">5</div>
                            <div class="calendar-day">6</div>
                            <div class="calendar-day">7</div>
                            <div class="calendar-day">8</div>
                            <div class="calendar-day">9</div>
                            <div class="calendar-day active">10</div>
                            
                            <div class="calendar-day active">11</div>
                            <div class="calendar-day active">12</div>
                            <div class="calendar-day active">13</div>
                            <div class="calendar-day active">14</div>
                            <div class="calendar-day active">15</div>
                            <div class="calendar-day">16</div>
                            <div class="calendar-day">17</div>
                            
                            <div class="calendar-day">18</div>
                            <div class="calendar-day">19</div>
                            <div class="calendar-day">20</div>
                            <div class="calendar-day">21</div>
                            <div class="calendar-day">22</div>
                            <div class="calendar-day">23</div>
                            <div class="calendar-day">24</div>
                            
                            <div class="calendar-day">25</div>
                            <div class="calendar-day">26</div>
                            <div class="calendar-day">27</div>
                            <div class="calendar-day">28</div>
                            <div class="calendar-day">29</div>
                            <div class="calendar-day">30</div>
                            <div class="calendar-day">31</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marks Section -->
    <section class="marks" id="marks">
        <div class="container">
            <h2>Student Performance</h2>
            <div class="filters">
                <button class="filter-btn active">All Subjects</button>
                <button class="filter-btn">Mathematics</button>
                <button class="filter-btn">Science</button>
                <button class="filter-btn">English</button>
                <button class="filter-btn">History</button>
            </div>
            <div class="chart-container">
                <div class="chart-placeholder">
                    <p>Interactive Performance Chart Will Appear Here</p>
                </div>
                <p>Track student progress over time with our comprehensive analytics dashboard. View trends, identify areas for improvement, and celebrate successes.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>EduManage Pro</h3>
                    <p>Streamlining school management for administrators, teachers, and students since 2015.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <a href="#home">Home</a>
                    <a href="#roles">User Roles</a>
                    <a href="#subjects">Subjects</a>
                    <a href="#timetable">Timetable</a>
                    <a href="#exams">Exams</a>
                    <a href="#marks">Marks</a>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Education St, Learnville</p>
                    <p><i class="fas fa-phone"></i> (123) 456-7890</p>
                    <p><i class="fas fa-envelope"></i> info@edumanagepro.com</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 EduManage Pro. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Navigation Toggle
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('navLinks');
        
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // Sticky Header on Scroll
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Active Filter Button Toggle
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // Here you would typically update the chart based on the selected filter
                // For demonstration, we'll just log the selected filter
                console.log(`Filter selected: ${button.textContent}`);
            });
        });

        // Simple Chart Simulation (would be replaced with a real chart library in production)
        const chartPlaceholder = document.querySelector('.chart-placeholder');
        
        // This is just a placeholder - in a real app you would use Chart.js, D3.js, etc.
        function simulateChart() {
            chartPlaceholder.innerHTML = `
                <div style="width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: flex-end;">
                    <div style="display: flex; height: 100%; align-items: flex-end; gap: 10px; padding: 0 20px;">
                        <div style="flex: 1; background: #4a6fa5; height: 70%; position: relative;">
                            <span style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%);">Math</span>
                            <span style="position: absolute; bottom: -25px; left: 50%; transform: translateX(-50%);">85%</span>
                        </div>
                        <div style="flex: 1; background: #166088; height: 85%; position: relative;">
                            <span style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%);">Science</span>
                            <span style="position: absolute; bottom: -25px; left: 50%; transform: translateX(-50%);">92%</span>
                        </div>
                        <div style="flex: 1; background: #4fc3f7; height: 65%; position: relative;">
                            <span style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%);">English</span>
                            <span style="position: absolute; bottom: -25px; left: 50%; transform: translateX(-50%);">78%</span>
                        </div>
                        <div style="flex: 1; background: #28a745; height: 80%; position: relative;">
                            <span style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%);">History</span>
                            <span style="position: absolute; bottom: -25px; left: 50%; transform: translateX(-50%);">88%</span>
                        </div>
                        <div style="flex: 1; background: #ffc107; height: 75%; position: relative;">
                            <span style="position: absolute; top: -25px; left: 50%; transform: translateX(-50%);">Comp Sci</span>
                            <span style="position: absolute; bottom: -25px; left: 50%; transform: translateX(-50%);">82%</span>
                        </div>
                    </div>
                    <div style="text-align: center; margin-top: 20px; color: var(--primary); font-weight: bold;">
                        Average Performance Across Subjects
                    </div>
                </div>
            `;
        }

        // Initialize the chart simulation
        simulateChart();

        // Animation on Scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.role-card, .subject-card, .exam-card');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;
                
                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        // Set initial state for animated elements
        document.querySelectorAll('.role-card, .subject-card, .exam-card').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(20px)';
            element.style.transition = 'all 0.6s ease';
        });

        // Run animation check on load and scroll
        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);

        // Form submission handling (example)
        const contactForm = document.createElement('form'); // This would be a real form in your HTML
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });

        // Current year for copyright
        document.querySelector('.copyright').innerHTML = `&copy; ${new Date().getFullYear()} EduManage Pro. All rights reserved.`;
    </script>
</body>
</html>