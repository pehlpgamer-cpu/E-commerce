# 📁 Professional JavaScript Folder Structure

This document describes a **production-ready, enterprise-grade JavaScript project structure**.  
It is suitable for **vanilla JavaScript**, **frontend frameworks**, and **Node.js backends**.

---

## 🏗️ Project Root Structure

```txt
project-root/
│
├── public/
├── src/
├── tests/
├── scripts/
├── docs/
│
├── .env
├── .env.example
├── .gitignore
├── package.json
├── package-lock.json / yarn.lock / pnpm-lock.yaml
├── jsconfig.json / tsconfig.json
├── eslint.config.js
├── prettier.config.js
└── README.md
```

---

## 🌐 `public/` — Static Assets (No Processing)

```txt
public/
├── index.html
├── favicon.ico
├── robots.txt
└── assets/
    ├── images/
    ├── fonts/
    └── icons/
```

**Purpose**
- Served directly by the web server
- Not bundled or transpiled

**Rules**
- ❌ No application logic
- ✅ Only static files

---

## 🧠 `src/` — Application Source Code

```txt
src/
├── app/
├── components/
├── pages/
├── services/
├── api/
├── store/
├── hooks/
├── utils/
├── helpers/
├── constants/
├── config/
├── styles/
├── assets/
└── main.js
```

---

## 🚀 `src/app/` — App Initialization

```txt
app/
├── bootstrap.js
├── router.js
└── app.js
```

**Responsibilities**
- Application startup
- Routing setup
- Dependency initialization

---

## 🧩 `src/components/` — Reusable UI Components

```txt
components/
├── Button/
│   ├── Button.js
│   ├── Button.css
│   └── index.js
├── Modal/
└── Navbar/
```

**Rules**
- Reusable
- UI-focused
- Minimal or no business logic

---

## 📄 `src/pages/` — Route-Level Views

```txt
pages/
├── Home/
├── Login/
└── Dashboard/
```

| Components | Pages |
|----------|------|
| Reusable | Route-based |
| Small | Large |
| UI only | UI + logic |

---

## 🔌 `src/services/` — Business Logic Layer

```txt
services/
├── auth.service.js
├── user.service.js
└── payment.service.js
```

**Purpose**
- Business rules
- Framework-agnostic logic
- Reusable across UI & API

---

## 🌍 `src/api/` — HTTP & External APIs

```txt
api/
├── httpClient.js
├── auth.api.js
└── users.api.js
```

**Best Practice**
- Centralize API communication
- Separate from business logic

---

## 🧠 `src/store/` — Global State Management

```txt
store/
├── index.js
├── auth.store.js
└── user.store.js
```

---

## 🪝 `src/hooks/` — Reusable Logic Hooks

```txt
hooks/
├── useAuth.js
└── useFetch.js
```

---

## 🛠️ `src/utils/` — Pure Utility Functions

```txt
utils/
├── formatDate.js
├── debounce.js
└── uuid.js
```

---

## 🧰 `src/helpers/` — Context-Aware Helpers

```txt
helpers/
├── dom.helper.js
└── validation.helper.js
```

---

## 🧾 `src/constants/` — Static Values

```txt
constants/
├── routes.js
├── roles.js
└── messages.js
```

---

## ⚙️ `src/config/` — App Configuration

```txt
config/
├── env.js
└── api.config.js
```

---

## 🎨 `src/styles/` — Global Styles

```txt
styles/
├── reset.css
├── variables.css
└── global.css
```

---

## 🧪 `tests/` — Automated Testing

```txt
tests/
├── unit/
├── integration/
└── e2e/
```

---

## 🤖 `scripts/` — Automation Scripts

```txt
scripts/
├── build.js
├── seed.js
└── cleanup.js
```

---

## 📚 `docs/` — Documentation

```txt
docs/
├── architecture.md
├── api.md
└── conventions.md
```

---

## 🧠 Professional Architecture Rules

### ✅ Best Practices
- Single responsibility per folder
- Separation of concerns
- Flat over deep nesting
- Consistent naming conventions

### ❌ Common Mistakes
- API calls inside components
- Mixing business logic with UI
- Deeply nested folders (5+ levels)

---

## 🏢 Enterprise-Scale Alternative

```txt
src/
├── modules/
│   ├── auth/
│   │   ├── auth.service.js
│   │   ├── auth.api.js
│   │   ├── auth.store.js
│   │   └── auth.routes.js
│   └── users/
```

---

## ✅ Summary

This structure:
- Scales from small to enterprise projects
- Works with modern JS tooling
- Encourages clean architecture
- Is ideal for academic and professional use
