# 🛡️ BugHunters — AegisAI

> An AI governance and data protection platform that helps organizations monitor, detect, and prevent confidential company data from being uploaded to unapproved AI tools.

---

## 📌 Overview

The rapid adoption of generative AI tools introduces security and governance risks for organizations. Employees may unknowingly upload confidential files, source code, personal information, financial records, or internal documents to unauthorized AI platforms.

BugHunters – AegisAI provides a centralized AI governance solution that monitors AI tool usage, detects sensitive information, blocks risky uploads before transmission, and alerts managers through a real-time dashboard.

---

## ✨ Features

- 🔍 Real-time AI activity monitoring
- 🚫 Pre-upload confidential data protection
- 🤖 AI tool classification
- 📊 AI governance dashboard
- 👨‍💼 Manager approval centre
- 🌐 IP-based policy enforcement
- 📜 Policy management
- 🚨 Incident management
- 🔔 Notifications and audit logs

---

## 🛠️ Tech Stack

### Frontend
- HTML5
- CSS3
- JavaScript
- Chart.js
- Lucide Icons

### Backend
- PHP 8.2
- Laravel 11
- Laravel Sanctum

### Database
- SQLite

### Deployment
- Vercel
- Render

### Development Tools
- Git
- GitHub
- Visual Studio Code

---

## 📂 Project Structure

```text
bugHunters/
│
├── Backend/
│   ├── app/
│   ├── routes/
│   ├── database/
│   ├── public/
│   ├── storage/
│   └── composer.json
│
├── Frontend/
│   ├── index.html
│   ├── manager.html
│   ├── app.js
│   └── styles.css
│
├── README.md
└── render.yaml
```

---

## 🚀 Installation

### Clone repository

```bash
git clone https://github.com/amberng999-stack/bugHunters.git
cd bugHunters
```

### Backend

```bash
cd Backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Backend will run at:

```
http://127.0.0.1:8000
```

### Frontend

Open `Frontend/index.html`

or use VS Code Live Server.

---

## 📡 API

```
GET    /api/live-detections
POST   /api/live-detections/scan
POST   /api/live-detections/action

/api/v1/auth
/api/v1/employees
/api/v1/departments
/api/v1/devices
/api/v1/ai-tools
/api/v1/incidents
/api/v1/dashboard
/api/v1/policies
/api/v1/notifications
/api/v1/audit-logs
```

---

## 🔒 Privacy

- Detects sensitive data before upload.
- Blocks unauthorized AI uploads.
- Logs incidents.
- Enforces company AI policies.
- Supports workstation IP restrictions.

---

## 📈 Future Improvements

- Browser extension
- AI content classification
- Enterprise authentication
- Email notifications
- WebSocket real-time updates
- SIEM integration

---

## 👥 Team

| Member | Responsibility |
|---------|----------------|
| Ng Ying Xi | Team Leader |
| Team Member | Frontend |
| Team Member | Backend |
| Team Member | Documentation |

---

## 📄 License

This project is developed for educational and hackathon purposes.
