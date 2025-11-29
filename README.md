# QuickPOS - Next-Gen Point of Sale Interface

![Build Status](https://img.shields.io/badge/build-passing-brightgreen)
![Version](https://img.shields.io/badge/version-1.0.0-blue)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4)
![License](https://img.shields.io/badge/license-MIT-green)
![Jira](https://img.shields.io/badge/Jira-Agile-0052CC)

> **The operating system for modern business.**
> A high-performance, pixel-perfect landing page featuring a **Glassmorphism UI**, **Staggered Animations**, and **PHP-driven backend logic**. Built strictly following Agile/Scrum methodologies with GitFlow architecture.

---

## 📑 Table of Contents
1. [Live Demo](#-live-demo)
2. [Project Overview](#-project-overview)
3. [Key Features](#-key-features)
4. [Agile Methodology & Process](#-agile-methodology--process-rigor)
5. [Technical Architecture](#-technical-architecture)
6. [Installation & Setup](#-installation--setup)
7. [The Team](#-the-team)
8. [Project Gallery](#-project-gallery)

---

## 🚀 Live Demo
**[CLICK HERE TO LAUNCH QUICKPOS](https://your-website-link-here.com)** *(Note: Link updated upon final deployment)*

---

## 💡 Project Overview
**QuickPOS** is designed to solve the problem of clunky, outdated POS software marketing. This project serves as the primary marketing funnel, designed to convert visitors into leads via a high-end User Experience (UX).

The goal was not just to write code, but to simulate a real-world **Software Development Life Cycle (SDLC)**. We utilized **Jira** for task tracking, **GitHub** for version control, and **Slack** for team synchronization.

---

## ✨ Key Features

### 🎨 Frontend (UI/UX)
* **Glassmorphism Aesthetic:** Utilizes `backdrop-filter: blur()` and semi-transparent RGBA backgrounds to create depth and hierarchy.
* **Dynamic "Tech-Grid" Background:** Custom CSS radial-gradients create a modern SaaS grid pattern that fades into the background.
* **3D Transform Animations:**
    * **Hero Section:** Floating dashboard cards (`perspective: 1000px`) that react to mouse position.
    * **Feature Cards:** "Holographic" inner glow effects using pseudo-elements (`::before`) and CSS transitions.
* **Mobile-First Responsiveness:** Fully adaptive Flexbox and CSS Grid layouts that stack perfectly on mobile (`@media (max-width: 768px)`).

### ⚙️ Backend (PHP Logic)
* **Secure Form Handling:** The `contact.php` engine processes `POST` requests securely.
* **Server-Side Validation:**
    * Sanitizes email inputs via `filter_var()`.
    * Strips HTML tags to prevent XSS attacks via `strip_tags()`.
    * Validates required fields before processing.
* **Session Feedback:** Redirects users to a custom `thank-you.html` upon successful submission.

---

## 🔄 Agile Methodology & Process Rigor

We strictly adhered to the **Scrum Framework**, executing **two 1-week sprints**.

### 1. The Toolchain ("The Virtual Office")
* **Jira Software:** The Single Source of Truth. All Epics, Stories, and Tasks were logged here.
* **GitHub:** Integrated with Jira. Every commit message includes a Jira Ticket ID (e.g., `[POS-13]`) for traceability.
* **Slack:** Used for Daily Standups and automated webhooks from GitHub/Jira.

### 2. Branching Strategy (GitFlow)
We enforced a **Protected Main Branch** policy. No direct commits were allowed.
```mermaid
graph LR
A[Main Branch] -- Branch --> B(Feature/Hero-Section)
B -- Commit --> C(Work in Progress)
C -- Pull Request --> D{Code Review}
D -- Merge --> A
