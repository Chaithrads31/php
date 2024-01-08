-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 08:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itt_ojt`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `course_id` varchar(150) NOT NULL,
  `chapters` varchar(150) NOT NULL,
  `details` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('live','hidden') NOT NULL DEFAULT 'live'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `course_id`, `chapters`, `details`, `date`, `status`) VALUES
(1, '1,2,3', 'Module 1: Introduction to Web Development', '<ul>\n<li>Overview of Web Development</li>\n<li>Client-side vs. Server-side Development</li>\n<li>Frontend vs. Backend Development</li>\n<li>Basics of HTTP and Web Servers</li>\n</ul>', '2023-12-20 18:25:49', 'live'),
(2, '1,2', 'Module 2: HTML/HTML5 and CSS/CSS3 Fundamentals', '<ul>\n<li>HTML Structure and Tags</li>\n<li>HTML5 Semantic Elements</li>\n<li>CSS Styling and Selectors</li>\n<li>CSS3 Transitions and Animations</li>\n<li>Responsive Web Design with Media Queries</li>\n</ul>', '2023-12-20 18:34:40', 'live'),
(3, '1', 'Module 3: JavaScript Basics', '<ul>\n<li>Introduction to JavaScript</li>\n<li>Variables, Data Types, and Operators</li>\n<li>Control Structures (if statements, loops)</li>\n<li>Functions and Scope</li>\n<li>Working with Arrays and Objects</li>\n<li>DOM Manipulation and Events</li>\n</ul>', '2023-12-20 18:13:27', 'live'),
(4, '1', 'Module 4: Angular', '<ul>\n<li>Introduction to Angular</li>\n<li>Components, Modules, and Services</li>\n<li>Data Binding and Forms</li>\n<li>Routing in Angular</li>\n<li>Lazy Loading in Angular</li>\n<li>Server-Side Rendering (SSR) with Angular</li>\n<li>TypeScript in Angular</li>\n<li>Angular Directives and Pipes</li>\n</ul>', '2023-12-20 18:13:48', 'live'),
(5, '1', 'Module 5: Bootstrap and Material Design', '<ul>\r\n<li>Overview of Bootstrap</li>\r\n<li>Grid System and Responsive Layouts</li>\r\n<li>Bootstrap Components (Navbar, Forms, Modals, etc.)</li>\r\n<li>Material Design Principles</li>\r\n<li>Material Design Components and Theming</li>\r\n</ul>', '2023-12-20 18:15:50', 'live'),
(6, '1', 'Module 6: Node.js Basics', '<ul>\r\n<li>Introduction to Node.js</li>\r\n<li>Understanding the Event Loop</li>\r\n<li>NPM (Node Package Manager)</li>\r\n<li>File System and Modules in Node.js</li>\r\n</ul>', '2023-12-20 18:15:50', 'live'),
(7, '1', 'Module 7: Advanced Node.js', '<ul>\r\n<li>Asynchronous JavaScript in Node.js</li>\r\n<li>Callbacks, Promises, and Async/Await</li>\r\n<li>Streams and Buffers</li>\r\n<li>Building RESTful APIs with Node.js</li>\r\n<li>Web Services Creation with Node.js</li>\r\n</ul>', '2023-12-20 18:16:44', 'live'),
(8, '1', 'Module 8: Express Framework', '<ul>\r\n<li>Introduction to Express.js</li>\r\n<li>Routing and Middleware</li>\r\n<li>Templating Engines (e.g., EJS, Pug)</li>\r\n<li>Error Handling and Debugging</li>\r\n</ul>', '2023-12-20 18:16:44', 'live'),
(9, '1', 'Module 9: Microservices Architecture', '<ul>\r\n<li>Introduction to Microservices</li>\r\n<li>Benefits and Challenges of Microservices</li>\r\n<li>Design Principles for Microservices</li>\r\n<li>Communication between Microservices</li>\r\n</ul>', '2023-12-20 18:17:34', 'live'),
(10, '1', 'Module 10: Databases - MySQL and PostgreSQL', '<ul>\r\n<li>Introduction to Databases</li>\r\n<li>Database Design Principles</li>\r\n<li>SQL Queries (SELECT, INSERT, UPDATE, DELETE)</li>\r\n<li>Indexing and Optimization Techniques</li>\r\n<li>Normalization and Database Relationships</li>\r\n</ul>', '2023-12-20 18:17:34', 'live'),
(11, '1', 'Module 11: Database Optimization', '<ul>\r\n<li>Query Optimization Strategies</li>\r\n<li>Indexing and Performance Tuning</li>\r\n<li>Caching Techniques</li>\r\n<li>Database Security Best Practices</li>\r\n</ul>', '2023-12-20 18:18:12', 'live'),
(12, '1', 'Module 12: Integration and Full-Stack Application', '<ul>\r\n<li>Integrating Angular with Node.js and Express</li>\r\n<li>Developing a Full-Stack Web Application</li>\r\n<li>User Authentication and Authorization</li>\r\n<li>Data Validation and Sanitization</li>\r\n</ul>', '2023-12-20 18:18:12', 'live'),
(13, '1', 'Module 13: Deployment and Best Practices', '<ul>\r\n<li>Version Control with Git</li>\r\n<li>Deploying Angular and Node.js Applications</li>\r\n<li>Performance Optimization</li>\r\n<li>Security Best Practices</li>\r\n</ul>', '2023-12-20 18:18:56', 'live'),
(14, '1', 'Module 14: Project Work', '<ul>\r\n<li>Participants work on a comprehensive full-stack web development project with Angular, Node.js, TypeScript, Lazy Loading, SSR, and a microservices architecture.</li>\r\n<li>Emphasis on applying concepts learned throughout the course.</li>\r\n<li>Code reviews and project presentations.</li>\r\n</ul>', '2023-12-20 18:18:56', 'live'),
(15, '1', 'Overview', '<p>This course provides an in-depth understanding of full-stack web development, including advanced concepts such as Lazy Loading, SSR, TypeScript, Bootstrap, Material Design, and microservices architecture. The hands-on project work ensures practical application of the skills learned throughout the course.</p>', '2023-12-20 18:20:45', 'live');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `duration` tinyint(4) NOT NULL,
  `img` varchar(150) NOT NULL,
  `status` enum('active','deactive','trash') NOT NULL DEFAULT 'active',
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `duration`, `img`, `status`, `date`) VALUES
(1, 'Advanced Full-Stack Web Development with Angular and Node.js', 'desc 1', 6, 'course-2-3.png', 'active', '2023-12-08 12:29:56'),
(2, 'Comprehensive Full-Stack Web Development with React and Node.js', 'desc 2', 4, 'course-2-4.png', 'active', '2023-12-08 12:29:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
